<?php

$ch_email = "anik@gmail.com";
$ch_password = "anik";



if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $ch_email ) {


        if($password === $ch_password)
        {
            echo "Successfully Login";
        }
        else
        {
            echo "Your Password is wrong";
        }
    } else {
        echo "this email is not exist";
    }


}
?>

<?php

if (!isset($_POST['email']) && !isset($_POST['password']))
{
?>

<!DOCTYPE html>

<body>

    <h2>Login Form</h2>
    <form action="" method="POST">


        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>


<?php

}
?>

