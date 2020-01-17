<?php

function reverse_number($number) {
    $array_of_letters = str_split(strval($number));
    return join(array_reverse($array_of_letters));
}

echo(reverse_number(1000));