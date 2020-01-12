<?php
define('SMALL_SURNAME', 5);
define('MEDIUM_SURNAME', 10);
define('LARGE_SURNAME', 15);

$last_name = 'Andrievskiy';
$last_name_length = strlen($last_name);
$base_message = 'Длина вашей фамилии равна ' . $last_name_length . ' ';

if ($last_name_length > LARGE_SURNAME) {
    $base_message .= 'и она больше чем ' . LARGE_SURNAME;
} else if ($last_name_length > MEDIUM_SURNAME && $last_name_length < LARGE_SURNAME) {
    $base_message .= 'и она больше чем ' . MEDIUM_SURNAME . ' и меньше чем ' . LARGE_SURNAME;
} else if ($last_name_length > SMALL_SURNAME && $last_name_length < MEDIUM_SURNAME) {
    $base_message .= 'и она больше чем ' . SMALL_SURNAME . ' и меньше чем ' . MEDIUM_SURNAME;
} else if ($last_name_length < SMALL_SURNAME) {
    $base_message .= 'и она меньше чем ' . SMALL_SURNAME;
}

echo ($base_message);