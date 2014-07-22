<?php
namespace Digitec\Patterns\Decorator;

use Digitec\Patterns\Decorator\Window;

class SimpleWindow implements Window
{
    public function render()
    {
        $returnString = <<<EOL
+-------------+
|             |
|             |
|             |
|             |
|             |
+-------------+
EOL;
        return $returnString . PHP_EOL;
    }
}