<?php

$bmw = [['model'=>"bmw x5"],['speed'=>120],['doors'=>"5"],['year'=>2015]];
$toyota = [['model'=>"toyota 22"],['speed'=>140],['doors'=>"4"],['year'=>2016]];
$opel = [['model'=>"opel 33"],['speed'=>160],['doors'=>"3"],['year'=>2017]];

$all = [$bmw, $toyota, $opel];

for ($i = 0; $i<sizeof($all); $i++) {

    print $all[$i][0]['model'].' '.$all[$i][1]['speed'].' '.$all[$i][2]['doors'].' '.$all[$i][3]['year'].'<br>';
}