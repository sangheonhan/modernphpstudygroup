<?php

function testClosure($name)
{
    return function ($message) use ($name) {
        return print("{$name}, {$message}");
    };
}

$firstInput = testClosure('jicjjang');

$secondInput = $firstInput('great');
