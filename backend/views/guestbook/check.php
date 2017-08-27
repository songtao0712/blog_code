

<h2 class="text-center"><b>查看用户留言</b></h2>

<h3>留言时间：<?=date('Y/m/d H:i',$model->create_at)?></h3>
<?php $user = \app\models\User::findOne(['id'=>$model->username])?>
<h3>用户:<?=$user->username?></h3>
<hr/>
<?=$model->content;?>

<?=\yii\bootstrap\Html::a('返回首页',['guest/book'],['class'=>'btn btn-default'])?>
