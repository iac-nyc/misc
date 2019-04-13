<?php

/*
 * Sometimes if an argument is not passed through, and you want it to have a starting value, 
 * no matter what, this is where a default argument will come to your assistance.
 *
 */

function get_info($name, $title = Null){
    if($title){
        echo "$name has arrived, they are with us as a $title";
    }else {
        echo "$name has arrived, welcome!";
    }
    
}

get_info('James Bond');
?>