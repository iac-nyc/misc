<?php

/*
 * Variable scope
 * The scope of a variable is the context within which it is defined. For the most part all PHP variables only have a single scope.
 *
 */


function hello(){
    echo "Hello, world!";
}

$current_user = "Iftekhar";

function is_iftekhar(){
    
    global $current_user;
    
    if($current_user =="Iftekhar"){
        echo "It's Iftekhar";
    } else {
        echo "No, it's not Iftekhar";
    }
}

is_iftekhar();


?>