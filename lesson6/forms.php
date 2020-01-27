<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="wrapper">
        <form action="handler.php" enctype="multipart/form-data" method="post">
            <div class="form-row">
                <input name="name" type="text">
            </div>
            <div class="form-row">
                <input name="last_name" type="text">
            </div>
            <div class="form-row">
                <input name="age" type="text">
            </div>
            <div class="form-row">
                <label>
                    Male
                    <input name="gender" value="male" type="radio">
                </label>
                <label>
                    Female
                    <input name="gender" value="female" type="radio">
                </label>
            </div>
            <div class="form-row">
                <input type="file" name="file">
            </div>
            <div class="form-row">
                <button>Submit form</button>
            </div>
        </form>
    </div>
</body>

</html>