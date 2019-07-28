<?php

function task1 ($p1, $p2) {
    if ($p2 == true) {
        $ret = str_replace(PHP_EOL, '',$p1);
    }
    else {
    $ret0 = explode(PHP_EOL, $p1);
        foreach ($ret0 as $key=>$value) {
           $ret[$key] = "<p>".$value."</p>";
        }
    }
    return $ret;
}

function task2 ($p1) {
    $p2 = func_get_args();
    $i = 1;
    while ($i < sizeof($p2)){
        if ($p1 == "+") {
            $n = $p2[$i] + $p2[$i+1];
        }
        elseif ($p1 == "-"){
            $n = $p2[$i] - $p2[$i+1];
        }
        elseif ($p1 == "*"){
            $n = $p2[$i] * $p2[$i+1];
        }
        else {
            $n = false;
        }
        $i++;
    }
    return $n;

}

function task3 ($p1, $p2) {
    if (is_int ($p1) == true && is_int ($p2) == true) {
        $n = "<table>";
        for($i = 1; $i<=$p1; $i++){
            $n .= "<tr>";
            for ($b = 1; $b<=$p2; $b++) {
                $n .= "<td>".$i*$b."</td>";
            }
            $n .= "</tr>";
        }
        $n .= "</table>";
    }
    else {
        $n = "Неизвестная ошибка";
    }
    return $n;
}

function task6 ($filename) {
   print file_get_contents($filename);
}