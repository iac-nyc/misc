<?php

//$db = new PDO("mysql:host=localhost;dbname=DATABASE_NAME;port=3306","USERNAME","PASSWORD");

try {
    $db = new PDO("sqlite:".__DIR__."/database.db");
    $db->setAttribute();
} catch (Exception $e){
    echo "Unable to connect";
    echo $e -> getMessage(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    exit;
}

try {
    $results =  $db->query("SELECT title, img, category FROM Media");  
//    echo "Retrieved Results";
 
} catch (Exception $e) {
    echo "Bad Query";
    exit;
}
var_dump($results-> fetchAll(PDO::FETCH_ASSOC));
