<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>
			<br>

<form class="ui form" style="max-width:250; margin: auto;" method=get action=update_record_result.php>




<?php

	$resource_main_id = $_GET["resource_main_id"];
	
	$resource_type = $_GET["resource_type"];

	$resource_description = $_GET["resource_description"];


?>

	<input type=hidden name=resource_main_id value='<?php echo $resource_main_id; ?>'> 


	<div class="field">
    <label>Resource Type</label>
    <input type=text name="resource_type" value='<?php echo $resource_type; ?>'>
  </div>

  <div class="field">
    <label>Resource Description</label>
    <input type=text name="resource_description" value='<?php echo $resource_description; ?>'>
  </div>




	<button class="ui labled olive button" type="submit">Update</button>

</form>

	</body>
</html>