<?php declare(strict_types=1);

namespace Yireo\TransportApplication\Console;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Yireo\Transport\Api\VehicleFactoryInterface;
use Yireo\Transport\LogFactory;
use Yireo\Transport\Person;
use Yireo\Transport\PersonFactory;

class VehicleCommand extends Command
{
    private VehicleFactoryInterface $vehicleFactory;
    private PersonFactory $personFactory;
    private Logger $logger;

    public function __construct(
        VehicleFactoryInterface $vehicleFactory,
        PersonFactory $personFactory,
        Logger $logger,
        string $name = null)  {
        parent::__construct($name);
        $this->vehicleFactory = $vehicleFactory;
        $this->personFactory = $personFactory;
        $this->logger = $logger;
    }

    protected function configure()
    {
        $this->setName('vehicle')->setDescription('Do vehicle stuff');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->logger->warning('Logging from command');

        $output->writeln('Vehicles are cool');

        $car = $this->vehicleFactory->createCar();
        $driver = $this->personFactory->createDriver();
        $car->addPerson($driver);

        return Command::SUCCESS;
    }
}