<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/23
 * Time: 23:47
 */


/*<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/font-awesome.min.css">
<link rel="stylesheet" href="./css/material.min.css">
<link rel="stylesheet" href="./css/ripples.min.css">
<link rel="stylesheet" href="./css/roboto.min.css">
<link rel="stylesheet" href="./css/github.min.css">
<link rel="stylesheet" href="./css/customs.css">*/

/*<script src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/material.min.js"></script>
<script src="../js/ripples.min.js"></script>
<script src="../js/highlight.pack.js"></script>
<script src="../js/bubble.js"></script>*/
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class BlogAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/material.min.css',
        'css/roboto.min.css',
        'css/roboto.min.css',
        'css/github.min.css',
        'css/customs.css',
    ];
    public $js = [
        'js/jquery-2.1.4.min.js',
        'js/bootstrap.min.js',
        'js/material.min.js',
        'js/ripples.min.js',
        'js/highlight.pack.js',
        'js/bubble.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
