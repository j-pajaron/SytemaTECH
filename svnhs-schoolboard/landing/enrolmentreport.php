<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		/*css ng header*/

		/*css ng header*/
	
	    .logo-container{				/*Header na yellow*/
	        width: 24%;
	        height: 150px;
	        background-color: #edcd1f;
			z-index: 2;
			position: fixed;
		}

		img{							/*Logo ng svnhs*/
			width: 110px;
			height: 110px;
			margin-left: 70px;
			margin-top: 10px;
		}

		.title-container{				/*Title sa yellow na container*/
			font-size: 15px;
			margin-top: -100px;
	        padding-top: 20px;
	        padding-left: 180px;
	        height: 100px;
	        width: 100%;
	        text-align: left;
	        background-color: transparent;
		}

		.green_header{						/*kulay green sa taas*/
			height: 155px;
			width: 100%;
			background-color: #1c8a43;
		  	position: fixed;
		  	z-index: 1;
		}

		ul{									/*chhoices sa taas*/
		  	list-style-type: none;
		  	position: fixed;
		  	height: 100px;
		  	padding-top: 90px;
		  	z-index: 1;
		  	margin-left:600px;
		}

		li{									/*para nakaline yung mga choices*/
			display: inline;
			margin-left:40px;
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
		}




		/*css ng body*/

		#enrolment_container_body{			/*Container ng enrolment*/
			background-color: transparent;
	        height: 300px;
	        padding-top: 60px;
	        padding-left: 400px;
	        font-size: 60px;
		}

		#enrolment_data_body{			/*Data ng enrolment*/
			background-color: #edcd1f;
	        height: 300px;
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
			<b>Signal Village National High School<br></b>
			<font style="font-size: 28px; font-weight: 800;">S&thinsp;H&thinsp;S &thinsp;B&thinsp;O&thinsp;A&thinsp;R&thinsp;D</font>
		</div>
	</div>
	<div class="green_header">
		<ul>
			<li><a href="about.php">About</a></li>
			<li><a href="generalannouncements.php">General Announcement</a></li>
			<li><a href="events.php">Events</a></li>
			<li><a class="active" href="#enrolmentreport">Enrollment Reports</a></li>
			<li><a href="faculty.php">Faculty</a></li>
			<li><a href="courses.php">Courses</a></li>
			<li><a href="login.php">Log In</a></li>
		</ul>
	</div>
	<br><br><br><br><br><br><br><br>


	<div id="enrolment_container_body">
		<b>Enrolment Report</b>
		<hr>
	</div>
	<div id="enrolment_data_body"><center>
		<div class="col-md-8" style="color: #315d8c;">
			<div class="col-sm-3">
				<b>2022</b><br>
				<h1>School Year	</h1>
			</div>
			<div class="col-sm-3">
				<b>500</b><br>
				<h1>Enrolled Student</h1>
			</div>
			<div class="col-sm-3">
				<b>10</b><br>
				<h1>Teachers</h1>
			</div>
			<div class="col-sm-3">
				<b>8</b><br>
				<h1>Courses</h1>
			</div></center>
		</div>
	</div>

	<br><br><br><br>
	<div class="before_footer"></div>
	<footer class="footer">
		2022 - All rights reserved
	</footer>


</body>
</html>