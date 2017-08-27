<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/23
 * Time: 23:06
 */

namespace backend\controllers;

use app\models\Guestbook;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;

class GuestbookController extends AuthController {
//过滤器
    public function behaviors()
    {
        return  [
            'accessFilter'=>[
                'class'=>AccessControl::className(),
                'only'=>['index','del','edit','check']
            ]
        ];
    }
    //显示所有留言
    public function actionIndex(){
        $model = Guestbook::find();
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

    //删除留言
    public function actionDel($id){
        $model = Guestbook::findOne(['id'=>$id]);
        $model->delete();
        \Yii::$app->session->setFlash('success','删除成功');
        return $this->redirect('index');
    }

    //查看
    public function actionCheck($id){
        $model = Guestbook::findOne(['id'=>$id]);

        return $this->render('check',['model'=>$model]);
    }
}