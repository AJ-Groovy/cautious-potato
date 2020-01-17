<?php

function get_max_value($array) {
    return max($array);
}


function get_min_value($array) {
    return min($array);
}

$array = [100, 1000, 32, 1035];

echo(get_max_value($array));
echo('<br>');
echo(get_min_value($array));

