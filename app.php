<?php

require_once 'vendor/autoload.php';

use tools\Broom;
use workers\Handyman;

$broom = new Broom();
$henry = new Handyman($broom);
$henry->work();
