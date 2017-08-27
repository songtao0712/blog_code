
<div class="container" id="main">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="post-title"><?=$model->title;?></h3>
                    <div class="post-meta">
                        <span><i class="fa fa-calendar"></i><?=date('Y-m-d',$model->create_at);?></span>
                        <span><i class="fa fa-user"></i><?=$model->author;?></span>
                        <?php $cate = \backend\models\Category::findOne(['id'=>$model->cate_id])?>
                        <span><i class="fa fa-book"></i><?=$cate->cate?></span>
                    </div>
                    <div class="post-content">
                        <?=$model->content?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="comments">

                    <div class="alert alert-info">
                        <span id="commentCount">留言区↓↓↓↓</span>
                    </div>
                    <ol class="comment-list">
                        <?php foreach ($guests as $guest):?>
                        <li id="li-comment-111" class="comment-body comment-parent comment-odd comment-by-user">
                            <div id="comment-111">
                                <div class="comment-author">
                                    <?=$guest->username;?>
                                </div>
                                <div class="comment-meta">
                                    <a href=""><?=date('Y-m-d H',$guest->create_at);?></a>
                                </div>
                                <p><pre><?=$guest->content;?></pre></p>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ol>
                    <div id="respond-post-78" class="respond">
                        <div class="respond panel panel-default">
                            <div class="panel-body">
                                <div class="cancel-comment-reply"></div>
                                <h3 id="response">添加新评论</h3>
                                <!-- 输入表单开始 -->
                                <form method="post" action="<?=\yii\helpers\Url::to(['article/guest'])?>" id="comment_form" class="form-horizontal">
                                    <!-- 如果当前用户已经登录 -->

                                    <div class="form-group">
                                        <label for="author" class="col-sm-2 control-label required">用户</label>
                                        <div class="col-sm-9">
                                            <div class="form-control-wrapper">
                                                <?php
                                                if(Yii::$app->user->isGuest){?>
                                                    <input type="text" placeholder="请登录后留言，没账号？请注册。"name="author" class="form-control text empty" size="35" readonly="readonly"/>
                                                <?php
                                                }else{?>
                                                    <input type="text" name="username" class="form-control text empty" size="35" value="<?=Yii::$app->user->identity->username;?>" readonly="readonly"/>
                                                <?php
                                                }
                                                ?>


                                                <span class="material-input"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="textarea" class="col-sm-2 control-label required">内容</label>
                                        <div class="col-sm-9">
                                            <div class="form-control-wrapper">
                                                <?php
                                                if(Yii::$app->user->isGuest){?>
                                                    <textarea placeholder="请登录后留言，没账号？请注册。" rows="5" cols="50" name="text" id="textarea" class="form-control textarea  empty" required="" readonly="readonly"></textarea>
                                                <?php
                                                }else{?>
                                                    <textarea placeholder="写下你独一无二的留言。" rows="5" cols="50" name="content" id="textarea" class="form-control textarea  empty" required=""></textarea>
                                                <?php
                                                }
                                                ?>

                                                <span class="material-input"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-5">
                                            <input type="submit" id="submit" class="btn btn-success btn-raised submit" value="来一发~">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
