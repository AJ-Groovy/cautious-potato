<?php
session_start();

if (isset($_POST['reset']))
{   
    unset($_SESSION['sessionStartTime']);
    unset($_POST['reset']);
}

if (!isset($_SESSION['sessionStartTime'])){ 
    $_SESSION['sessionStartTime'] = time();
};

$time_since_session_start = time() - $_SESSION['sessionStartTime'];

echo $time_since_session_start;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>