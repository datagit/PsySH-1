<?php
chdir(dirname(__DIR__));

require_once('vendor/autoload.php');

use Digitec\Patterns\Decorator\SimpleWindow;
use Digitec\Patterns\Decorator\DecoratedWindow;
use Digitec\Patterns\Decorator\TitledWindow;
use \Psy\Shell;

echo PHP_EOL . 'Simple Window' . PHP_EOL;

$window = new SimpleWindow();

echo $window->render();

echo PHP_EOL . 'Decorated Simple Window' . PHP_EOL;

$decoratedWindow = new DecoratedWindow($window);

echo $decoratedWindow->render();

echo PHP_EOL . 'Titled Simple Window' . PHP_EOL;

$titledWindow = new TitledWindow($window);

echo $titledWindow->render();

Shell::debug(get_defined_vars());