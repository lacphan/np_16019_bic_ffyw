<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 3/10/16
 * Time: 2:43 PM
 */

namespace common\enpii\components;

use \yii\web\Application;
/**
 * Class NpWebApplication

 * @property NpWebUser $npUser The user component. This property is read-only.
 * @property \yii\image\ImageDriver $image
 * @property $uploadDir
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class NpWebApplication extends Application
{

    /**
     * Returns the user component.
     * @return NpWebUser the user component.
     */
    public function getUploadDir() {
        return \Yii::getAlias('@root/uploads');
    }

    public function getNpUser()
    {
        return $this->get('npUser');
    }
    /*
     *  @property user $npUser The user component. This property is read-only.

     */

    public function coreComponents()
    {
        return array_merge(parent::coreComponents(), [
            'npUser' => ['class' => 'common\enpii\components\NpWebUser'],
        ]);
    }
}