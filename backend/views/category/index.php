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
            <td>ID</td>
            <td>分类名</td>
            <td>状态</td>
            <td>操作</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($model as $item):?>
        <tr>
            <td><?=$item->id;?></td>
            <td><?=$item->cate;?></td>
            <td>
                <?php
                if($item->status){
                    echo '显示';
                }else{
                    echo '隐藏';
                }
                ?>
            </td>
            <td>
                <?=\yii\bootstrap\Html::a('删除',['category/del','id'=>$item->id],['class'=>'btn-sm btn-danger'])?>
                <?=\yii\bootstrap\Html::a('修改',['category/edit','id'=>$item->id],['class'=>'btn-sm btn-info'])?>
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
<?=\yii\helpers\Html::a('添加分类',['category/add'],['class'=>'btn btn-default'])?>
