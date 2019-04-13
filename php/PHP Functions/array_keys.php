<?php

/*
 * array_keys — Return all the keys or a subset of the keys of an array
 * 
 *
 */


$names = array(
    'James Bond' => 'Spy',
    'Iftekhar' => 'Learner',
    'McGyver' => 'Cold war time American TV Hero'
);
foreach(array_keys($names) as $name){
    echo "Hello, $name <br>";
}


?>