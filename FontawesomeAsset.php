<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace modernkernel\fontawesome;


use yii\web\AssetBundle;

/**
 * Class FontawesomeAsset
 * @package modernkernel\fontawesome
 */
class FontawesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';
    public $css = [
        'css/font-awesome.min.css',
    ];
} 
