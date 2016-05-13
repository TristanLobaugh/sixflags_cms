<?php
	include "includes/db_connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	
<div class="container">
	<div class="row">
		<div class="admin-wrapper col-sm-6 col-sm-offset-3" >
			<div><?php print $message; ?></div>
			<div class="col-sm-12"><a href="add_promo.php">Create New Promo</a></div>
			<div class="col-sm-12"><a href="manage_promo.php">Manage Current Promos</a></div>
		</div>
	</div>
</div>


</body>
</html>