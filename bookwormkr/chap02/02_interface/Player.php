<?php

namespace bookwormkr\race;

class Player
{
    public function act(Race $race)
    {
        $race->shout();
    }
}
