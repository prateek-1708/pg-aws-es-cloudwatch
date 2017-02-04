<?php

require __DIR__ . "/vendor/autoload.php";
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LogstashFormatter;

// create a log channel
$formatter = new LogstashFormatter("TestApplication", "CloudWatchTest", "IWantExtraPrefix");

$stream = new StreamHandler("php://stdout", Logger::DEBUG);
$stream->setFormatter($formatter);

$log = new Logger('name');
$log->pushHandler($stream);


while (true) {

	$log->warning('A warning message being logged' .time());
	$log->error('A error message being logged '.time());
	$log->debug('A debug message being logged '.time());
	$log->info('A info message being logged '.time());	
	sleep(5);
}

