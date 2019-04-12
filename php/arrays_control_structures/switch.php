<?php
$today = date('l');

$today = 'Sunday';
switch ($today) {
   case 'Monday';
       echo 'Martial Art on Monday';
       break;
    case 'Tuesday':
        echo 'Kung Fu on Tuesday';
        break;
    case 'Wednesday':
        echo 'Hacking on Wednesday';
        break;
    case 'Thursday':
        echo 'Boxing on Thursday';
        break;
    case 'Friday':
        echo 'Swimming on Friday';
        break;
    case 'Saturday':
        echo 'Saturday is the weekend. ';
    case 'Sunday':
        echo 'Rest on the Weekend';
        break;
    default:
        echo 'I do not know what day it is';
        break;
}
?>