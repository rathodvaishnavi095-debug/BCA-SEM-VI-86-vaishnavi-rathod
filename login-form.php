<!DOCTYPE html>
<html>
<body>

<form method="post">
Username: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br><br>
<input type="submit" name="login" value="Login">
</form>

<?php

$conn = mysqli_connect("localhost","root","","login_db");

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        echo "Login Successful";
    }
    else
    {
        echo "Invalid Username or Password";
    }
}

?>

</body>
</html>