<?php

namespace backend\controllers;

use yii;
use backend\models\User;
use backend\models\SearchUser;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use backend\models\UserProfile;
use common\enpii\components\NpController;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends NpController
{
    public function behaviors()
    {
        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
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
        ];
        return $behaviors;
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchUser();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();
        $model->scenario = 'create';
        $profile = new UserProfile();

        $model->generateAuthKey();
        $model->setCreatedDate();
        $model->setUpdatedDate();
        $model->setPublishedDate();
        $model->creator_id = Yii::$app->user->id;

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $profile->load(Yii::$app->request->post()) && $profile->validate()) {

            $profile->save();

            $model->setPassword($model->password_hash);
            $model->profile_id = $profile->id;
            $model->username = $model->email;
            $model->setPassword($model->password);

            $model->save();

            $auth = Yii::$app->authManager;
            if (is_array($model->userRoles)) {
                foreach ($model->userRoles as $role => $name) {
                    $authorRole = $auth->getRole($name);
                    $auth->assign($authorRole, $model->id);
                }
            }
            Yii::$app->session->setFlash('success',Yii::t('app', 'Account has been created.'));
            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'profile' => $profile
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'update';
        $model->userRoles = ArrayHelper::map(Yii::$app->authManager->getRolesByUser($model->id), 'name', 'name');
        $oldRoles = array_values($model->userRoles);
        $profile = $model->profile;
        if (!$profile) {
            $profile = new UserProfile();
        }
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $profile->load(Yii::$app->request->post()) && $profile->validate()) {

            $model->username = $model->email;

            if ($model->isUpdatePassword) {
                $model->setPassword($model->passwordUpdate);
            }

            $model->save();

            $profile->save();
            
            $auth = Yii::$app->authManager;
            if (is_array($model->userRoles)) {
                $deleteRoles = array_diff($oldRoles, $model->userRoles);
                if ($deleteRoles) {
                    foreach ($deleteRoles as $role => $name) {
                        $authorRole = $auth->getRole($name);
                        $auth->revoke($authorRole,$model->id);
                    }
                }
                foreach ($model->userRoles as $role => $name) {
                    $authorRole = $auth->getRole($name);
                    if(!array_key_exists($name,Yii::$app->authManager->getRolesByUser($model->id))) {
                        $auth->assign($authorRole, $model->id);
                    }
                }
            }
            Yii::$app->session->setFlash('success',Yii::t('app', 'Account has been changed.'));
            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'profile' => $profile
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {

        $model = $this->findModel($id);
       
        $model->is_deleted = 1;
        $model->save();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionBulk()
    {
        $action = Yii::$app->request->post('bulk-option');
        $selection = (array)Yii::$app->request->post('selection');
        if ($action == 'delete' && count($selection) > 0) {
            foreach ($selection as $id) {
                $this->findModel($id)->delete();
            }
            return $this->redirect([
                'index',
                'messageResult' => [
                    'class' => 'alert-success',
                    'content' => Yii::t('app', count($selection) . ' rows deleted.')
                ]
            ]);
        }
        return $this->redirect(['index']);
    }
}
