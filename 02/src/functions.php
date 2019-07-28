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






}