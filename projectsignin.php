<!DOCTYPE html>
<html>

<head>
	<style type="text/css">
		body {
			background-image: url(5870468.jpg);
			background-clip: content-box;
			background-repeat: no-repeat;
			background-size: cover;
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
		}
		
		.topnav {
			background-color: #333;
			overflow: hidden;
		}
		
		.topnav a {
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}
		
		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}
		
		.topnav a.active {
			background-color: #279BFF;
			color: white;
		}
		
		#signInForm {
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
			color: #FFFFFF;
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
		
		footer {
			color: #FCFCFC;
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			color: white;
			text-align: center;
		}
		
		#inputNew {
			border: none;
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		#labelNew {
			font-size: 20px;
			font-style: normal;
			font-weight: bold;
		}
	</style>
	<title>Lost or stolen sign in</title>
</head>

<body>
	<div align="center" class="topnav">
		<div class="topnav">
			<a href="./project.php">IMEI CHECK</a>
			<a class="active" href="./projectsignin.php">SIGN IN</a>
			<a href="./projectsignup.php">SIGN UP</a>
			<a href="./about.php">ABOUT</a>
		</div>
	</div>
	<br><br>


	<form method="post" name="myForm" action="projectsigninhandler.php" onsubmit="return validateForm()" id="signInForm">
		<div align="center">
			<fieldset style="width:40%">
				<label id="labelNew">Email:</label><br>
				<input type="email" name="email" id="inputNew">
				<br><br>

				<label id="labelNew">Password:</label><br>
				<input type="password" name="password" id="inputNew">
				<br><br>

				<input type="submit" value="Login" id="button">
			</fieldset>
		</div>
	</form>

	<script>
	function validateForm() {
		let x = document.forms["myForm"]["email"].value;
			if (x == "") {
				alert("Email must be filled out");
				return false;
			}
		let y = document.forms["myForm"]["password"].value;
			if (y == "") {
					alert("Password must be filled out");
					return false;
			}
		}
	</script>

	<footer>
		<p>Author: Mark Tharwat - 19200164</p>
		<p><a href="http:\\www.facebook.com">Contact on Facebook</a>
		</p>
	</footer>
</body>

</html>