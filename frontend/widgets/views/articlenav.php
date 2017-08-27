<header>
    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="logo" href="https://blog.kunx.org/">乘风破浪</a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="https://blog.kunx.org/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 乘风破浪</a></li>

                    <!--独立页面-->

                    <li >
                        <a href="" title="关于网站">关于网站</a>
                    </li>

                    <!--分类列表-->
                    <?php foreach ($cate as $item):?>
                    <li><a href=''><?=$item->cate?></a></li>
                    <?php endforeach;?>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if(Yii::$app->user->isGuest){
                        echo "<li class='last'>".\yii\bootstrap\Html::a('登录',['user/login'])."</li>";
                        echo "<li class='last'>".\yii\bootstrap\Html::a('注册',['user/reg'])."</li>";
                    }else{
                        echo "<li class='last' style='margin-top: 20px'><b>欢迎您:".Yii::$app->user->identity->username."</b></li>";
                        echo "<li class='last'>".\yii\bootstrap\Html::a('注销',['user/logout'])."</li>";
                    }

                    ?>

                </ul>
            </div>
        </div>
    </div>
</header>