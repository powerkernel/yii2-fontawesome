<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace modernkernel\fontawesome;


use yii\base\Widget;
use yii\helpers\Html;

/**
 * Class Icon
 * @package modernkernel\fontawesome
 */
class Icon extends Widget
{
    public $icon = ''; // see http://fontawesome.io/examples/


    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        $this->register();


    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::tag('i', '', [
            'class' => 'fa fa-' . $this->icon,
            'aria-hidden' => true
        ]);

    }

    /**
     * register asset
     */
    protected function register()
    {
        $view = $this->getView();
        FontawesomeAsset::register($view);
    }
}