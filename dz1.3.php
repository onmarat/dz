<?php

$age = 56;

if ($age >= 18 && $age <=65) {
    print  "Вам еще работать и работать";
}
elseif ($age>65) {
    print "Вам пора на пенсию";
}
elseif ($age >=1 && $age <=17) {
    print  "Вам ещё рано работать";
}
else {
    print "Неизвестный возраст";
}
