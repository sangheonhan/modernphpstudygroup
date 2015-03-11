<?php

namespace testTrait;

trait Foo
{
    public static function say($message)
    {
        echo $message . " Foo<br/>";
    }
    public static function bye()
    {
        echo "bye Foo<br/>";
    }
}
