<!DOCTYPE html>
<html>

<head>
	<title>Lost or stolen</title>
	<style type="text/css">
		body {
			background-image: url(5870468.jpg);
			background-clip: content-box;
			background-repeat: no-repeat;
			background-size: cover;
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
		}
		
		div {
			color: #FFFFFF;
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
		}
		
		a {
			color: #FFFFFF;
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
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
		
		fieldset {}
		
		header {
			color: #FDFCFC;
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
		}
		
		img {}
		
		#logo {
			align-content: center;
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		
		form {
			align-content: center;
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
		
		#labelNew {
			font-size: 20px;
			font-style: normal;
			font-weight: bold;
		}
		
		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}
		
		.topnav a.active {
			background-color: #279BFF;
			color: white;
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
	</style>
</head>

<body>
	<div class="topnav">
		<a class="active" href="./project.php">IMEI CHECK</a>
		<a href="./projectsignin.php">SIGN IN</a>
		<a href="./projectsignup.php">SIGN UP</a>
		<a href="./about.php">ABOUT</a>
	</div>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>

	<form name="myForm" method="post" onsubmit="return validateForm()" action="projecthandler.php">
		<img src="icon.png" alt="" width="151" height="121" id="logo" align="center"/>
		</br>
		<div align="center">
			<fieldset style="width:40%" >
				<br>
				<label id="labelNew">IMEI:</label><br>
				<input type="text" name="imei" id="inputNew">
				<br><br>
				<input type="submit" value="Check!" id="button">
				<br><br>
			</fieldset>
			
		</div>
	</form>
	<br>
	<div align="center" id="Middle">
		<button onclick="showHelp()" id="button">Show help</button>
		<br><br>
	</div>
	<script>
		function showHelp(){
			var paragraph=document.createElement("p");
			var node=document.createTextNode("This website helps you to figure out whether the IMEI on the phone is stolen or not - Insert the IMEI on the back of the device box to search the Database");
			paragraph.appendChild(node);
			document.getElementById("Middle").appendChild(paragraph);
		}
		function validateForm() {
		let x = document.forms["myForm"]["imei"].value;
			if (x == "") {
				alert("IMEI must be filled out");
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