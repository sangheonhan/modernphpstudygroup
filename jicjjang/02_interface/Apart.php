<?php
namespace testInterface;

class Apart implements Options
{
    public function __construct()
    {
        $this->build();
    }
    public function build()
    {
        echo "build Apart<br/>";
        $this->isApart();
    }

    public function isApart()
    {
        echo "not yet...<br/>";
    }
}
