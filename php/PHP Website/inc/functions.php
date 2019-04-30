<?php
function full_catalog_array(){
    include("connection.php");
    
    
    try {
        $results =  $db->query("SELECT title, img, category FROM Media");  
    
     
    } catch (Exception $e) {
        echo "Bad Query";
        exit;
    }
    $catalog = $results-> fetchAll();

}

function single_item_array($id){
    include("connection.php");
    
    
    try {
        $results =  $db->prepare(
            "SELECT media_id, title, category,img, format, year, genre, publisher, isbn 
            FROM Media
            JOIN Genres ON Media.genre_id = Genres.genre_id
            LEFT OUTER JOIN Books ON Media.media_id = Books.Media_id
            WHERE Media.media_id = ?"
        );  
        $results->bindParam(1, $id,PDO::PARAM_INT);
        $results->execute();
    
     
    } catch (Exception $e) {
        echo "Bad Query";
        exit;
    }
    $catalog = $results-> fetch();
    var_dump(single_item_array(1));

}

function get_item_html($id,$item) {
    $output = "<li><a href='details.php?id="
        . $id . "'><img src='" 
        . $item["img"] . "' alt='" 
        . $item["title"] . "' />" 
        . "<p>View Details</p>"
        . "</a></li>";
    return $output;
}

function array_category($catalog,$category) {
    $output = array();
    
    foreach ($catalog as $id => $item) {
        if ($category == null OR strtolower($category) == strtolower($item["category"])) {
            $sort = $item["title"];
            $sort = ltrim($sort,"The ");
            $sort = ltrim($sort,"A ");
            $sort = ltrim($sort,"An ");
            $output[$id] = $sort;            
        }
    }
    
    asort($output);
    return array_keys($output);
}