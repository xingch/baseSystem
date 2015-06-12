<?php
namespace yii\easyui;

use yii\web\AssetBundle;

/**
 * @desc easyui资源包
 * @author Jack.W <wanggangc103@163.com>
 * @version 2015-06-10
 */
class EasyuiAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery.easyui';
    public $css = [

    ];
    
    public $js = [
        'easyloader.js',
    ];
}
