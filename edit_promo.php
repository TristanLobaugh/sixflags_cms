<?php

	include "includes/db_connect.php";
	$id = $_POST['edit-button'];

	$query = "SELECT * FROM promos WHERE id =" .$id;
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
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
			<form action="admin_process_update.php" method="post">
			  <div class="form-group">
			  	<div><?php print $message; ?></div>
			    <label for="field1">Promotion Title: ID: <?php print $row['id'];?></label>
			    <input name="title" type="text" class="form-control" id="field1" placeholder="Promo Title" value="<?php print $row['title'];?>" >
			  </div>
			  <div class="form-group">
			    <label for="field2">Header Image</label>
			    <input name="header_image"type="text" class="form-control" id="field2" placeholder="Header Image" value="<?php print $row['header_image'];?>" >
			  </div>
			  <div class="form-group">
			    <label for="field3">Header Text</label>
			    <input name="header_text" type="text" class="form-control" id="field3" placeholder="Header Text" value="<?php print $row['header_text'];?>" >
			  </div>
			  <div class="form-group">
			    <label for="field4">Body Text</label>
			    <input name="body_text" type="text" class="form-control" id="field4" placeholder="Body Text" value="<?php print $row['body_text'];?>" >
			  </div>
			  <div class="form-group">
			    <label for="field5">Lower Image</label>
			    <input name="lower_image" type="text" class="form-control" id="field5" placeholder="Lower Image" value="<?php print $row['lower_image'];?>" >
			  </div>
			  <div class="form-group">
			    <label for="field6">Lower Header</label>
			    <input name="lower_header" type="text" class="form-control" id="field6" placeholder="Lower Header" value="<?php print $row['lower_header'];?>" >
			  </div>
			  <div class="form-group">
			    <label for="field7">Lower Body Text</label>
			    <input name="lower_body_text" type="text" class="form-control" id="field7" placeholder="Lower Body Text" value="<?php print $row['lower_body_text'];?>" >
			  </div>
			  <div class="form-group">
			    <label for="field8">Lower Image 2</label>
			    <input name="lower_image2" type="text" class="form-control" id="field8" placeholder="Lower Image 2" value="<?php print $row['lower_image2'];?>" >
			  </div>
			  <div class="form-group">
			    <label for="field9">Lower Header 2</label>
			    <input name="lower_header2" type="text" class="form-control" id="field9" placeholder="Lower Header 2" value="<?php print $row['lower_header2'];?>" >
			  </div>
			  <div class="form-group">
			    <label for="field10">Lower Body Text 2</label>
			    <input name="lower_body2" type="text" class="form-control" id="field10" placeholder="Lower Body Text 2" value="<?php print $row['lower_body2'];?>" >
			  </div>
			  <button type="submit" class="btn btn-default">Update</button>
			</form>
		</div>
	</div>
</div>


</body>
</html>