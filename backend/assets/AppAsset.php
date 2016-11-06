<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $sourcePath = '@bower';
    public $css = [
        'css/style.css',
    ];
    public $js = [
        'js/script.js'
    ];
    public $depends = [
        'backend\assets\AdminFoodAsset'
    ];
}
