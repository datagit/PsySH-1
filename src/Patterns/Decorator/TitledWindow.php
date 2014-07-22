<?php
namespace Digitec\Patterns\Decorator;

use Digitec\Patterns\Decorator\DecoratedWindow;

class TitledWindow extends DecoratedWindow
{
    public function render()
    {
        $string = $this->addTitle();
        return $string . parent::render();
    }
    
    protected function addTitle()
    {
        $returnString = <<<EOL
+-------------+
|Title        |
EOL;
        /*
         * This deliberately echoes the value instead of returning it, so the unit test fails.
         */
        echo $returnString . PHP_EOL;
    }
}