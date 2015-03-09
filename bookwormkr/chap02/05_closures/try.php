<?php

function transaction(callable $func)
{
    echo "Autocommit off\n";

    if ($func() == true) {
        echo "Commit\n";
    } else {
        echo "Rollback\n";
    }

    echo "Autocommit on\n";
}

transaction(function () {
    if (rand(1, 2) == 1) {
        echo "No error\n";
        return true;
    } else {
        echo "Error\n";
        return false;
    }
});

?>
