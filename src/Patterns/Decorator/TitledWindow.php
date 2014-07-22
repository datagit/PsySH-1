<?php
namespace Digitec\Patterns\Decorator;

use Digitec\Patterns\Decorator\DecoratedWindow;

class TitledWindow extends DecoratedWindow
{
    public function render()
    {
        $this->addTitle();
        parent::render();
    }
    
    private function addTitle()
    {
        echo <<<EOL
+-------------+
|Title        |
EOL;
        echo PHP_EOL;
    }
}