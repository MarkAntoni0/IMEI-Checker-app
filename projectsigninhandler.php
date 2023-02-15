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
</head>

<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div align="center">
		<fieldset style="width:40%">
			<?php
			$email = $_POST[ "email" ];
			$password = $_POST[ "password" ];

			$con = mysqli_connect( "localhost", "root", "", "projectdb" )or die( "Error Connect to the server" );

			$login = " SELECT email,password FROM projectusers 
				WHERE email='$email' and password='$password'";

			$result = mysqli_query( $con, $login );
			$count = mysqli_num_rows( $result );

			if ( $count == 1 ) {
				$username = " SELECT username FROM projectusers WHERE email='$email'";
				$resultUsername = mysqli_query( $con, $username );

				while ( $rowData = mysqli_fetch_assoc( $resultUsername ) ) {
					echo "<img src='User.png' width='100' height='100' /><br>";
					echo "Welcome ";
					echo $rowData[ "username" ] . '<br>';
					echo "<a href='InsertRecords.php'>Add Lost device IMEI!</a>";
				}

			} else {
				echo( "<p>Wrong credentials</p>" );

			}
			?>
			<br>
			<button onclick="redirectToHome()">Home</button>


		</fieldset>
	</div>
	<script>
		function redirectToHome() {
			location.replace( "http://localhost/project.php" )
		}
	</script>
</body>

</html>