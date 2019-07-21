<?php

$day = 8;


$budn = "Это рабочий день";
$holid = "Это выходной день";

switch ($day) {
    case 1:
        echo $budn;
        break;
    case 2:
        echo $budn;
        break;
    case 3:
        echo $budn;
        break;
    case 4:
        echo $budn;
        break;
    case 5:
        echo $budn;
        break;
    case 6:
        echo $holid;
        break;
    case 7:
        echo $holid;
        break;
    default:
        echo "Неизвестный день";
        break;
}
