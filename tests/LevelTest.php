<?php

namespace andrisyahputra\Test;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;


class LevelTest extends TestCase
{
    public function testLevel()
    {
        $logger = new Logger(LevelTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../aplication.php"));
        // file eror tidak semua ditampilkan hnya mulai dari eror
        $logger->pushHandler(new StreamHandler(__DIR__ . "/../error.php", Logger::ERROR));

        $logger->debug("Ini adalah Debug");
        $logger->info("Ini adalah Info");
        $logger->notice("Ini adalah Notice");
        $logger->warning("Ini adalah Warning");
        $logger->error("Ini adalah Error");
        $logger->critical("Ini adalah Critial");
        $logger->alert("Ini adalah Alert");
        $logger->emergency("Ini adalah Emergency");

        self::assertNotNull($logger);
    }
}
