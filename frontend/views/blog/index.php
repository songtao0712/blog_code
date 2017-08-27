
<section class="billboard">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="intro animate fadeIn">
                    <h1>乘风破浪</h1>
                    <p class="lead"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">

        <!--------------------------------------------------------------->
        <div class="col-md-9">
            <?php foreach ($model as $item):?>
            <div class="panel panel-default">

                <div class="panel-body">
                    <h3 class="post-title"><?=\yii\bootstrap\Html::a($item->title,['article/check','id'=>$item->id])?></h3>
                    <div class="post-meta">
                        <span><i class="fa fa-calendar"></i>&nbsp;<?=date('Y-m-d')?></span>
                        <span><i class="fa fa-user"></i>&nbsp;<a href="https://blog.kunx.org/author/1/"><?=$item->author?></a>　</span>
                        <?php $cate = \backend\models\Category::findOne(['id'=>$item->cate_id]);?>
                        <span><i class="fa fa-book"></i>&nbsp;<a href="https://blog.kunx.org/category/it/"><?=$cate->cate;?></a>　</span>
                    </div>
                    <div class="post-content">
                        <?=substr($item->content,0,420).'...'?>
<!--                        <a href=""><button class="pull-right btn btn-success btn-raised">阅读全文</button></a>-->
                        <?=\yii\bootstrap\Html::a('阅读全文',['article/check','id'=>$item->id],['class'=>'pull-right btn btn-success btn-raised'])?>

                    </div>
                </div>

            </div>
            <?php endforeach;?>
            <?php
            //分页工具条
            echo \yii\widgets\LinkPager::widget([
                'pagination'=>$page,
                'nextPageLabel'=>'下一页',
                'prevPageLabel'=>'上一页'

            ])
            ?>
        </div>



        <?php
//        $url = \yii\helpers\Url::to(['blog/great']);
//        $this->registerJs(new \yii\web\JsExpression(
//                <<<JS
//
//                $('#great').click(function() {
//                  $.post('$url','')
//                })
//
//
//JS
//
//        ))

        ?>
