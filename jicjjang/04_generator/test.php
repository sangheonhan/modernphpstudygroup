<?php

function repeatFunc($value)
{
    for ($i = 0; $i < $value; $i++) {
        yield $i.'<br/>';
    }
}

foreach (repeatFunc(30) as $value) {
    echo $value;
}
