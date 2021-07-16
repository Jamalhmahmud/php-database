<?php 

  function connect(){
    $conn = new mysqli("localhost", "jamal", "2222", "wtg");
    if($conn->connect_error){
    	die("Database connection failed..." . $conn->connect_error);
    }

    return $conn;
}

?>