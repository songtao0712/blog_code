<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/24
 * Time: 14:56
 */

namespace frontend\controllers;

use \frontend\models\Guestbook;
use frontend\models\Article;
use yii\web\Controller;

class ArticleController extends Controller{
    public $layout='article';
    public function actionArticle(){
        return $this->render('index');
    }

    //添加留言板功能
    public function actionGuest(){
        $model = new Guestbook();

        if ($model->validate()){
            $model->username = \Yii::$app->request->post('username');
            $model->content = \Yii::$app->request->post('content');
            $model->create_at = time();
            $model->status = 1 ;
            var_dump($model);
//            $model->save();
            \Yii::$app->session->setFlash('success','留言成功');
        }
    }

    //获取所有留言
    public function actionGetGuest(){
        $guests = Guestbook::find()->orderBy(['id'=>SORT_DESC])->all();
//        var_dump($model);
        return $this->render('index',['guests'=>$guests]);
    }


    //查看文章
    public function actionCheck($id){

        $model = Article::findOne(['id'=>$id]);
//        var_dump($model);exit;
        $guest = new Guestbook();
        $guests = $guest->getAllGuest($id);

        return $this->render('index',['model'=>$model,'guests'=>$guests]);
    }
}