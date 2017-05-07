<?php

namespace dapur\assetx;

use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/assetx';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
