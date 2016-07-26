<?php

namespace backend\controllers;

use common\models\CommonContestItem;
use Yii;
use backend\models\ContestSession;
use backend\models\SearchContestSession;
use yii\web\NotFoundHttpException;
use yii\filters\AccessControl;
use backend\models\Attachment;
use yii\web\UploadedFile;
use backend\models\ContestItem;
/**
 * ContestSessionController implements the CRUD actions for ContestSession model.
 */
class ContestSessionController extends BackendController
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
     * Lists all ContestSession models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchContestSession();
        $searchModel->contest_item_id = 1;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if(Yii::$app->request->post() && Yii::$app->request->post('show-winner') ) {
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams,Yii::$app->request->post('week'),1);
        }
        if(Yii::$app->request->post() && Yii::$app->request->post('pick-winner')) {
            if(Yii::$app->request->post('week')) {
                $week = Yii::$app->request->post('week');
                $this->pickWinner($week);
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$week,1);
            } else {
                Yii::$app->session->setFlash('error', 'Please select a Week');
            }

        }

        if(Yii::$app->request->post() && Yii::$app->request->post('pick-grand-prize')) {
            $week = Yii::$app->request->post('week');
            $this->pickGrandPrize($week);
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$week,1);
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ContestSession model.
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
     * Creates a new ContestSession model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ContestSession();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ContestSession model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldAttachment = $model->attachment;
        $flagAttachment = 0;
        if ($model->load(Yii::$app->request->post()) ) {

            $model->uploadFile = UploadedFile::getInstance($model, 'uploadFile');
            if ($model->uploadFile) {
                $flagAttachment = 1;
                $attachment = Attachment::uploadFile($model->uploadFile,'image');
                $model->attachment_id = $attachment->id;
            }
            if ($model->attachment_id == '') {
                $flagAttachment = 1;
            }

            $model->uploadFile = null;
            $model->save();
            if($flagAttachment && $oldAttachment) {
                $oldAttachment->delete();
            }

            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ContestSession model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->delete();

        return $this->redirect(['index']);
    }

    public function actionAccept($id)
    {
        $model = $this->findModel($id);
        $model->accepted = 1;
        $model->save();
        return $this->redirect(['index']);
    }

    public function actionReject($id)
    {
        $model = $this->findModel($id);
        $model->accepted = -1;
        $model->save();
        return $this->redirect(['index']);
    }

    /**
     * Finds the ContestSession model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ContestSession the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ContestSession::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionBulk(){
        $action=Yii::$app->request->post('bulk-option');
        $selection=(array)Yii::$app->request->post('selection');
        if($action == 'delete' && count($selection) > 0) {
            foreach($selection as $id){
                $this->findModel($id)->delete();
            }
            return $this->redirect([
                'index',
                'messageResult' => [
                    'class' => 'alert-success',
                    'content' => Yii::t('app',count($selection) . ' rows deleted.')
                ]
            ]);
        }
        if($action == 'accept' && count($selection) > 0) {
            foreach($selection as $id){
                $model = $this->findModel($id);
                $model->accepted = 1;
                $model->save();
            }
            Yii::$app->session->setFlash('success',Yii::t('app', count($selection) . ' rows accepted.'));
            return $this->redirect([
                'index',
            ]);
        }
        if($action == 'reject' && count($selection) > 0) {
            foreach($selection as $id){
                $model = $this->findModel($id);
                $model->accepted = -1;
                $model->save();
            }
            Yii::$app->session->setFlash('success',Yii::t('app', count($selection) . ' rows rejected.'));
            return $this->redirect([
                'index',
            ]);
        }
        return $this->redirect(['index']);
    }

    /**
     * pick grand prize
     */
    public function pickWinner($week) {
        $contestSessions = ContestSession::find()->where(['contest_item_id' => $week])->all();
        if($contestSessions) {
            foreach ($contestSessions as $contestSession) {
                $contestSession->is_winner = 0;
                $contestSession->save();
            }
            if(count($contestSessions) > 6) {
                $winners = array_rand($contestSessions,6);
                foreach ($winners as $key => $winner) {
                    $contestSessions[$winner]->is_winner = 1;
                    $contestSessions[$winner]->save();
                }
            } else {
                foreach ($contestSessions as $key => $winner) {
                    $winner->is_winner = 1;
                    $winner->save();
                }
            }

        }

    }

    /*
     * pick grand prize
     */
    public function pickGrandPrize($week) {
        $contestSessions = ContestSession::find()->all();
        if($contestSessions) {
            foreach ($contestSessions as $contestSession) {
                $contestSession->is_winner = 0;
                $contestSession->save();
            }
            $winner = array_rand($contestSessions,1);
            $contestSessions[$winner]->is_winner = 1;
            $contestSessions[$winner]->save();
        }

    }
}
