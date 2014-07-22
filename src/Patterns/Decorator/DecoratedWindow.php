<?php
namespace Digitec\Patterns\Decorator;

use Digitec\Patterns\Decorator\Window;

class DecoratedWindow implements Window
{
    private $windowReference;
    
    public function __construct(Window $windowReference)
    {
        $this->windowReference = $windowReference;
    }
    
    public function render()
    {
        $this->windowReference->render();
    }
}