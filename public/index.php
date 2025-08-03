<?php

require_once '../debugging/debug_config.php';
require_once '../debugging/debugging.php';

$app = include '../src/App/bootstrap.php';

$app->run();