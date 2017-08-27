<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/23
 * Time: 4:25
 */
$this->title = '添加分类';

$form = \yii\bootstrap\ActiveForm::begin();
echo $form->field($model,'cate');
echo $form->field($model,'status')->radioList([0=>'隐藏',1=>'显示']);
echo \yii\bootstrap\Html::submitButton('添加分类',['class' => 'btn btn-primary']);
\yii\bootstrap\ActiveForm::end();
