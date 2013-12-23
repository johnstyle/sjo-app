<?php

define('ROOT', realpath(__DIR__) . '/..');

/** Vendor */
include ROOT . '/vendor/autoload.php';

/**
 * Load Framework
 *
 * @var \sJo\Core\Loader $Loader
 */
$Loader = new \sJo\Core\Loader();

/** Display view */
$Loader->display();
