<?php

function readFolderFiles($dir){

    $files = scandir($dir);
    
    echo '<ul>';
    foreach($files as $file){
        if(substr($file, 0, 1)){
            echo '<li>';
            if(is_dir($dir . '/' . $file)){
                echo $file;
                readFolderFiles($dir . '/' . $file);
            } else {
                echo '<a href=" ' .$file . '">' . $file . '</a>';
               
            }
             echo '</li>';
        }
    }
    echo '</ul>';
}