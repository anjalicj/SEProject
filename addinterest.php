<?php
include ("functions.php");

  print_r($_POST);
query("INSERT INTO interest
	(Title)
	VALUES ('".$_POST["Interest"]."')
	");
	echo "New Interest added successfully";
?>