<?php
if(isset($_POST['search']))
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
	$con = mysqli_connect("localhost", "cook", "book", "cooktest");
	$filter_Result = mysqli_query($con, $query);
	return $filter_Result;
}

?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title>Cook-E-Book</title>
		<link rel="stylesheet" href="w3.css" >
		<script type="text/javascript" src="jquery.min.js"></script>
		<style>
			body {
				background-color: #e7ffea;
			}
			#titlePic {
				background-color: black;
				color:white;
			}

			#menuSide {
				width: 20%;
				float: left;
			}
			#menuSide li {
				list-style: none;
				cursor: pointer;
			}
			
			#featureSide {
				float:right;
				width:78%;
				padding:10px;
			}
			#adSpace {
				margin: 20px;
				padding:10px;
				border: 1px dashed black;
			}
			#titlePic:hover{background-color:grey;}
			#amount {
				float:right;
				position:relative;
			}
			#foodtype {
				float:left;
				position:static;
			}
			#titlePic img {
				width:30px;
				height: 30px;
			}
			#menuDrop {
				display: none;
			}
			#menuDrop1{
				display: none;
			}
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
	</script>
	</head>
<body>


<center><a href="index.php"><h1 id="titlePic">C<img src="images/cookie.png" height="30px" width="30px"/><img src="images/cookierotate.png"height="30px" width="30px"/>k-E-
B<img src="images/cookie.png" height="30px" width="30px"/><img src="images/cookierotate.png"height="30px" width="30px"/>k</h1></a></center>

<div id="menuSide" class="w3-ul w3-hoverable">
<ul>
	<li id="search">SEARCH</li>
	<div id="menuDrop">
	<form action="search.php" method="POST">
	<input type="text" name="valueToSearch" />
	<input type="submit" name="search" value="Filter"/>
	</form>
	</div>
	<li id="search1">MY BOOK</li>
	<div id="menuDrop1">
	<form method="post" action="" name="loginform" id="loginform">
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
<?php while($row = mysql_fetch_array($search_results)):?>
<?php echo '<h1>' . $row['title'] . '</h1>'; ?>
<?php endwhile; ?>
</div>	
</div>
</body>
</html>