<?php
namespace Digitec\Patterns\Decorator;

use Digitec\Patterns\Decorator\Window;

class DecoratedWindow implements Window
{
    /*
     * @var Window
     */
    protected $windowReference;
    
    public function __construct(Window $windowReference)
    {
        $this->setWindowReference($windowReference);
    }
    
    /**
     *  Renders the window
     */
    public function render()
    {
        return $this->getWindowReference()->render();
    }
    
    /*
     * @return Window
     */
    public function getWindowReference()
    {
        return $this->windowReference;
    }
    
    /*
     * @param Window $windowReference
     */
    public function setWindowReference(Window $windowReference)
    {
        $this->windowReference = $windowReference;
    }
}