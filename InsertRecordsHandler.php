<!doctype html>
<html>
<head>
<style>
	#inputNew {
		border: none;
		width: 50%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
	
	fieldset {
		border: solid 1px #080808;
		background-color: white !important;
	}
	
	body {
		background-image: url(5870468.jpg);
		background-clip: content-box;
		background-repeat: no-repeat;
		background-size: cover;
		font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	}
	
	p {
		color: white;
		font-size: 20px;
		font-style: normal;
		font-weight: bold;
	}
	a {
		color: white;
		font-size: 20px;
		font-style: normal;
		font-weight: bold;
	}
	
	#button {
		background-color: #279BFF;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	}
	
	#labelNew {
		font-size: 20px;
		font-style: normal;
		font-weight: bold;
	}
	
	button {
		background-color: #279BFF;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	}
</style>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
		$imei = $_POST["imei"];
		$con = mysqli_connect("localhost","root","","projectdb") or die("Error Connect to the server");

		$signup = "INSERT INTO projectimei (imei)
		value('$imei')";

		$result = mysqli_query($con,$signup);

		if($result)
		{
			echo "<p>Record added successfully</p>";
			echo "<a href='./project.php'> Return to home </a>";
		}
		else{
			die("Error". mysqli_errno($con));
		}
	?>
</body>
</html>
