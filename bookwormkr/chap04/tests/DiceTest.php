<?php

namespace bookwormkr\Dice;

require '../vendor/autoload.php';

$dice = new Dice('3d6');
echo '3d6 = '.$dice->roll().PHP_EOL;

$dice = new Dice('2d100');
echo '2d100 = '.$dice->roll().PHP_EOL;

$dice = new Dice('1d6+3');
echo '1d6+3 = '.$dice->roll().PHP_EOL;

$dice = new Dice('3d6+3');
while ($dice->roll() != 21) {
}
