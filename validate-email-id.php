<!DOCTYPE html>
<html>
<body>

<form method="post">
Enter Email ID: 
<input type="text" name="email">
<br><br>
<input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['email']))
{
    $email = $_POST['email'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "Valid Email ID";
    }
    else
    {
        echo "Invalid Email ID";
    }
}
?>

</body>
</html>