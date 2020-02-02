<?php

$entry_point = __DIR__ . '\\files';
$dir_list = [];

function extract_subfolders($dir, &$dir_list){
    $files = scandir($dir);
    foreach($files as $value){
        $path = $dir . '\\' . $value;

        if(!is_dir($path)) {
            continue;
        } else if(!in_array($value, ['.', '..'])) {
            extract_subfolders($path, $dir_list);
            $dir_list[] = $path;
        }
    }

    return $dir_list;
}

echo '<pre>' . print_r(extract_subfolders($entry_point, $dir_list), true) . '</pre>';