	<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add recipe</title>
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
<script>
function findRecipe(str) {
if (str == "") {
	document.getElementById("txtHint").innerHTML = "";
	return;
} else { 
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("txtHint").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","getrecipe.php?q="+str,true);
	xmlhttp.send();
}
}
</script>

</head>
<body>
<header><img src="images/header.png"/></header>
<div id="topBar" class="nav">
<center><a href="index.php"><h1 id="titlePic">C<img src="images/cookie.png" height="30px" width="30px"/><img src="images/cookierotate.png"height="30px" width="30px"/>k-E-
B<img src="images/cookie.png" height="30px" width="30px"/><img src="images/cookierotate.png"height="30px" width="30px"/>k</h1></a></center>
</div>
<!-- Menu for  -->
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
	<a href="#"><p class="w3-square w3-card-8 w3-hover-opacity" style="padding:5px;"style="width:30%;cursor:zoom-in"
			onclick="document.getElementById('modal03').style.display='block'">++ADD RECIPE++</p></a>
</div>
<div id="modal03" class="w3-modal w3-padding-16" >
<span class="w3-closebtn w3-red w3-container w3-padding-16 w3-display-topright"
onclick="document.getElementById('modal03').style.display='none'">X</span>
<!--add recipe form-->
<div class="w3-modal-content w3-animate-zoom w3-light-grey" style="padding: 20px;">
	<form name="addForm" action="insert.php" method="POST">
	<h3>Add a recipe</h3>
	Name of Recipe</br> 
	<input type="text" name="title"/>
	

	<table>
	<tr>
		<td>Amount</td>
		<td>Ingredients</td>
	</tr>
	<tr>
		<td><input type="text" name="amt1" size="4" placeholder="2tsp"/></td>
		<td><input type="text" name="ing1" placeholder="flour"/></td>
	</tr>
	<tr>
		<td><input type="text" name="amt2" size="4" placeholder="2tsp"/></td>
		<td><input type="text" name="ing2" placeholder="sugar"/></td>
	</tr>
	<tr>
		<td><input type="text" name="amt3" size="4" placeholder="2tsp"/></td>
		<td><input type="text" name="ing3" placeholder="milk"/></td>
	</tr>
	<tr>
		<td><input type="text" name="amt4" size="4" placeholder="2tsp"/></td>
		<td><input type="text" name="ing4" placeholder="yeast"/></td>
	</tr>
	<tr>
		<td><input type="text" name="amt5" size="4" placeholder="2tsp"/></td>
		<td><input type="text" name="ing5" placeholder=""/></td>
	</tr>
	<tr>
		<td><input type="text" name="amt6" size="4" placeholder="2tsp"/></td>
		<td><input type="text" name="ing6" placeholder=""/></td>
	</tr>
	<tr>
		<td><input type="text" name="amt7" size="4" placeholder="2tsp"/></td>
		<td><input type="text" name="ing7" placeholder=""/></td>
	</tr>
	<tr>
		<td><input type="text" name="amt8" size="4" placeholder="2tsp"/></td>
		<td><input type="text" name="ing8" placeholder=""/></td>
	</tr><tr>
		<td><input type="text" name="amt9" size="4" placeholder="2tsp"/></td>
		<td><input type="text" name="ing9" placeholder=""/></td>
	</tr><tr>
		<td><input type="text" name="amt10" size="4" placeholder="2tsp"/></td>
		<td><input type="text" name="ing10" placeholder=""/></td>

	</tr>
	<tr>
	<td>Instructions</td>
	</tr>
	<tr>
		<td colspan="2"><input type="text" name="step1" size="35%" placeholder="step 1"/></td>
	</tr>
		<tr>
		<td colspan="2"><input type="text" name="step2" size="35%" placeholder="step 2"/></td>
	</tr>	
	<tr>
		<td colspan="2"><input type="text" name="step3" size="35%" placeholder="step 3"/></td>
	</tr>
		<tr>
		<td colspan="2"><input type="text" name="step4" size="35%" placeholder="step 4"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="text" name="step5" size="35%" placeholder="step 5"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="text" name="step6" size="35%" placeholder="step 6"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="text" name="step7" size="35%" placeholder="step 7"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="text" name="step8" size="35%" placeholder="step 8"/></td>
	</tr>
	</table>
	
	<input type="submit" value="Submit" />
	</form>
</div>
</div>
<div id="featureSide" class="w3-panel w3-leftbar w3-xlarge w3-serif">
<!--displaying the results from the database-->
<?php
	$user="cook";
	$pass="book";
	$db="cookebook";
	$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
	$sql = "SELECT id, title FROM recipe ORDER BY title ASC";
	
	$result = $db->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<a href='getrecipe.php?q=".$row["id"] . "' onclick='findRecipe(" . $row["id"] . ")'>" . 
				"<h1>" . 
				$row["title"] . "</h1></a>";
		}
	} else {
		echo "0 results";
	}

	$db->close();

?>
</div>

</body>
</html>