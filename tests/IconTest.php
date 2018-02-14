<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2018 Power Kernel
 */

namespace yiiunit\fontawesome;

use powerkernel\fontawesome\Icon;

/**
 * Class IconTest
 * @package yiiunit\fontawesome
 */
class IconTest extends TestCase
{

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->mockWebApplication();
    }

    /**
     * test render
     */
    public function testRender()
    {
        $widget = new Icon([
            'prefix' => 'far',
            'name' => 'address-book',
            'size' => 'fa-5x',
            'styling' => 'fa-spin'
        ]);
        $output = $widget->run();
        $this->assertEquals('<i class="far fa-address-book fa-5x fa-spin"></i>', (string)$output);
    }
}