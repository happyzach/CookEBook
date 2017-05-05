<?php
if(!empty($_POST['search']))
{
	$valueToSearch = $_POST['valueToSearch'];
	$query = "SELECT * FROM `recipe` WHERE `title` LIKE '%".$valueToSearch."%'";
	$search_results = filterTable($query);
	//$query = "SELECT * FROM recipe WHERE title LIKE %'".$valueToSearch."'%";
			
			
}
else {
	
	$query = "SELECT title FROM recipe ORDER BY title ASC";
	$search_results = filterTable($query);
}

function filterTable($query)
{
	$con = mysqli_connect('localhost','cook','book','cookebook');
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}

	mysqli_select_db($con,"users");

	//$sql = "SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'";
	$result = mysqli_query($con,$query);
	return $result;
}
//$row = mysqli_fetch_array($result);
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
			<input type="submit" name="search" value="search"/>
		</form>
	</div>
	<li id="search1">MY BOOK</li>
	<div id="menuDrop1">
	<form method="post" action="addRecipe2.php" name="loginform" id="loginform">
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
<?php while($row = mysqli_fetch_array($search_results)):?>
<?php echo "<a href='getrecipe.php?q=".$row["id"] . "' onclick='findRecipe(" . $row["id"] . ")'>" . 
						"<h1>" . 
						$row["title"] . "</h1></a>"; ?>
<?php endwhile; ?>
</div>	
</div>
</body>
</html>