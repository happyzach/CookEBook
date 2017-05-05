<?php

$user="cook";
$pass="book";
$db="cookebook";
$title = $_POST['title'];
$amt1 =$_POST['amt1'];
$amt2 =$_POST['amt2'];
$amt3 =$_POST['amt3'];
$amt4 =$_POST['amt4'];
$amt5 =$_POST['amt5'];
$amt6 =$_POST['amt6'];
$amt7 =$_POST['amt7'];
$amt8 =$_POST['amt8'];
$amt9 =$_POST['amt9'];
$amt10 =$_POST['amt10'];
$ing1 =$_POST['ing1'];
$ing2 =$_POST['ing2'];
$ing3 =$_POST['ing3'];
$ing4 =$_POST['ing4'];
$ing5 =$_POST['ing5'];
$ing6 =$_POST['ing6'];
$ing7 =$_POST['ing7'];
$ing8 =$_POST['ing8'];
$ing9 =$_POST['ing9'];
$ing10 =$_POST['ing10'];
$step1 =$_POST['step1'];
$step2 =$_POST['step2'];
$step3 =$_POST['step3'];
$step4 =$_POST['step4'];
$step5 =$_POST['step5'];
$step6 =$_POST['step6'];
$step7 =$_POST['step7'];
$step8 =$_POST['step8'];

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

$sql = "INSERT INTO recipe (title, amt1, amt2, amt3, amt4, amt5, amt6, amt7, amt8, amt9, amt10,
ing1, ing2, ing3, ing4, ing5, ing6, ing7, ing8, ing9, ing10, step1, step2, step3, step4, step5, step6, step7, step8)
		VALUES ('$title','$amt1','$amt2','$amt3','$amt4','$amt5','$amt6','$amt7','$amt8','$amt9','$amt10',
		'$ing1','$ing2','$ing3','$ing4','$ing5','$ing6','$ing7','$ing8','$ing9','$ing10','$step1','$step2','$step3','$step4',
		'$step5','$step6','$step7','$step8')";

		if ($db->query($sql) === TRUE) {
			header ('location: addRecipe.php');
		} else {
			echo "Error: " . $sql . "<br>" . $db->error;
		}

$db->close();