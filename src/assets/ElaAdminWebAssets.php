<?php


namespace ziya\ElaAdmin\assets;


use rmrevin\yii\fontawesome\FontAwesome;
use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class ElaAdminWebAssets extends AssetBundle
{
    public $sourcePath = '@vendor/ziya/elaadmin_yii2/src/assets/eladmin/assets';

    public $css =[
        'https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css',
        'https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css',
        'https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css',
        'css/cs-skin-elastic.css',
        'css/style.css',
        'https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css',
        'https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css',
        'https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css',
        'https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css',

    ];

    public $js = [
        'https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js',
        'https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js',
        'https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js',
        'https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js',
        'https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js',
        'https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js',
        'https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js',
        'https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js',
        '/js/init/chartjs-init.js',
    ];


    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        FontAwesome::class
    ];
}