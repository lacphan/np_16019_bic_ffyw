<?php
namespace frontend\controllers;

use backend\models\User;
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
        $emailSubmission = new EmailSubmission();
        Yii::$app->session->remove('registerEmail');
        Yii::$app->session->remove('submissionEmail');
        $locale = Yii::$app->request->get('locale');
        $contestSessions = ContestSession::find()->where(['accepted' => 1])->orderBy(new Expression('rand()'))->limit(9)->all();

        if($emailSubmission->load(Yii::$app->request->post()) && $emailSubmission->isEmailExists()) {

            Yii::$app->session->set('submissionEmail',$emailSubmission->email);
            if($locale == DEFAULT_LOCALE) {
                return $this->redirect(['site/submission']);
            }
            return $this->redirect(['site/submission', 'locale' => Yii::$app->request->get('locale')]);

        } elseif ($emailSubmission->load(Yii::$app->request->post()) && !$emailSubmission->isEmailExists()) {

            Yii::$app->session->set('registerEmail',$emailSubmission->email);
            if($locale == DEFAULT_LOCALE) {
                return $this->redirect(['site/register']);
            }
            return $this->redirect(['site/register','locale' => $locale]);
        }
        return $this->render('index',[
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
        if(Yii::$app->session->hasFlash('registerEmail')) {
            $model->email = Yii::$app->session->getFlash('registerEmail');
        }
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->register()) {
                return $this->render('success');
            }
        }
        return $this->render('register', [
            'model' => $model,
        ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSubmission()
    {
        if(!Yii::$app->session->get('submissionEmail')) {
            return $this->redirect(Yii::$app->urlManager->createUrl('site/register'));
        }

        $model = new SubmissionForm();
        if(Yii::$app->session->hasFlash('submissionEmail')) {
            $model->email = Yii::$app->session->get('submissionEmail');
        }
        $user = User::findByUsername(Yii::$app->session->get('submissionEmail'));

        $contestSessions = $user->getWeeklySubmission();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->submission()) {
                return $this->render('success');
            }
        }

        if(count($contestSessions) >= 4) {
            return $this->render('weekly-limit-reached');
        }


        return $this->render('submission', [
            'model' => $model,
        ]);
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
}
