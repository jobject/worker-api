<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require dirname(__DIR__) . '/vendor/autoload.php';

use Worker\Application;

(new Application())->run();
