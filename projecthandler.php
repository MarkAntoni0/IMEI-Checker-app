

<html>

<head>
<style>
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
</head>

<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div align="center">
		<fieldset style="width:40%">
		
			<?php 
				$imei = $_POST["imei"];

				$con = mysqli_connect("localhost","root","","projectdb") or die("Error Connect to the server");

				$query = "SELECT imei from projectimei where imei=$imei ";
				$result = mysqli_query($con,$query);
				$count = mysqli_num_rows($result);

				if ($count >= 1){
					echo ("<p>This is a lost or stolen device</p>
			
					<img src='NotSafe.png' width='100' height='100'/>");
				}
				else{
					echo ("<p id=#labelNew>This is Not a lost or stolen device</p>
				
					<img src='Safe.png' width='100' height='100' />");
				}

			?>
			<br><br>
			<button onclick="redirectToHome()">Home</button>

		</fieldset>
	</div>
	<script>
		function redirectToHome() {
			location.replace("http://localhost/project.php")
		}
	</script>
</body>

</html>