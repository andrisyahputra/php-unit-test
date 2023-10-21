<?php
date_default_timezone_set('Asia/Jakarta');

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require '../vendor/autoload.php';


function testLogInfo()
{
    $log = new Logger('test');
    $log->pushHandler(new StreamHandler(__DIR__ . "/1.log"));
    $log->info("Belajar Logging");
    $log->info("Belajar Logging php");
    $log->info("Belajar Logging php 2");
}

function coba()
{
    echo "coba";
}

// Panggil fungsi testLogInfo() untuk menulis pesan log
testLogInfo();
