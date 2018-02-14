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
            'icon' => 'tachometer-alt',
        ]);
        $output = $widget->run();
        $this->assertEquals('<input type="text" id="test-fontawesome-input" class="form-control" name="phone" data-plugin-inputmask="inputmask_7b93eb48">', (string)$output);
    }


}