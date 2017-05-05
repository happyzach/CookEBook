<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title>Cook-E-Book</title>
		<link rel="stylesheet" href="w3.css" >
		<link rel="stylesheet" href="cookiestyles.css" >
		<script type="text/javascript" src="jquery.min.js"></script>
<style>
	
	#dispAmt {
		width: 45%;
		float: left;
		list-style: none;
	}
	#dispIng {
		width: 45%;
		float: right;
		list-style: none;

	
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
<div id="topBar" class="nav">
<center><a href="index.php"><h1 id="titlePic">C<img src="images/cookie.png" height="30px" width="30px"/><img src="images/cookierotate.png"height="30px" width="30px"/>k-E-
B<img src="images/cookie.png" height="30px" width="30px"/><img src="images/cookierotate.png"height="30px" width="30px"/>k</h1></a></center>
</div>

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



<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','cook','book','cookebook');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"recipe");
$sql="SELECT * FROM recipe WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
	echo "<div id='featureSide' class='w3-panel w3-leftbar w3-xlarge w3-serif' >";

while($row = mysqli_fetch_array($result)) {

	echo "<h1>" . $row['title'] . "</h1>";
	echo "<div style='background-color:#d4d4d4; padding:10px;'>";
	echo "<ul id='dispAmt'>";
    echo "<li>" . $row['amt1'] . "</li><hr/>";
    echo "<li>" . $row['amt2'] . "</li><hr/>";
    echo "<li>" . $row['amt3'] . "</li><hr/>";
    echo "<li>" . $row['amt4'] . "</li><hr/>";
    echo "<li>" . $row['amt5'] . "</li><hr/>";
    echo "<li>" . $row['amt6'] . "</li><hr/>";
    echo "<li>" . $row['amt7'] . "</li><hr/>";
    echo "<li>" . $row['amt8'] . "</li><hr/>";
    echo "<li>" . $row['amt9'] . "</li><hr/>";
    echo "<li>" . $row['amt10'] . "</li><hr/>";
	echo "</ul>";
	echo "<ul id='dispIng'>"; 	
    echo "<li>" . $row['ing1'] . "</li><hr/>";
    echo "<li>" . $row['ing2'] . "</li><hr/>";
    echo "<li>" . $row['ing3'] . "</li><hr/>";
    echo "<li>" . $row['ing4'] . "</li><hr/>";
    echo "<li>" . $row['ing5'] . "</li><hr/>";
    echo "<li>" . $row['ing6'] . "</li><hr/>";
    echo "<li>" . $row['ing7'] . "</li><hr/>";
    echo "<li>" . $row['ing8'] . "</li><hr/>";
    echo "<li>" . $row['ing9'] . "</li><hr/>";
    echo "<li>" . $row['ing10'] . "</li><hr/>";
	echo "</ul>";
	echo "</div>";
	echo "<div style='background-color: white;padding:10px;'>";
	echo "<h3>Instructions</h3>";
    echo "<ol>";
	echo "<li>" . $row['step1'] . "</li>";
	echo "<li>" . $row['step2'] . "</li>";
	echo "<li>" . $row['step3'] . "</li>";
	echo "<li>" . $row['step4'] . "</li>";
	echo "<li>" . $row['step5'] . "</li>";
	echo "<li>" . $row['step6'] . "</li>";
	echo "<li>" . $row['step7'] . "</li>";
	echo "<li>" . $row['step8'] . "</li>";
	echo "</ol>";
	echo "</div>";
	


}
	echo "</div>";
mysqli_close($con);
?>

</body>
</html>