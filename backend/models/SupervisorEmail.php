<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 6/24/16
 * Time: 12:04 PM
 */

namespace backend\models;


use common\enpii\components\NpActiveRecord;
use yii;

/**
 * Class SupervisorEmail
 * @property $buildingName
 * @property $block
 * @property $facilityType
 * @property $subject
 * @property $tasks
 * @property $remarks
 */
class SupervisorEmail extends NpActiveRecord
{
    /**
     * @var * @package backend\models
     * @property  $user backend\models\User
     */
    public $buildingName;
    public $block;
    public $facilityType;
    public $subject;
    public $tasks;
    public $remarks;
    public $user;
    /**
     * @inheritdoc
     */
    
    public function __construct()
    {
        parent::__construct();
        $this->user = User::findOne(['id' => Yii::$app->user->id]);
    }

    public function rules()
    {
        return [
            [['subject'], 'required'],
            [['remarks','subject','buildingName','block','facilityType','tasks'], 'string', 'max' => 255]
        ];
    }
    
    public function sendEmail($email)
    {
        $body = "
        <p>" . Yii::t('app','Building Name: ') . $this->buildingName. "</p>
        <p>" . Yii::t('app','Block: ') . $this->block ."</p>
        <p>" . Yii::t('app','Facility Type: '). $this->facilityType . "</p>
        <p>" . Yii::t('app','Subject: ') . $this->subject . "</p>
        <p>" . Yii::t('app','Tasks: '). $this->tasks . "</p>
        <p>" . Yii::t('app','Remarks: '). $this->remarks . "</p>
        ";

        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->user->email => $this->user->first_name ])
            ->setSubject($this->subject)
            ->setHtmlBody($body)
            ->send();
    }
}