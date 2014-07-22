<?php
namespace DigitecTest\Patterns\Decorator;

use PHPUnit_Framework_TestCase;
use Digitec\Patterns\Decorator\DecoratedWindow;

class DecoratedWindowTest extends PHPUnit_Framework_TestCase 
{
    public function testRender() 
    {
        $renderResult = 'Bar';
        
        $window = $this->getMock('Digitec\Patterns\Decorator\SimpleWindow');
        $window->expects($this->any())->method('render')->will($this->returnValue($renderResult));
        
        $decoratedWindow = new DecoratedWindow($window);
        
        $rsSimple = $window->render();
        $rsDecorated = $decoratedWindow->render();
        
        $this->assertSame($renderResult, $rsDecorated);
        $this->assertSame($rsSimple, $rsDecorated);
    }
}