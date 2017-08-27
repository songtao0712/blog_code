<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
\frontend\assets\BlogAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?=\frontend\widgets\MenuWidget::widget()?>

<!-----------------------------------------上面是头--------------------------------------------------->
<?= $content ?>
<!-------------------------------------------------------------------左边栏以及低栏-------------------------------------->
        <div class="col-md-3">
            <form method="post" action="" class="panel-body">
                <div class="input-group">
                    <div class="form-control-wrapper">
                        <input type="text" name="s" class="form-control empty" size="32">
                        <div class="floating-label">搜索</div>
                        <span class="material-input"></span>
                    </div>
                    <span class="input-group-btn">
		    	<button class="btn btn-primary btn-fab btn-raised mdi-action-search" value="" id="search-btn" type="submit"></button>
			</span>
                </div>
            </form>

            <div class="panel panel-danger">
                <a class="panel-heading" onclick="$('.recent_posts_box').slideToggle()" href="javascript:;">
                    <h3 class="panel-title"><i class="fa fa-align-justify"></i> 最新文章</h3>
                </a>
                <div class="recent_posts_box">
                    <?php
                    $new_article = \backend\models\Article::find()->limit(10)->orderBy(['id'=>'SORT_DESC'])->all();
                    ?>
                    <?php foreach ($new_article as $row):?>
                    <a href="" class="item"><?=$row->title?></a>
                    <?php endforeach;?>
                </div>


            </div>

            <div class="panel panel-success">
                <a class="panel-heading" onclick="$('.comments_box').slideToggle()" href="javascript:;">
                    <h3 class="panel-title"><i class="fa fa-comment"></i> 最新回复</h3>
                </a>
                <div class="comments_box">
                    <?php
                    $guest = \frontend\models\Guestbook::find()->orderBy(['id'=>SORT_DESC])->limit(10)->all();
                    foreach ($guest as $item){

                        echo "<a href=\"#\" class=\"item\">$item->content</a>";
                    }
                    ?>

                </div>
            </div>
            

        </div>
    </div>
</div>
<footer>
    <div class="footer-bottom">
        <div class="container">
            <div class="pull-left copyright">
                Copyright &copy; 2015-2017&nbsp;乘风破浪&nbsp;&nbsp;
                <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1262480026'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1262480026%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
            </div>
            <ul class="footer-nav pull-right">
                <li>Powered by Typecho</li>

                <li>蜀ICP备17018426号-2</li>

            </ul>
        </div>
    </div>
</footer>

<script>
    $.material.init();
    hljs.initHighlightingOnLoad();
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

