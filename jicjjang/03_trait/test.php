<?php

namespace testTrait;

require './vendor/autoload.php';

class test
{
    use Foo, Bar{
        Bar::bye insteadof Foo;
        Foo::say insteadof Bar;

        Bar::bye as Barbye;
        Bar::say as Barsay;
        Foo::bye as Foobye;
        Foo::say as Foosay;
    }
}

$test = new test();

$test->say('hi');
$test->bye();

$test->Barsay('hi');
$test->Foobye();
