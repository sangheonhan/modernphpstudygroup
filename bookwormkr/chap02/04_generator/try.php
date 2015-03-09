<?php

function randhex($length)
{
    static $hexDigit = "0123456789abcdef";

    for ($i = 0; $i < $length; $i++) {
        yield $hexDigit[rand(0, 15)];
    }
}

foreach (randhex(40) as $digit) {
    echo $digit;
}
echo "\n";

?>
