<?php
    require_once (__DIR__ . "/../model/database.php");//creates and fixes path for php
    //connected to database useing the variables we created
    $connection = new mysqli($host, $username, $password);
    //checking if connection has a connection error and accessing a connect error to see if theres a connect error
    if ($connection->connect_error){
        die("Error:" . $connection->connect_error); //die means its gonna show that we have an error
    }
    
    $exists = $connection->select_db($database);//trying to access a database that exists on my sql sever
    
    if (!$exists){//seeing if it connects to the database
       $query = $connection ->query("CREATE DATABASE $database ");//this creates a query and the query gets applied to our connection and it gonna get stored in the query then it tells us if its true or false
       
       if($query){//checks if we successfully created our database
           echo" Successfully created database; " . $database; 
       }
       
    }
    else {
        echo 'Database already exists';//if the database already exists 
    }
    
    $connection->close();//close our connection

