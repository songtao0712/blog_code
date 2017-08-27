<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/23
 * Time: 2:59
 */
$form = \yii\bootstrap\ActiveForm::begin();

echo $form->field($model,'name');
echo $form->field($model,'password')->passwordInput();
echo $form->field($model,'repassword')->passwordInput();
echo $form->field($model,'type')->radioList([0=>'普通管理员',1=>'超管']);
echo \yii\bootstrap\Html::submitButton('点击注册',['admin/reg','class'=>'btn btn-info']);

\yii\bootstrap\ActiveForm::end();