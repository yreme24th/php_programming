<?php 

//print_r($_GET);
//echo $_GET['first_name'];
//echo '&nbsp';
//echo $_GET['last_name'];
if(isset($_GET['first_name']) && isset($_GET['last_name'])){
	$file = fopen("form_names.csv","a");
	fputcsv($file, [$_GET['first_name'], $_GET['last_name']]);
	fclose($file);
	echo "name added to csv";
}


?>
<html>
	<head>
	</head>
	<body>
		<form action="form.php" method="get">
			<label>First Name:</label>
			<input type="text" name="first_name"><br>
			<label>Last Name:</label>
			<input type="text" name="last_name"><br>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>