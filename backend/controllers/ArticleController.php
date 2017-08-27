<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/23
 * Time: 3:59
 */
namespace backend\controllers;

use backend\models\Article;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;

class ArticleController extends Controller {

//过滤器
    public function behaviors()
    {
        return  [
            'accessFilter'=>[
                'class'=>AccessControl::className(),
                'only'=>['add','index','del','edit','check']
            ]
        ];
    }

    //添加文章
    public function actionAdd(){
        $model = new Article();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $model->create_at = time();
            $model->save();
            \Yii::$app->session->setFlash('success','添加成功');
            return $this->redirect('index');
        }
        return $this->render('add',['model'=>$model]);
    }

    //展示文章列表
    public function actionIndex(){
        $model = Article::find()->where(['status'=>1]);
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
        $model = Article::findOne(['id'=>$id]);
        $model->delete();
        \Yii::$app->session->setFlash('success','删除成功');
        $this->redirect(['index']);
    }

    //修改
    public function actionEdit($id){
        $model = Article::findOne(['id'=>$id]);
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $model->create_at = time();
            $model->save();
            \Yii::$app->session->setFlash('success','修改成功');
            return $this->redirect('index');
        }
        return $this->render('add',['model'=>$model]);
    }

    //查看文章详情
    public function actionCheck($id){
        $model = Article::findOne(['id'=>$id]);
        return $this->render('check',['model'=>$model]);
    }

    public function actions()
    {
        return [
            //百度编辑器
            'ueditor' => [
                'class' => 'crazyfd\ueditor\Upload',
                'config'=>[
                    'uploadDir'=>date('Y/m/d')
                ]

            ],
        ];
    }
}