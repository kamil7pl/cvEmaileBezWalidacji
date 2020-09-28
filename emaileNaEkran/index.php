<?php

	require_once("EmailDatabase.php");

	$baza = new EmailDatabase();
	foreach($baza -> emails as $value)
	echo $value.', ';
?>