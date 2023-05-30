<?php 
    $mysql = new mysqli(

        "localhost",
        "root",
        "",
        "android"

    );

    if($mysql->connect_error){
        die("Failed to conect". $mysql->connect_error);
    }
?>