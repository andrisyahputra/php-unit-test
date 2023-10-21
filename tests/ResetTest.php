<?php

namespace andrisyahputra\Test;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\HostnameProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use PHPUnit\Framework\TestCase;

class ResetTest extends TestCase
{
    public function testReset()
    {
        $logger = new Logger(ResetTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../aplication.php"));
        $logger->pushProcessor(new MemoryUsageProcessor());
        $logger->pushProcessor(new HostnameProcessor());

        for ($i = 0; $i < 500; $i++) {
            $logger->info("Perulangan ke- $i");
            if ($i % 100 == 0) {
                $logger = new Logger(ResetTest::class); // Create a new logger instance
                $logger->pushHandler(new StreamHandler("php://stderr"));
                $logger->pushHandler(new StreamHandler(__DIR__ . "/../aplication.php"));
                $logger->pushProcessor(new MemoryUsageProcessor());
                $logger->pushProcessor(new HostnameProcessor());
            }
        }

        self::assertNotNull($logger);
    }
}
