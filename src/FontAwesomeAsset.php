<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */

namespace powerkernel\fontawesome;


use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package powerkernel\fontawesome
 */
class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@bower/font-awesome';
//    public $js = [
//        'svg-with-js/js/fontawesome-all.min.js',
//    ];
    public $css = [
        'web-fonts-with-css/css/fontawesome-all.min.css',
    ];
}
