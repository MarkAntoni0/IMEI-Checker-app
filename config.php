<?php
    $con = mysqli_connect("localhost","root","") or die("Error Connect to the server");
    $db = mysqli_select_db($con,"section1") or die ("Error connect to database");
?>