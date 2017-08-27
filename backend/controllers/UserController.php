<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/23
 * Time: 22:39
 */
namespace backend\controllers;

use app\models\User;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;

class UserController extends AuthController {
    public function behaviors()
    {
        return  [
            'accessFilter'=>[
                'class'=>AccessControl::className(),
                'only'=>['index','del','flag']
            ]
        ];
    }
    //查看用户
    public function actionIndex(){
        $model = User::find();
        $total = $model->count();
        $page = new Pagination(
            [
                'totalCount'=>$total,//总条数
                'defaultPageSize'=>10,//每页显示多少条数据
            ]
        );

        $model = $model->offset($page->offset)->limit($page->limit)->all();
        return $this->render('index',['model'=>$model,'page'=>$page]);
    }

    //删除用户
    public function actionDel($id){
        $model = User::findOne(['id'=>$id]);
        $model->delete();
        \Yii::$app->session->setFlash('success','删除成功');
        return $this->redirect('index');
    }

    //冻结/解冻用户
    public function actionFlag($id){
        $model = User::findOne(['id'=>$id]);
        if($model->status){
            $model->status = 0;
            $model->save();
        }else{
            $model->status = 1;
            $model->save();
        }
    }
}