#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

$logger = require('config.php')['logger'];

$vehicleCommand = new \Yireo\TransportApplication\Console\VehicleCommand(
    new \Yireo\Transport\VehicleFactory(), // VehicleFactoryInterface
    new \Yireo\Transport\PersonFactory(),
    $logger
);
$application->add($vehicleCommand);

$application->run();
