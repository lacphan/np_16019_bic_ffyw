<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 7/1/16 9:57 PM
 */

namespace backend\controllers;

use backend\models\ContestSession;
use backend\models\User;
use yii\filters\AccessControl;
use backend\models\LoginForm;
use yii\filters\VerbFilter;
use yii;
use backend\models\ContestItem;
use common\helpers\HashHelper;
/**
 * SiteController
 * For handling some basic actions
 * index, error, login, logout
 */
class SiteController extends BackendController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','encrypt'],
                        'allow' => true,
                    ],
                    'matchCallback' => function () {
                        if (Yii::$app->user->can('backend-login')) {
                            return true;
                        }
                        else{
                            return false;
                        }
                    }

                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get']
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
        ];
    }

    public function actionIndex()
    {
        if (!\Yii::$app->user->isGuest ) {
            return $this->showDashboard();
        } else {
            $this->layout = 'main-login';
            return $this->redirect(Yii::$app->urlManager->createUrl('site/login'));
        }
    }

    public function showDashboard()
    {
        return $this->render('dashboard');
    }


    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $this->layout = 'main-login';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionEncrypt() {
        $users = User::find()->all();
        /**
         * @var $users User[]
         */
        foreach ($users as $user) {
            if($user->is_encrypted == 0) {
                $user->is_encrypted = 1;
                $user->email = HashHelper::encrypt($user->email);
                $user->first_name = HashHelper::encrypt($user->first_name);
                $user->last_name = HashHelper::encrypt($user->last_name);
                if($user->profile) {
                    $user->profile->phone_number =  HashHelper::encrypt( $user->profile->phone_number);
                    $user->profile->save(false);
                }
                $user->save(false);
            }
        }

        $contestSessions = ContestSession::find()->all();

        /**
         * @var $contestSessions ContestSession[]
         */
        foreach ($contestSessions as $contestSession) {
            if($contestSession->is_encrypted == 0) {
                $contestSession->is_encrypted = 1;
                $contestSession->user_email =  HashHelper::encrypt($contestSession->user_email);
                $contestSession->first_name =  HashHelper::encrypt($contestSession->first_name);
                $contestSession->last_name =  HashHelper::encrypt($contestSession->last_name);
                $contestSession->save(false);
            }
        }
        return $this->render('tmp');
    }


}
