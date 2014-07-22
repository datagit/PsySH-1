<?php
namespace Digitec\Patterns\Decorator;

use Digitec\Patterns\Decorator\Window;

class SimpleWindow implements Window
{
    public function render()
    {
        echo <<<EOL
+-------------+
|             |
|             |
|             |
|             |
|             |
+-------------+
EOL;
        echo PHP_EOL;
    }
}