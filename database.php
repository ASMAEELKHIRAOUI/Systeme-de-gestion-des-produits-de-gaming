<?php

    function connection(){  
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "sgpg";
    
    //CONNECT TO MYSQL DATABASE USING MYSQLI
    $connect = mysqli_connect($host,$user,$password,$db);
    return $connect;
   }
?>