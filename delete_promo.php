<?php
	include "includes/db_connect.php";

	$query = 'DELETE FROM promos where id = ' .$_POST['delete-button'];

	$result = mysql_query($query);

	header('Location: admin.php?deleted=true');
?>