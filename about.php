<!DOCTYPE html>
<html>

<head>
	<style type="text/css">
        #slideshow {
        overflow: hidden;
        height: 510px;
        width: 728px;
        margin: 0 auto;
    }
     
    .slide {
        float: left;
        height: 510px;
        width: 728px;
    }
     
     
    .slide-wrapper {
         

        width: calc(728px * 4);
         

        animation: slide 10s ease infinite;
    }
     

     
    .slide:nth-child(1) {
        background: green;
    }
     
    .slide:nth-child(2) {
        background: pink;
    }
     
    p {
			color: #FCFCFC;
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
			width: 100%;
			color: white;
			text-align: center;
		}

    .slide:nth-child(3) {
        background: red;
    }
     
    .slide:nth-child(4) {
        background: yellow;
    }
     
     
    @keyframes slide {
         

        20% {
            margin-left: 0px;
        }
        40% {
            margin-left: calc(-728px * 1);
        }
        60% {
            margin-left: calc(-728px * 2);
        }
        80% {
            margin-left: calc(-728px * 3);
        }
    }
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
		
		#signUpForm {
			font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
			color: #FFFFFF;
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
		
		#labelNew {
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
	<title>Lost or stolen sign up</title>
</head>

<body>
	<div align="center" class="topnav">
		<div class="topnav">
			<a href="./project.php">IMEI CHECK</a>
			<a href="./projectsignin.php">SIGN IN</a>
			<a href="./projectsignup.php">SIGN UP</a>
			<a class="active" href="./about.php">ABOUT</a>
		</div>
	</div>
	<br>

    <div align="center" >
    <img src="author.png" alt="author" width="200" height="200"/>
    <p>Lost or stolen by: Mark Th. Antonio<br> Proudly created under supervision of: Eng. Esraa</p>
    <br>
	</div>


    <div id="slideshow">
        <div class="slide-wrapper">
             
            <div class="slide">
                <h1 class="slide-number">
                <img src="slide1.jpg" alt="slide1" width="972" height="540" align="center"/>
                </h1>
            </div>
            <div class="slide">
                <h1 class="slide-number">
                <img src="slide2.jpg" alt="slide2" width="972" height="540" align="center"/>
                </h1>
            </div>
            <div class="slide">
                <h1 class="slide-number">
                <img src="slide3.jpg" alt="slide3" width="972" height="540" align="center"/>
                </h1>
            </div>
            <div class="slide">
                <h1 class="slide-number">
                <img src="slide4.jpg" alt="slide4" width="972" height="540" align="center"/>
                </h1>
            </div>
        </div>
    </div>


	<footer>
		<p>Author: Mark Tharwat - 19200164</p>
		<p><a href="http:\\www.facebook.com">Contact on Facebook</a>
		</p>
	</footer>
</body>

</html>