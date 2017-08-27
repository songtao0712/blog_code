<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/24
 * Time: 15:04
 */

namespace frontend\widgets;

use backend\models\Category;
use yii\base\Widget;

class MenuWidget extends \yii\bootstrap\Widget{

    //
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $cate = Category::find()->all();
        return $this->render('articlenav.php',['cate'=>$cate]);
    }
}