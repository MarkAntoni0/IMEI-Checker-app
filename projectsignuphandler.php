<style>
body {
	background-image: url(5870468.jpg);
	background-clip: content-box;
	background-repeat: no-repeat;
	background-size: cover;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
    }
p   {
    color: white;

    }
</style>
<?php 
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    $con = mysqli_connect("localhost","root","","projectdb") or die("Error Connect to the server");

    $signup = "INSERT INTO projectusers (username,email,password,phone)
    value('$username','$email','$password','$phone')";

    $result = mysqli_query($con,$signup);

    if($result)
    {
        echo "<h1>Student added successfully</h1>";
        echo "<a href='./projectsignin.php'> Click here to Login</a>";
    }
    else{
        die("Error". mysqli_errno($con));
    }
?>