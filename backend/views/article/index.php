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
            <th>ID</th>
            <th>标题</th>
            <th>分类</th>
            <th>作者</th>
            <th>添加时间</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($model as $item):?>
        <tr>
            <td><?=$item->id;?></td>
            <td><?=$item->title;?></td>
            <td>
                <?php
                $cate = \backend\models\Category::findOne(['id'=>$item->cate_id]);
                echo $cate->cate;
                ?>
            </td>
            <td><?=$item->author;?></td>
            <td><?=date('Y/m/d H:i:s',$item->create_at);?></td>
            <td>
                <?=\yii\helpers\Html::a('删除',['article/del','id'=>$item->id],['class'=>'btn-sm btn-danger'])?>
                <?=\yii\helpers\Html::a('修改',['article/edit','id'=>$item->id],['class'=>'btn-sm btn-info'])?>
                <?=\yii\helpers\Html::a('查看',['article/check','id'=>$item->id],['class'=>'btn-sm btn-primary'])?>
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
<?=\yii\helpers\Html::a('添加文章',['article/add'],['class'=>'btn btn-default'])?>