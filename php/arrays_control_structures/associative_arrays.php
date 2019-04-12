<?php
$iceCream = array(
    'Iftekhar' => 'Black Cherry', 
    'Chowdhury' => 'Chocolate', 
    'James Bond' => 'Cookies and Cream', 
    'McGyver' => 'Strawberry'
);
$iceCream['iftekhar'] = 'Pistachio';
$iceCream['James D'] = 'Cookies and Cream';
//$iceCream[] = 'Vanilla';
$iceCream['Andrew'] = true;
krsort($iceCream);
asort($iceCream);
var_dump($iceCream);

$keys = array(
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
);
//var_dump($keys);
?>