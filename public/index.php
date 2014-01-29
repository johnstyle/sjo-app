<?php

define('ROOT', realpath(__DIR__) . '/..');
define('SJO_LOCALE', 'fr_FR');

/** Autoload */
include ROOT . '/vendor/autoload.php';

/** @var \sJo\Core\Loader $Loader Load Framework */
$Loader = new \sJo\Core\Loader();

$Loader
    ->init()
    ->display();
