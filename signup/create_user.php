
<?php 
include '../database.php';

if (isset($_POST['email']) && isset($_POST['password']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    if($email == "" || $password == "" || $name == "")
    {
        echo "Please fill all the fields";
        return;
    }

    $sql = "Insert into users (name , email , password) values ('$name','$email','$password')";
    if (mysqli_query($conn ,$sql)) {
        echo "Create Successful";
        

    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>