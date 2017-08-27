<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/23
 * Time: 4:18
 */
namespace backend\controllers;

use backend\models\Category;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;

class CategoryController extends Controller {
//过滤器
    public function behaviors()
    {
        return  [
            'accessFilter'=>[
                'class'=>AccessControl::className(),
                'only'=>['add','index','del','edit']
            ]
        ];
    }
    //添加分类
    public function actionAdd(){
        $model = new Category();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            if($model->cate == null){
                \Yii::$app->session->setFlash('warning','分类名不能为空');
            }
            $model->save();
        }
        return $this->render('add',['model'=>$model]);
    }

    //展示分类列表
    public function actionIndex(){
        $model = Category::find()->where(['status'=>1]);
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

    //删除文章
    public function actionDel($id){
        $model = Category::findOne(['id'=>$id]);
        $model->delete();
        \Yii::$app->session->setFlash('success','删除成功');
    }

    //修改
    public function actionEdit($id){
        $model = Category::findOne(['id'=>$id]);
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $model->create_at = time();
            $model->save();
            \Yii::$app->session->setFlash('success','修改成功');
            return $this->redirect('index');
        }
        return $this->render('add',['model'=>$model]);
    }
}