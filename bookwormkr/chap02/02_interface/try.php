<?php

namespace bookwormkr\race;

require './vendor/autoload.php';

$human = new Human;
$orc = new Orc;

$player = new Player;

$player->act($human);
$player->act($orc);

