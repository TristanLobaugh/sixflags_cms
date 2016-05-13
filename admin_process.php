<?php
	include "includes/db_connect.php";

	$db_columns = '';
	$values = '';
	foreach ($_POST as $key => $field) {
		$db_columns .= $key.",";
		$values .= "'".$field."',";
	}

	$trimmed_values = rtrim($values, ",");
	$trimmed_db_columns = rtrim($db_columns, ",");

	$query = 'INSERT INTO promos 
	(title, header_image, header_text, body_text, lower_image, lower_header, lower_body_text, lower_image2, lower_header2, lower_body2) 
	VALUES 
	('.$trimmed_values.')';

	$result = mysql_query($query);

	header('Location: admin.php?updated=true');
?>