
<table class="table table-bordered">
    <thead>
    <tr>
        <th>用户</th>
        <th>内容</th>
        <th>时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($model as $item):?>
    <tr>
        <?php $user = \app\models\User::findOne(['id'=>$item->username]);?>
        <td><?=$item->username?></td>
        <td><?=$item->content;?></td>
        <td><?=date('Y/m/d H:i',$item->create_at);?></td>
        <td>
            <?=\yii\bootstrap\Html::a('删除',['guestbook/del','id'=>$item->id],['class'=>'btn-sm btn-danger'])?>
            <?=\yii\bootstrap\Html::a('查看',['guestbook/check','id'=>$item->id],['class'=>'btn-sm btn-info'])?>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
<?php
echo \yii\widgets\LinkPager::widget([
'pagination'=>$page,
'nextPageLabel'=>'下一页',
'prevPageLabel'=>'上一页'

])
?>