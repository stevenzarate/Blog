<?php
    require_once (__DIR__ . "/../model/database.php");//creates and fixes path for php
    //connected to database useing the variables we created
    $connection = new mysqli($host, $username, $password);
    //checking if connection has a connection error and accessing a connect error to see if theres a connect error
    if ($connection->connect_error){
        die("Error:" . $connection->connect_error); //die means its gonna show that we have an error
    }
    //if it echos out success it means theres no connection error
    else {
        echo 'success' .$connection->host_info;
    }
    
    $connection->close();//close our connection

