<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/27
 * Time: 1:13
 */
namespace frontend\models;

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
        return[
          'username'=>'用户',
            'password'=>'密码'
        ];
    }

    //
    public function login(){
        $user = User::findOne(['username'=>$this->username]);
//        var_dump($user);
        if($user){
            //验证密码
            if(\Yii::$app->security->validatePassword($this->password,$user->password_hash)){

                    \Yii::$app->user->login($user,3600);
//                    var_dump($res);exit;
                return true;
            }else{
                $this->addError('password','密码错误');
                return false;
            }
        }else{
                $this->addError('username','用户名不正确');
        }
        return false;
    }
}