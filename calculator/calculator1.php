<?php
require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use calculator\commands\CalculatorCommands;

$application = new Application();

$application->add(new CalculatorCommands());
$application->run();

