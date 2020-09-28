<?php
	if($_POST == NULL or empty($_POST['name']) or empty($_POST['email']))
	{
		?>
		<!DOCTYPE html>
		<html lang="pl">
		<head>
			<meta charset="UTF-8">
			<title>CV</title>
		</head>
		<body>
			<form action="index.php" method="post" />
				e-mail: <input value="" name="email" autocomplete="off" /><br /><br />
				nazwa: <input value="" name="name" autocomplete="off" /><br /><br />
				<input type="submit" value="Dodaj" />
			</form>
		</body>
		</html>


		<?php

				exit();
	
	}
	
	
	require_once("Insert.php");
	
	$insert = new Insert($_POST['email'], $_POST['name']);
	
	
?>