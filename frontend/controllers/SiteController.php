<?php
namespace frontend\controllers;

use backend\models\User;
use frontend\models\Attachment;
use frontend\models\ContestSession;


use frontend\models\EmailSubmission;
use frontend\models\RegisterForm;
use frontend\models\Gallery;
use frontend\models\SubmissionForm;
use yii;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\db\Expression;
use frontend\models\SearchContestSession;

/**
 * Site controller
 */
class SiteController extends FrontendController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        if (!isset($_SERVER['HTTP_HOST']) || $_SERVER['HTTP_HOST'] == _FR_DOMAIN) {
            $this->redirect(['site','locale' => 'fr']);
        }
        $emailSubmission = new EmailSubmission();
        Yii::$app->session->remove('registerEmail');
        Yii::$app->session->remove('submissionEmail');
        $locale = Yii::$app->request->get('locale');
        $contestSessions = ContestSession::find()->where(['accepted' => 1])->orderBy(new Expression('rand()'))->limit(9)->all();

        if ($emailSubmission->load(Yii::$app->request->post()) && $emailSubmission->isEmailExists()) {

            Yii::$app->session->set('submissionEmail', $emailSubmission->email);
            if ($locale == DEFAULT_LOCALE) {
                return $this->redirect(['site/submission']);
            }
            return $this->redirect(['site/submission', 'locale' => Yii::$app->request->get('locale')]);

        } elseif ($emailSubmission->load(Yii::$app->request->post()) && !$emailSubmission->isEmailExists()) {

            Yii::$app->session->set('registerEmail', $emailSubmission->email);
            if ($locale == DEFAULT_LOCALE) {
                return $this->redirect(['site/register']);
            }
            return $this->redirect(['site/register', 'locale' => $locale]);
        }
        return $this->render('index', [
                'emailSubmission' => $emailSubmission,
                'contestSessions' => $contestSessions
            ]
        );
    }


    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionRegister()
    {
        $model = new RegisterForm();
        if (Yii::$app->session->hasFlash('registerEmail')) {
            $model->email = Yii::$app->session->getFlash('registerEmail');
        }

        $user = new User();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->register()) {
                return $this->render('success');
            }
        }
        return $this->render('register', [
            'model' => $model,
            'user' => $user
        ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSubmission()
    {
        if (!Yii::$app->session->get('submissionEmail')) {
            return $this->redirect(Yii::$app->urlManager->createUrl('site/register'));
        }

        $model = new SubmissionForm();
        if (Yii::$app->session->hasFlash('submissionEmail')) {
            $model->email = Yii::$app->session->get('submissionEmail');
        }
        $user = User::findByUsername(Yii::$app->session->get('submissionEmail'));

        $contestSessions = $user->getWeeklySubmission();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->submission()) {
                return $this->render('success');
            }
        }

        if (count($contestSessions) >= 4) {
            return $this->render('weekly-limit-reached');
        }


        return $this->render('submission', [
            'model' => $model,
            'user' => $user,
        ]);
    }

    public function actionRegisterUpload()
    {
        $model = new RegisterForm();
        $model->scenario = RegisterForm::_UPLOAD;
        $model->uploadFile = yii\web\UploadedFile::getInstance($model, 'uploadFile');

        if ($model->validate(['uploadFile'])) {
            $attachment = new Attachment();
            if (!empty($model->uploadFile)) {
                $attachment = Attachment::uploadFile($model->uploadFile, 'image');
                $output = ['attachment_id' => $attachment->id];
            } else {
                $output = ['error' => 'Uploading failed.'];
            }
        } else {
            $output = ['error' => $model->getFirstError('uploadFile') . "\n" . Yii::t(_NP_TEXT_DOMAIN, 'No larger than 5MB and only accept .jpg and .png files')];
        }

        echo yii\helpers\Json::encode($output);
    }

    public function actionSubmissionUpload()
    {
        $model = new SubmissionForm();
        $model->scenario = SubmissionForm::_UPLOAD;
        $model->uploadFile = yii\web\UploadedFile::getInstance($model, 'uploadFile');

        if ($model->validate(['uploadFile'])) {
            $attachment = new Attachment();
            if (!empty($model->uploadFile)) {
                $attachment = Attachment::uploadFile($model->uploadFile, 'image');
                $output = ['attachment_id' => $attachment->id];
            } else {
                $output = ['error' => 'Uploading failed.'];
            }
        } else {
            $output = ['error' => $model->getFirstError('uploadFile') . "\n" . Yii::t(_NP_TEXT_DOMAIN, 'No larger than 5MB and only accept .jpg and .png files')];
        }

        echo yii\helpers\Json::encode($output);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionGallery()
    {
        $searchModel = new SearchContestSession();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $contestSessions = $dataProvider->getModels();

        return $this->render('gallery', [
            'contestSessions' => $contestSessions,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionPUpload()
    {

        // 5 minutes execution time
        @set_time_limit(5 * 60);

        // Uncomment this one to fake upload time
        // usleep(5000);

        // Settings
        $targetDir = Yii::$app->uploadDir;

        //$targetDir = 'uploads';
        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds


        // Create target dir
        if (!file_exists($targetDir)) {
            @mkdir($targetDir);
        }

        // Get a file name
        if (isset($_REQUEST["name"])) {
            $fileName = $_REQUEST["name"];
        } elseif (!empty($_FILES)) {
            $fileName = $_FILES["file"]["name"];
        } else {
            $fileName = uniqid("file_");
        }

        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

        // Chunking might be enabled
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;


        // Remove old temp files
        if ($cleanupTargetDir) {
            if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
            }

            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

                // If temp file is current file proceed to the next
                if ($tmpfilePath == "{$filePath}.part") {
                    continue;
                }

                // Remove temp file if it is older than the max age and is not the current file
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
                    @unlink($tmpfilePath);
                }
            }
            closedir($dir);
        }


        // Open temp file
        if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }


        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            }

            // Read binary input stream and append it to temp file
            if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        } else {
            if (!$in = @fopen("php://input", "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        }

        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }

        @fclose($out);
        @fclose($in);

        // Check if file has been uploaded
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off
            rename("{$filePath}.part", $filePath);

            $attachment = new Attachment();
            $attachment->image = basename($filePath);
            $imageSize = @getimagesize($filePath);
            $attachment->setCreatedDate();
            $attachment->setUpdatedDate();

            $size = [
                'full' => [
                    'width' => $imageSize[0],
                    'height' => $imageSize[1]
                ]
            ];
            $attachment->size = yii\helpers\Json::encode($size);
            $attachment->save(false);
            $output = [
                'status' => 200,
                'attachment_id' => $attachment->id
            ];
            return yii\helpers\Json::encode($output);
        }

        ;


        // Return Success JSON-RPC response
        die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');

    }
}
