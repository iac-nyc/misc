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

echo "Connected to the database";