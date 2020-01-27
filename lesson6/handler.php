<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

$user_data = $_POST;
$file = $_FILES['file'];

function handle_path_spaces($path)
{
    $path = str_replace(' ', "_", $path);
    return $path;
}

function store_file($file, $path)
{
    if(file_exists($path)) {
        echo 'File already exists';
        return;
    }
    
    move_uploaded_file($file['tmp_name'], $path);
}

if ($user_data['name'] && $user_data['last_name']) {
    $original_path = 'images\\' . $user_data['name'] . '_' . $user_data['last_name'];
    // In case name or last name contains spaces
    $path = handle_path_spaces($original_path);
    
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    
    $file_path = $path . '\\' . $file['name'];
    store_file($file, $file_path);
};
