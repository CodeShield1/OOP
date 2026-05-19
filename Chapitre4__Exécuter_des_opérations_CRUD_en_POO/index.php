<?php  

// Create object
    $database = new Database();

    // Get connection
    $conn = $database->connect();
    if($conn){

        echo "Connection successful";

    }else{

        echo "Connection failed";
    }