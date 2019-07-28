<?php

require("src/functions.php");

//task 4

print date('d.m.Y h:i:s');

$datetime1 = strtotime('2016-02-24 00:00:00');
print $datetime1;


//task 5

$nn = "Карл у Клары украл Кораллы";
print str_replace("К", "", $nn);

$bb = "Две бутылки лимонада";
print str_replace("Две", "Три", $bb);

//task 6

$file = "test.txt";
fopen($file, "w") or die("Невозможно создать файл");
$current = file_get_contents($file);
$current .= "Hello again!";
file_put_contents($file, $current);

task6($file);