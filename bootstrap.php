<?php

/* -----------------------------------------------------------------------------
|  Bootstrap
|  -----------------------------------------------------------------------------
|  Here, we create an instance of our application an call `run` method.
|  In addition, we define our global constants that we need them later.
*/

define("START_TIME", microtime(true));
define("ROOT", __DIR__);
define("DS", DIRECTORY_SEPARATOR);
define("SRC", ROOT . DS . "src");

// Import composer's autoloader

include_once(ROOT . DS . "vendor" . DS . "autoload.php");

// Instanciate App class

$app = new App();

// Call `run` method of $app

$app->run();
