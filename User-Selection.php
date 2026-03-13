<!DOCTYPE html>
<html>
<body>

<form method="post">
Please select your favourite car:<br>

<input type="radio" name="car" value="Nissan"> Nissan<br>
<input type="radio" name="car" value="Toyota"> Toyota<br>
<input type="radio" name="car" value="Mitsubishi"> Mitsubishi<br><br>

<input type="submit" name="submit" value="SUBMIT">
</form>

<?php
if(isset($_POST['submit']))
{
    $car = $_POST['car'];
    echo "<h3>Your favourite car is: $car</h3>";
}
?>

</body>
</html>