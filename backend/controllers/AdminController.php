<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/23
 * Time: 2:57
 */

namespace backend\controllers;

use backend\models\Admin;
use backend\models\LoginForm;
use yii\filters\AccessControl;
use yii\web\Controller;

class AdminController extends AuthController {

    //添加管理员
    public function actionAdd(){
        $model = new Admin();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            if($model->password != $model->repassword){
                \Yii::$app->session->setFlash('warning','两次输入的密码不一致');
            }else{
                $model->password = \Yii::$app->security->generatePasswordHash($model->password);
                $model->create_at = time();
                $model->save();
            }

        }
        return $this->render('add',['model'=>$model]);
    }

    //管理员登录
    public function actionLogin(){
        $model = new LoginForm();
        $app = \Yii::$app;
        if($model->load($app->request->post()) && $model->validate()){
            $data = Admin::findone(['username'=>$model->username]);//根据管理员账户名找到对应的数据
            if($data){
                //如果密码不正确就阻止登录
                if(!$model->password == $app->security->validatePassword($model->password,$data->password)){
                    $app->session->setFlash('warning','密码不正确');
                    exit;
                }else{
                    $app->user->login($data);
                    $app->session->setFlash('success','登录成功');
                }
            }else{
                $app->session->setFlash('warning','管理员账户不存在');
            }

        }
        return $this->render('login',['model'=>$model]);
    }
    //注销
    public function actionLogout(){
        $app = \Yii::$app;//将组件保存保存到一个变量，方便后期调用
        $res = $app->user->logout();
        $app->session->setFlash('success','注销成功');
        return $this->redirect('admin/login');

    }


}