<?php

namespace testTrait;

trait Bar
{
    public static function say($message)
    {
        echo $message . " Bar<br/>";
    }
    public static function bye()
    {
        echo "bye Bar<br/>";
    }
}
