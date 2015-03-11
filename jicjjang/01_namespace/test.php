<?php
//
//namespace Name;
//
//use function Name\func;
//
//require './Study.php';
//require './Func.php';
//
//Study::publicStaticFunction();
//
//func();

namespace testNamespace;

use function testNamespace\func;

require './vendor/autoload.php';

Study::publicStaticFunction();

func();

