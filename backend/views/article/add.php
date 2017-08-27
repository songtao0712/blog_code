<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/23
 * Time: 4:08
 */
$this->title = 'Login';

$form = \yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'title');
echo $form->field($model,'author');
echo $form->field($model,'cate_id')->dropDownList(\backend\models\Article::getCategoryOption());
echo $form->field($model, 'content')->widget(\crazyfd\ueditor\Ueditor::className(),[]);
echo $form->field($model,'status')->radioList([0=>'隐藏',1=>'显示']);
echo \yii\bootstrap\Html::submitInput('添加文章',['class' => 'btn btn-primary']);
\yii\bootstrap\ActiveForm::end();