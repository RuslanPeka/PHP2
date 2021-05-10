<?php

require_once "vendor/autoload.php";
use App\Facade\Facade;

$info = '';
if(isset($_GET['string'])) {
    $myClass = new Facade;
    $info = $myClass->generateNewInfo($_GET['string']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Сгенерировать новую информацию:<br>
        <input type="text" name="string" id="">
        <button type="submit">Отправить</button>
        <br><br>
        <?=$info;?>
    </form>
</body>
</html>