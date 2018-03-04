<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017-2018 Power Kernel
 */

namespace powerkernel\fontawesome;


use yii\base\Widget;
use yii\helpers\Html;

/**
 * Class Icon
 * @package powerkernel\fontawesome
 */
class Icon extends Widget
{
    public $tag = 'i';
    public $prefix = 'fas'; // fab, fas, far, fal
    public $name = ''; // see https://fontawesome.com/icons
    public $size = ''; // fa-xs, fa-sm, fa-lg, fa-2x, fa-3x, fa-4x, fa-5x, fa-7x, fa-10x
    public $styling = ''; // additional styling: fa-fw, fa-ul, fa-li etc. https://fontawesome.com/how-to-use/svg-with-js
    public $options = [];

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
        $class = $this->prefix . ' fa-' . $this->name . ' ' . $this->size . ' ' . $this->styling;
        $class = trim(preg_replace('/\s+/', ' ', $class));
        if (empty($this->options['class'])) {
            $this->options['class'] = $class;
        } else {
            $this->options['class'] .= ' ' . $class;
        }
        return Html::tag($this->tag, '', $this->options);
    }

    /**
     * register asset
     */
    protected function register()
    {
        $view = $this->getView();
        if (class_exists('\powerkernel\fontawesomepro\FontAwesomeProAsset')) {
            \powerkernel\fontawesomepro\FontAwesomeProAsset::register($view);
        } else {
            \powerkernel\fontawesome\FontAwesomeAsset::register($view);
        }

    }
}
