<?php

function get_max_value($array) {
    return max($array);
}


function get_min_value($array) {
    return min($array);
}

$numbers = [2, -2, 5, 0, -88, 100, -95, 50, 33];

echo(get_max_value($numbers));
echo('<br>');
echo(get_min_value($numbers));

