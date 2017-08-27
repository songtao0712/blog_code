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
<!DOCTYPE HTML>
    <script type="text/javascript">
        (function () {
            window.TypechoComment = {
                dom : function (id) {
                    return document.getElementById(id);
                },

                create : function (tag, attr) {
                    var el = document.createElement(tag);

                    for (var key in attr) {
                        el.setAttribute(key, attr[key]);
                    }

                    return el;
                },

                reply : function (cid, coid) {
                    var comment = this.dom(cid), parent = comment.parentNode,
                        response = this.dom('respond-post-78'), input = this.dom('comment-parent'),
                        form = 'form' == response.tagName ? response : response.getElementsByTagName('form')[0],
                        textarea = response.getElementsByTagName('textarea')[0];

                    if (null == input) {
                        input = this.create('input', {
                            'type' : 'hidden',
                            'name' : 'parent',
                            'id'   : 'comment-parent'
                        });

                        form.appendChild(input);
                    }

                    input.setAttribute('value', coid);

                    if (null == this.dom('comment-form-place-holder')) {
                        var holder = this.create('div', {
                            'id' : 'comment-form-place-holder'
                        });

                        response.parentNode.insertBefore(holder, response);
                    }

                    comment.appendChild(response);
                    this.dom('cancel-comment-reply-link').style.display = '';

                    if (null != textarea && 'text' == textarea.name) {
                        textarea.focus();
                    }

                    return false;
                },

                cancelReply : function () {
                    var response = this.dom('respond-post-78'),
                        holder = this.dom('comment-form-place-holder'), input = this.dom('comment-parent');

                    if (null != input) {
                        input.parentNode.removeChild(input);
                    }

                    if (null == holder) {
                        return true;
                    }

                    this.dom('cancel-comment-reply-link').style.display = 'none';
                    holder.parentNode.insertBefore(response, holder);
                    return false;
                }
            };
        })();
    </script>
    <script type="text/javascript">
        (function () {
            var event = document.addEventListener ? {
                add: 'addEventListener',
                focus: 'focus',
                load: 'DOMContentLoaded'
            } : {
                add: 'attachEvent',
                focus: 'onfocus',
                load: 'onload'
            };

            document[event.add](event.load, function () {
                var r = document.getElementById('respond-post-78');

                if (null != r) {
                    var forms = r.getElementsByTagName('form');
                    if (forms.length > 0) {
                        var f = forms[0], textarea = f.getElementsByTagName('textarea')[0], added = false;

                        if (null != textarea && 'text' == textarea.name) {
                            textarea[event.add](event.focus, function () {
                                if (!added) {
                                    var input = document.createElement('input');
                                    input.type = 'hidden';
                                    input.name = '_';
                                    input.value = (function () {
                                        var _xFu3 = //'7V'
                                            '4'+'b02'//'Py'
                                            +'dn'//'dn'
                                            +//'Q'
                                            '68'+'b4'//'aUb'
                                            +//'ky2'
                                            '9'+/* 'xUU'//'xUU' */''+/* 'I'//'I' */''+//'hAb'
                                            '945'+'3ce'//'W8'
                                            +//'R'
                                            'c34'+/* 'P'//'P' */''+'7f'//'1'
                                            +//'z'
                                            'z'+/* 'L'//'L' */''+''///*'m9F'*/'m9F'
                                            +'bec'//'cGK'
                                            +//'g'
                                            '95'+'be2'//'L'
                                            +//'BNS'
                                            '1'+'e03'//'C'
                                            , _sSsvp = [[4,6],[20,21]];

                                        for (var i = 0; i < _sSsvp.length; i ++) {
                                            _xFu3 = _xFu3.substring(0, _sSsvp[i][0]) + _xFu3.substring(_sSsvp[i][1]);
                                        }

                                        return _xFu3;
                                    })();

                                    f.appendChild(input);
                                    added = true;
                                }
                            });
                        }
                    }
                }
            });
        })();
    </script>

</head>
<?=\frontend\widgets\MenuWidget::widget()?>


<!-----------------------------------------上面是头--------------------------------------------------->
<?= $content ?>

<footer>
    <div class="footer-bottom">
        <div class="container">
            <div class="pull-left copyright">
                Copyright &copy; 2010-2017&nbsp;御风而行&nbsp;&nbsp;
                <script> var _hmt = _hmt || []; (function() {   var hm = document.createElement("script");   hm.src = "//hm.baidu.com/hm.js?9fef6a267e584c6daa043b5dd83207f0";   var s = document.getElementsByTagName("script")[0];    s.parentNode.insertBefore(hm, s); })(); </script> <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260402432'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1260402432%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>		        				</div>
            <ul class="footer-nav pull-right">
                <li>Powered by <a href="http://typecho.org/" rel="nofollow">Typecho</a></li>

                <li><a href="http://www.miibeian.gov.cn" rel="nofollow">粤ICP备14072384号-2</a></li>

                <li>加载耗时：0.016 s</li>
            </ul>
        </div>
    </div>
</footer>

<script>
    $.material.init();
    hljs.initHighlightingOnLoad();
</script>
</body>
</html>

<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>

<?php $this->endBody() ?>

<?php $this->endPage() ?>

