<?php

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);


$con = mysqli_connect('localhost','cook','book','cookebook');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"users");

$sql = "SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
if (!empty($username) && !empty($password)){
if($row['Username'] == $username && $row['Password'] == $password){
	header('location: addRecipe.php');
} else {
	echo "failed to login.... incorrect password/username or you need to <a href='register.php'>register</a>";
}
} else {
	echo "failed to login.... incorrect password/username or you need to <a href='register.php'>register</a>";
}
?>
