<?php

function factorialize($number)
{

    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorialize($number - 1));
    }
}

echo(factorialize(10));


