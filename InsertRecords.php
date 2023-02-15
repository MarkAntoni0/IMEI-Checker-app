
<html>
<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>
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
		color: black;
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

<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div align="center">
		<fieldset style="width:40%">
			<br>
			<form method="post" action="InsertRecordsHandler.php">
				<label id="labelNew">IMEI:</label><br>
				<input type="text" name="imei" id="inputNew">
				<br>
				<input id="button" type="submit" value="Add record">
				
				<br>
			</form>
			<br>
			<button onclick="redirectToHome()">Home</button>
			<br><br>
		</fieldset>
	</div>
	<script>
		function redirectToHome() {
			location.replace( "http://localhost/project.php" )
		}
	</script>

	

</body>

</html>