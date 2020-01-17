<?php
/**
 * Kerrie Low
 * Rob Wood
 * 1.17.20
 * Full Stack Software Development
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// instantiate F3
// :: means static method
$f3 = Base::instance();

// define a default route
// -> calls an instance method
$f3->route('GET /', function() {
    echo "Pet Home";
});

// run f3
$f3->run();