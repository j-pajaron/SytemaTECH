<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		/*css ng header*/

	
	    .logo-container{				/*Header na yellow*/
	        width: 19%;
	        height: 120px;
	        background-color: #edcd1f;
			z-index: 2;
			position: fixed;
		}
		img{							/*Logo ng svnhs*/
			width: 90px;
			height: 90px;
			margin-left: 10px;
		}
		.title-container{				/*Title sa yellow na container*/
			font-size: 15px;
			margin-top: -90px;
	        padding-top: 20px;
	        padding-left: 100px;
	        height: 100px;
	        width: 100%;
	        text-align: left;
	        background-color: transparent;
		}
		.green_header{						/*kulay green sa taas*/
			height: 120px;
			width: 100%;
			background-color: #1c8a43;
		  	position: fixed;
		  	z-index: 1;
		}
		ul{									/*chhoices sa taas*/
		  	list-style-type: none;
		  	position: fixed;
		  	height: 100px;
		  	padding-top: 50px;
		  	z-index: 1;
		  	margin-left: 600px;
			font-size: 27px;
		}
		li{									/*para nakaline yung mga choices*/
			display: inline-block;
		}
		li a{								/*yung itsura kapag hinover*/	
		  	color: white;
		  	text-align: center;
		  	padding: 10px 30px;
		}
		li a:hover:not(.active){			/*yung kulay kapag hinover*/
		  	background-color: #c0f20a;
		}
		.active{							/*yung kulay kapag active*/
			color: #b1cc50;
		  	background-color: #5b633b;
		}		/*css ng body*/

		#faculty_container_body{			/*Container ng faculty*/
			background-color: transparent;
	        height: 350px;
	        padding-top: 60px;
	        font-size: 20px;
	        text-align: center;
	        margin-left: 440px;
	        margin-right: 440px;
		}

		#faculty_data_body{					/*Data ng faculty*/
			background-color: yellow;
	        height: 900px;
	        padding-top: 60px;
	        padding-left: 400px;
	        font-size: 60px;
		}

		.footer{							/*footer mismo*/
			background-color: white;
			text-align: center;
			height: 60px;
			padding-top: 20px;
		}

	</style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title>School Board</title>
</head>

<body style="font-family: Arial;"> 

	<!-- header -->
	<div class="logo-container">
		<img src="../img/svnhs-logo.png">
		<div class="title-container">
			<b>Signal Village National High School<br>
			<font style="font-size: 25px;">SHS BOARD</font></b>
		</div>
	</div>
	<div class="green_header">
		<ul>
			<li><a href="about.php">About</a></li>
			<li><a href="generalannouncements.php">General Announcement</a></li>
			<li><a href="events.php">Events</a></li>
			<li><a href="enrolmentreport.php">Enrollment Reports</a></li>
			<li><a class="active" href="#faculty">Faculty</a></li>
			<li><a href="courses.php">Courses</a></li>
			<li><a href="login.php">Log In</a></li>
		</ul>
	</div>
	<br><br><br><br><br><br><br><br>


	<div id="faculty_container_body">
		<b style="font-size: 60px;">STAFF DIRECTORY</b>
		<hr>
		Water is an inorganic, transparent, tasteless, odorless, and nearly colorless chemical substance, which is the main constituent of Earth's hydrosphere and the fluids of all known living organisms. It is vital for all known forms of life, even though it provides neither food, energy, nor organic micronutrients.
	</div>
	<div id="faculty_data_body">
		
	</div

	<br><br><br><br>
	<div class="before_footer"></div>
	<footer class="footer">
		2022 - All rights reserved
	</footer>


</body>
</html>