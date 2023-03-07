<?php declare(strict_types=1);

return [
    'vehicleFactory' => new \Yireo\Transport\VehicleFactory(), // VehicleFactoryInterface
    'logger' => (new \Yireo\Transport\LogFactory())->createLogger()
];