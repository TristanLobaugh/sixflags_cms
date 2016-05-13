<?php

	include "includes/db_connect.php";
	$updated = $_GET['updated'];
	if($updated == true){
		$message = "Your promo has beeen added to the database";
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
		<div class="admin-wrapper col-sm-6 col-sm-offset-3" >
			<form action="admin_process.php" method="post">
			  <div class="form-group">
			  	<div><?php print $message; ?></div>
			    <label for="field1">Promotion Title</label>
			    <input name="title" type="text" class="form-control" id="field1" placeholder="Promo Title">
			  </div>
			  <div class="form-group">
			    <label for="field2">Header Image</label>
			    <input name="header_image"type="text" class="form-control" id="field2" placeholder="Header Image">
			  </div>
			  <div class="form-group">
			    <label for="field3">Header Text</label>
			    <input name="header_text" type="text" class="form-control" id="field3" placeholder="Header Text">
			  </div>
			  <div class="form-group">
			    <label for="field4">Body Text</label>
			    <input name="body_text" type="text" class="form-control" id="field4" placeholder="Body Text">
			  </div>
			  <div class="form-group">
			    <label for="field5">Lower Image</label>
			    <input name="lower_image" type="text" class="form-control" id="field5" placeholder="Lower Image">
			  </div>
			  <div class="form-group">
			    <label for="field6">Lower Header</label>
			    <input name="lower_header" type="text" class="form-control" id="field6" placeholder="Lower Header">
			  </div>
			  <div class="form-group">
			    <label for="field7">Lower Body Text</label>
			    <input name="lower_body_text" type="text" class="form-control" id="field7" placeholder="Lower Body Text">
			  </div>
			  <div class="form-group">
			    <label for="field8">Lower Image 2</label>
			    <input name="lower_image2" type="text" class="form-control" id="field8" placeholder="Lower Image 2">
			  </div>
			  <div class="form-group">
			    <label for="field9">Lower Header 2</label>
			    <input name="lower_header2" type="text" class="form-control" id="field9" placeholder="Lower Header 2">
			  </div>
			  <div class="form-group">
			    <label for="field10">Lower Body Text 2</label>
			    <input name="lower_body2" type="text" class="form-control" id="field10" placeholder="Lower Body Text 2">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>


</body>
</html>