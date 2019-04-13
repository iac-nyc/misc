<?php

/*
 * Closures:
 * Closures are anonymous functions, which are with no name; 
 * that are capable of accessing variable outside of the function scope.
*/

$name = 'Iftekhar';
$greet = function() use($name){
    echo "Hello, $name";
}

$greet();

?>