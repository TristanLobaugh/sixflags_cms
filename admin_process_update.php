<?php
	include "includes/db_connect.php";

	$what_to_update = '';
	foreach ($_POST as $key => $field) {

		$what_to_update .= $key."='".$value."',";

	}

	$trimmed_update = rtrim($what_to_update, ",");

	$query = 'UPDATE promos
	SET ' . $trimmed_update
	. ' WHERE id = ' . $_POST["id"];

	$result = mysql_query($query);

	header('Location: admin.php?updated=true');
?>