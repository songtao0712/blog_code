<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/26
 * Time: 22:40
 */

namespace frontend\controllers;

use frontend\models\LoginForm;
use frontend\models\User;
use yii\web\Controller;

class UserController extends Controller{
    public $layout = 'user';
    //注册功能
    public function actionReg(){
        $model = new User();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){

//            $model->updated_at = time();
            $model->save();
            return $this->redirect(['login']);
        }
        return $this->render('register',['model'=>$model]);
    }

    //登录
    public function actionLogin(){
        $model = new LoginForm();
        if($model->load(\Yii::$app->request->post()) && $model->login()){
            return $this->redirect(['blog/index']);
        }
        return $this->render('login',['model'=>$model]);
    }

    public function actionTest(){

    }

    //注销
    public function actionLogout(){
        $user = \Yii::$app->user->logout();

//            \Yii::$app->session->setFlash('success','注销成功');
            return $this->redirect(['blog/index']);

    }

}