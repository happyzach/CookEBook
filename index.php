<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
	<title>Cook-E-Book</title>
	<link rel="stylesheet" href="w3.css" >
	<link rel="stylesheet" href="cookiestyles.css" >
	<script type="text/javascript" src="jquery.min.js"></script>
	<style>
	#featureSide h1{background-color: black}
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

	  stickyNav();

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
<div id="menuDrop" >
	<form action="search2.php" method="POST">
		<input type="text" name="valueToSearch" placeholder="leave empty to view all"/>
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
<p>Welcome to Cook-E-Book where you can search through many delicious recipes.  Please take some time to make an account and
add recipes to our site as well as save other recipies to your recipe book.</p>
<div id="featuredFood">
<div class="w3-container w3-teal">
<h1>Featured Recipes</h1>
</div>

<div class="w3-row-padding w3-margin-top">
<div class="w3-third">
<div class="w3-card-2">
  <a href="#"><img src="images/cookie.png" style="width:100%"></a>
  <div class="w3-container">
	<h5>Recipe 1</h5>
  </div>
</div>
</div>
<div class="w3-third">
<div class="w3-card-2">
  <a href="#"><img src="images/cookierotate.png" style="width:100%"></a>
  <div class="w3-container">
	<h5>Recipe 2</h5>
  </div>
</div>
</div>
<div class="w3-third">
<div class="w3-card-2">
  <a href="#"><img src="images/cookie.png" style="width:100%"></a>
  <div class="w3-container">
	<h5>Recipe 3</h5>
  </div>
</div>
</div>
</div>
<div class="w3-row-padding w3-margin-top">
<div class="w3-third">
<div class="w3-card-2">
  <a href="#"><img src="images/cookierotate.png" style="width:100%"></a>
  <div class="w3-container">
	<h5>Recipe 4</h5>
  </div>
</div>
</div>
<div class="w3-third">
<div class="w3-card-2">
  <a href="#"><img src="images/cookie.png" style="width:100%"></a>
  <div class="w3-container">
	<h5>Recipe 5</h5>
  </div>
</div>
</div>
<div class="w3-third">
<div class="w3-card-2">
  <a href="#"><img src="images/cookierotate.png" style="width:100%"></a>
  <div class="w3-container">
	<h5>Recipe 5</h5>
  </div>
</div>
</div>
</div>
</div>	
</div>
</body>
</html>