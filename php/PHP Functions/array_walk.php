<?php

/*
 * array_walk — Apply a user supplied function to every member of an array
 * 
 *
 */


$names = array(
    'James Bond' => 'Spy',
    'Iftekhar' => 'Learner',
    'McGyver' => 'Cold war time American TV Hero'
);

function print_info($value, $key){
    echo "$key is a $value. </br>";
}

array_walk($names, 'print_info');



?>