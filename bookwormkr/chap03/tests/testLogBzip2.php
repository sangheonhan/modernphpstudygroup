<?php

namespace bookwormkr\LogBzip2;

require '../vendor/autoload.php';

$logger = new LogBzip2('test.log.bz2');

$logger->debug('Hello, world.');
$logger->info('Hello, {name}.', ['name' => 'bookworm']);
