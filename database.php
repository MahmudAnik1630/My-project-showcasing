<?php 
$host = "localhost"; 
$username = "anik"; 
$password = "anik1234"; 
$dbname = "TODO"; 


$conn = new mysqli($host, $username, $password, $dbname); 



 if ($conn->connect_error) 
{ 
die("Connection failed: " . $conn->connect_error);
 } 

 else

 {
    // echo "Connected successfully"; 
 }

?>