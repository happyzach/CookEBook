<?php
$con = mysqli_connect('localhost','cook','book','cookebook');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"users");

$sql = "SELECT * FROM users";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
if(!empty($_POST['username']) && !empty($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);
	$sql2 = "INSERT INTO users (Username, Password) VALUES ('$username','$password')";
	if($row['Username'] == $username){
		echo "<h1>Sorry that username is not available</h1>";
	}
	else{
		if($con->query($sql2) === TRUE){
				echo "<script>alert('user succesfully created')</script>";
			} else {
				echo "Error: " . $sql2 . "<br>" . $db->error;
			}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title>Cook-E-Book</title>
		<link rel="stylesheet" href="w3.css" >
		<link rel="stylesheet" href="cookiestyles.css" >
		<script type="text/javascript" src="jquery.min.js"></script>
		<style>
		</style>
	<script>
	$(document).ready(function(){
			$("#search").click(function(){
				$("#menuDrop").toggle();
			});
		});
	$(document).ready(function(){
		$("#search1").click(function(){
			$("#menuDrop1").toggle();
		});
	});
	
	function passCheck(){
		var pass = document.regForm.password;
		var pass2 = document.regForm.password2;
		var error = document.getElementById('passError').innerHTML;
		if (pass.value != pass2.value){
			error = "password does not match";
		}
		else{
			error = "password matches";
		}
	}
	$(document).ready(function() {
	  var stickyNavTop = $('.nav').offset().top;

	  var stickyNav = function(){
		var scrollTop = $(window).scrollTop();

		if (scrollTop > stickyNavTop) { 
		  $('.nav').addClass('sticky');
		} else {
		  $('.nav').removeClass('sticky'); 
		}
	  };

	  //stickyNav();

	  $(window).scroll(function() {
		stickyNav();
	  });
	});
	</script>
	</head>
<body>
<header><img src="images/header.png"/></header>
<center><a href="index.php"><h1 id="titlePic">C<img src="images/cookie.png" height="30px" width="30px"/><img src="images/cookierotate.png"height="30px" width="30px"/>k-E-
B<img src="images/cookie.png" height="30px" width="30px"/><img src="images/cookierotate.png"height="30px" width="30px"/>k</h1></a></center>

<div id="menuSide" class="w3-ul w3-hoverable">
<ul>
	<li id="search">SEARCH</li>
	<div id="menuDrop">
		<form action="search2.php" method="POST">
			<input type="text" name="valueToSearch" />
			<input type="submit" name="search" value="search" />
		</form>
	</div>
	<li id="search1">MY BOOK</li>
	<div id="menuDrop1">
		<form method="POST" action="addRecipe2.php" name="loginform" id="loginform">
			Username:<br />
			<input type="text" name="username" id="username" /><br />
			Password:<br />
			<input type="password" name="password" id="password" /><br />
			<input type="submit" name="login" id="login" value="Login" />
		</form>
	<a href="register.php">register</a>
	</div>
	<li>LEARN</li>
	<li>OTHER</li>
</ul>
<div id="adSpace">
adSpace
</div>
</div>
<div id="featureSide" class="w3-panel w3-leftbar w3-xlarge w3-serif">
	<form method="POST" action="register.php" name="regForm">
		Enter a Username<br />
		<input type="text" name="username"/><br />
		Enter a Password<br />
		<input type="password" name="password"/><br />
		<!--Re-Enter your Password<br />
		<input type="password" name="password2" onchange="passCheck()"/><div id="passError"><div><br />-->
		<input type="submit" value="Submit"/>
	</form>
</div>
</body>
</html>