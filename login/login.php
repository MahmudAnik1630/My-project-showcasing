<?php

include '../database.php';


if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];


    if($email == "" || $password == "")
    {
        echo "Please fill all the fields";
        return;
    }

    $sql = "SELECT email , password from users where email = '$email' and password = '$password'";
    if (mysqli_query($conn ,$sql)) {
       
        
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Login Successfully";
        } else {
            echo "email and pass wrong";
        }
    } else {
        echo "email and pass wrong";
    }


}