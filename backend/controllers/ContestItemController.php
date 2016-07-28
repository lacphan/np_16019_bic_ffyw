<?php

namespace backend\controllers;

use backend\models\ContestSession;
use common\enpii\components\NpItemDataSub;
use Yii;
use backend\models\ContestItem;
use backend\models\SearchContestItem;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\Attachment;
use yii\web\UploadedFile;

/**
 * ContestItemController implements the CRUD actions for ContestItem model.
 */
class ContestItemController extends BackendController
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
     * Lists all ContestItem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchContestItem();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ContestItem model.
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
     * Creates a new ContestItem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ContestItem();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->start_date = NpItemDataSub::convertToGMTTime($model->start_date);
            $model->end_date = NpItemDataSub::convertToGMTTime($model->end_date);
            if($model->parent_id) {
                $parent = $this->findModel($model->parent_id);
                $model->start_date = $parent->start_date;
                $model->end_date = $parent->end_date;
                $model->week_number = $parent->week_number;
            }
            if ($model->uploadFile) {
                $attachment = Attachment::uploadFile($this->uploadFile,'image');
                $model->attachment_id = $attachment->id;

            }
            if ($model->popupFile) {
                $attachment = Attachment::uploadFile($this->popupFile,'image');
                $model->popup_id = $attachment->id;
            }
            $model->save();
            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ContestItem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldAttachment = $model->attachment;
        $oldPopUp = $model->popup;
        $flagAttachment = 0;
        $flagPopup = 0;
        if ($model->load(Yii::$app->request->post()) ) {
            $model->uploadFile = UploadedFile::getInstance($model, 'uploadFile');
            $model->popupFile = UploadedFile::getInstance($model, 'popupFile');
            $model->start_date = NpItemDataSub::convertToGMTTime($model->start_date);
            $model->end_date = NpItemDataSub::convertToGMTTime($model->end_date);

            //Process update attachment
            if ($model->uploadFile) {
                $flagAttachment = 1;
                $attachment = Attachment::uploadFile($model->uploadFile,'image');
                $model->attachment_id = $attachment->id;
            }
            if ($model->attachment_id == '') {
                $flagAttachment = 1;
            }


            //Process update popUp
            if ($model->popupFile) {
                $flagPopup = 1;
                $attachment = Attachment::uploadFile($model->popupFile,'image');
                $model->popup_id = $attachment->id;
            }
            if ($model->popup_id == '') {
                $flagPopup = 1;
            }


            $model->uploadFile = null;
            $model->popupFile = null;
            $model->save(false);

            if($flagAttachment && $oldAttachment) {
                $oldAttachment->delete();
            }
            if($flagPopup && $oldPopUp) {
                $oldPopUp->delete();
            }
            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ContestItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $contestSessions = ContestSession::find()->where(['contest_item_id' => $id])->all();
        foreach($contestSessions as $contestSession) {
            $contestSession->contest_item_id = null;
            $contestSession->save();
        }
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ContestItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ContestItem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ContestItem::findOne($id)) !== null) {
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
        return $this->redirect(['index']);
    }

    public function pickWinner($week){

    }
}
