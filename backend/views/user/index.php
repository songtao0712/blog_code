<style>
    th,td{
        text-align: center;
    }
    th{
        background: lavender;
    }
</style>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>用户名</th>
        <th>邮箱</th>
        <th>注册时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($model as $item):?>
    <tr>
        <td><?=$item->username;?></td>
        <td><?=$item->email;?></td>
        <td><?=date('Y/m/d H:i',$item->created_at);?></td>
        <td>
            <?=\yii\bootstrap\Html::a('删除',['user/del','id'=>$item->id],['class'=>'btn-sm btn-danger']);?>
            <?php
            if($item->status){
                echo \yii\bootstrap\Html::a('冻结',['user/flag','id'=>$item->id],['class'=>'btn-sm btn-info']);
            }else{
                echo \yii\bootstrap\Html::a('正常',['user/flag','id'=>$item->id],['class'=>'btn-sm btn-info']);
            }
            ?>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
<?php
//分页工具条
echo \yii\widgets\LinkPager::widget([
    'pagination'=>$page,
    'nextPageLabel'=>'下一页',
    'prevPageLabel'=>'上一页'

])
?>
