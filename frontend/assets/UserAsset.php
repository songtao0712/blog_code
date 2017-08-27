<?php
/**
 * Created by PhpStorm.
 * User: TT
 * Date: 2017/6/26
 * Time: 22:44
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */


//<!-- jQuery -->
//<script src="js/jquery.min.js"></script>
//<!-- Bootstrap -->
//<script src="js/bootstrap.min.js"></script>
//<!-- Placeholder -->
//<script src="js/jquery.placeholder.min.js"></script>
//<!-- Waypoints -->
//<script src="js/jquery.waypoints.min.js"></script>
//<!-- Main JS -->
//<script src="js/main.js"></script>
//
//<link rel="shortcut icon" href="favicon.ico">
//
//    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
//
//    <link rel="stylesheet" href="css/bootstrap.min.css">
//    <link rel="stylesheet" href="css/animate.css">
//    <link rel="stylesheet" href="css/style.css">
//
//    <!-- Modernizr JS -->
//    <script src="js/modernizr-2.6.2.min.js"></script>
//    <!-- FOR IE9 below -->
//    <!--[if lt IE 9]>
//    <script src="js/respond.min.js"></script>
//    <![endif]-->

class UserAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/animate.css',
        'css/style.css',
        'css/bootstrap.min.css',
    ];
    public $js = [
//        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/jquery.placeholder.min.js',
        'js/jquery.waypoints.min.js',
        'js/min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
