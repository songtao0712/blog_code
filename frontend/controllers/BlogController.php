<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/24
 * Time: 0:14
 */
namespace frontend\controllers;

use backend\models\Article;
use yii\data\Pagination;
use yii\web\Controller;

class BlogController extends Controller{
    public $layout = 'blog';
    public function actionIndex(){
        $model = \frontend\models\Article::find()->where(['status'=>1]);
        $total = $model->count();
        $page = new Pagination(
            [
                'totalCount'=>$total,//总条数
                'defaultPageSize'=>5,//每页显示多少条数据
            ]
        );

        $model = $model->offset($page->offset)->limit($page->limit)->all();
        return $this->render('index',['model'=>$model,'page'=>$page]);
    }

    //实现点赞
//    public function actionGreat($id){
//       $model = \frontend\models\Article::findOne(['id'=>$id]);
//       $model->great = $model->great + 1;
//       return $this->redirect('index');
//    }

    public function actionArticle($id){
        $model = \frontend\models\Article::findOne(['id'=>$id]);

        return $this->render('article',['model'=>$model]);
    }
    public function actionTest(){
        $new_article = \Yii::$app->user->isGuest;
        var_dump($new_article);
    }
}