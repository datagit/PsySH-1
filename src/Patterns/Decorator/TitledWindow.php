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
    
    private function addTitle()
    {
        $returnString = <<<EOL
+-------------+
|Title        |
EOL;
        echo $returnString . PHP_EOL;
    }
}