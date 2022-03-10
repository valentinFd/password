<?php

require_once("vendor/autoload.php");

use App\Driver;

$driver = new Driver();
$driver->start(20, 8);
