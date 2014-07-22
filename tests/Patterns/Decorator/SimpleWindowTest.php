<?php
namespace DigitecTest\Patterns\Decorator;

use PHPUnit_Framework_TestCase;
use Digitec\Patterns\Decorator\SimpleWindow;

class SimpleWindowTest extends PHPUnit_Framework_TestCase
{
    public function testRender()
    {
        $simpleWindow = new SimpleWindow();
        $rs = $simpleWindow->render();

        $this->assertInstanceOf('Digitec\Patterns\Decorator\Window', $simpleWindow);
        $this->assertFalse(empty($rs));
    }
}