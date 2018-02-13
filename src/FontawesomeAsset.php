<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */

namespace powerkernel\fontawesome;


use yii\web\AssetBundle;

/**
 * Class FontawesomeAsset
 * @package powerkernel\fontawesome
 */
class FontawesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';
    public $css = [
        'css/font-awesome.min.css',
    ];
} 
