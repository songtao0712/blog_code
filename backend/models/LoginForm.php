<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/23
 * Time: 3:14
 */

namespace backend\models;

use yii\base\Model;

class LoginForm extends Model{

    public $username;
    public $password;

    public function rules()
    {
        return [
          [['username','password'],'required']
        ];
    }

    public function attributeLabels()
    {
        return [
          'username'=>'管理员',
            'password'=>'登录密码',
        ];
    }

}