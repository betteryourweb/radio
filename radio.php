#!/usr/bin/env php
<?php
use Symfony\Component\Console\Application;
use Betteryourweb\SayHelloCommand;

require "vendor/autoload.php";

$app = new Application('Betteryourweb Test', '0.0.1a');

$app->add(new SayHelloCommand);

$app->run();