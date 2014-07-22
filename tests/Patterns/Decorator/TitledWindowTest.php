<?php
namespace DigitecTest\Patterns\Decorator;

use PHPUnit_Framework_TestCase;
use Digitec\Patterns\Decorator\TitledWindow;
use ReflectionMethod;
//use \Psy\Shell; //Uncomment to allow debugging with PsySh

class TitledWindowTest extends PHPUnit_Framework_TestCase 
{
    public function testRender()
    {
        $renderString = 'window';
        $renderTitle = 'title';
        $window = $this->getMock('Digitec\Patterns\Decorator\SimpleWindow');
        $window->expects($this->any())->method('render')->will($this->returnValue($renderString));
        
        $titledWindow = $this->getMock('Digitec\Patterns\Decorator\TitledWindow', array('addTitle'), array($window));
        $titledWindow->expects($this->once())->method('addTitle')->will($this->returnValue($renderTitle));
        
        $rs = $titledWindow->render();
        
        $this->assertSame($renderTitle . $renderString, $rs);
        
    }
    
    public function testAddTitle()
    {
        $renderString = 'bar';
        
        $window = $this->getMock('Digitec\Patterns\Decorator\SimpleWindow');
        $window->expects($this->any())->method('render')->will($this->returnValue($renderString));
        
        $titledWindow = new TitledWindow($window);
        
        $reflectionMethod = new ReflectionMethod($titledWindow, 'addTitle');
        $reflectionMethod->setAccessible(true);
        
        $rs = $reflectionMethod->invoke($titledWindow);
        
        /*
         * uncomment to allow debugging with PsySh
         */
        //Shell::debug(get_defined_vars());
        
        $this->assertFalse(empty($rs));
        
    }
}