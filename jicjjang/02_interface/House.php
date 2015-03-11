<?php
namespace testInterface;

class House implements Options
{
    public function __construct()
    {
        $this->build();
    }

    public function build()
    {
        echo "build House<br/>";
        $this->isHouse();
    }

    public function isHouse()
    {
        echo "house complete<br/>";
    }
}
