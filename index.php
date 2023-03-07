<?php declare(strict_types=1);

use Yireo\Transport\Person\Driver;
use Yireo\Transport\Vehicle\Car;

require_once './vendor/autoload.php';

$logger = require('config.php')['logger'];
$logger->notice('This is the web application');

$content = file_get_contents('pages/home.html');
$template = 'templates/html.php';
include_once $template;