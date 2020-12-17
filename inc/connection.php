<?php

$conn = ""; 
  
try { 
  $dbhost="localhost";
  $dbuser="root";
  $dbpass ="";
  $db = "netmatters";
    
    $conn = new PDO( 
        "mysql:host=$dbhost; dbname=$db", 
        $dbuser, $dbpass
    ); 
      
    $conn->setAttribute(PDO::ATTR_ERRMODE,  
                PDO::ERRMODE_EXCEPTION); 
      
} catch(PDOException $e) { 
    // echo "Connection failed: " 
    //     . $e->getMessage();
    $conn = null;
    die($e->getMessage());
}
