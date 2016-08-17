<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 8/17/16
 * Time: 10:38 AM
 */

namespace common\helpers;
use yii;

class HashHelper
{

    public static function encrypt($value){
        if(!$value){
            return false;
        }
        return self::encryptByKey($value, Yii::$app->params['encryptKey']);
    }

    public static function decrypt($value){
        if(!$value) {
            return false;
        }
        return self::decryptByKey($value, Yii::$app->params['encryptKey']);
    }

    public  static function safe_b64encode($string) {
        $data = base64_encode($string);
        $data = str_replace(array('+','/','='),array('-','_',''),$data);
        return $data;
    }

    public static function safe_b64decode($string) {
        $data = str_replace(array('-','_'),array('+','/'),$string);
        $mod4 = strlen($data) % 4;
        if ($mod4) {
            $data .= substr('====', $mod4);
        }
        return base64_decode($data);
    }

    public static function encryptByKey($value,$secretKey) {
        if(!$value){
            return false;
        }
        $text = $value;
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $cryptText = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $secretKey, $text, MCRYPT_MODE_ECB, $iv);
        return trim(self::safe_b64encode($cryptText));
    }

    public static function decryptByKey($value,$secretKey) {
        if(!$value) {
            return false;
        }
        $value = self::safe_b64decode($value);
        $ivSize = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($ivSize, MCRYPT_RAND);
        $decryptText = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $secretKey, $value, MCRYPT_MODE_ECB, $iv);
        return trim($decryptText);
    }
}