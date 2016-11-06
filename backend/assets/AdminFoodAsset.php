<?php
namespace backend\assets;

use yii\base\Exception;
use yii\web\AssetBundle as BaseAdminLteAsset;
use dmstr\web\AdminLteAsset;


/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminFoodAsset extends AdminLteAsset
{
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

}
