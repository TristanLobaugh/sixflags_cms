<?php
	include "includes/db_connect.php";
	$result = mysql_query('SELECT * FROM promos');
	while ($row = mysql_fetch_assoc($result)){
		$promo_array[] = $row;
	}
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
		<div class="admin-wrapper col-sm-10 col-sm-offset-1" >
		
			<div><?php print $message; ?></div>
			<table class="table-striped">
			<?php foreach($promo_array as $promo): ?>
				<tr class="promo_row">
					<td class="col-sm-5"><?php print $promo['title']; ?></td>
					<form action="edit_promo.php" method="post">
						<td><button class="btn btn-primary" name="edit-button"value=<?php print $promo['id'];?>>Edit Button</button></td>
					</form>
					<form action="delete_promo.php" method="post">
						<td><button class="btn btn-danger" name="delete-button" value=<?php print $promo['id'];?>>Delete Button</button></td>
					</form>
				</tr>
			<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>


</body>
</html>