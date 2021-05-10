<?php

require_once "vendor/autoload.php";

use Classes\Adapter;

$myString = 'Ruslan Peka';

echo '1) Вывод исходной строки:<br>' . $myString . '<br><br>';

echo '2) Преобразование в JSON:<br>';
$obj = new Adapter;
$jsonString = $obj->xmlToJson($myString);
var_dump($jsonString);
echo '<br>';
echo $jsonString;
echo '<br><br>';

echo '3) Преобразование в XML:<br>';
$xmlString = $obj->jsonToXml($jsonString);
var_dump($xmlString);
echo '<br>';
echo $xmlString;