<?php
	session_start();			/*para masave yung information hanngang isara yung browser*/

	if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true){		/*kapag hindi ka nakalogin, labas*/
    	header("location: ../landing/generalannouncements.php");
    	exit();
	}

	if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){                           /*kapag nakalogin na sila*/
        if(!isset($_SESSION["faculty"]) && $_SESSION['faculty'] !== true){                               /*pero hindi sila student, labas pa rin*/
            header("location: ../landing/generalannouncements.php");                                    
            exit();
        }
    }

    require_once('../config.php');
?>
<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		/*css ng header*/

	
	    .logo-container{				/*Header na yellow*/
	        width: 19%;
	        height: 100px;
	        background-color: yellow;
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
			height: 100px;
			width: 100%;
			background-color: green;
		  	position: fixed;
		  	z-index: 1;
		}

		ul{									/*chhoices sa taas*/
		  	list-style-type: none;
		  	position: fixed;
		  	height: 100px;
		  	padding-top: 50px;
		  	z-index: 1;
		  	margin-left: 1200px;
		}

		li{									/*para nakaline yung mga choices*/
			display: inline;
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

		#grades_container_body{			/*Container ng grades*/
			background-color: transparent;
	        height: 300px;
	        padding-top: 60px;
	        padding-left: 400px;
	        font-size: 60px;
		}

		#grades_data_body{			/*Data ng grades*/
			background-color: yellow;
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

		/*Dropdown*/

		.dropbtn {
		  background-color: transparent	;
		  color: white;
		  padding: 16px;
		  font-size: 14px;
		  border: none;
		  cursor: pointer;
		}

		.dropdown {
		  position: relative;
		  display: inline-block;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  right: 0;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		}

		.dropdown:hover .dropdown-content {display: block;}
		/*end of dropdown*/


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
			<li><a href="generalannouncements.php">General Announcement</a></li>
			<li>
				<div class="dropdown">
				  <a href="grades.php"><button class="dropbtn">Grades</button></a>
				  <div class="dropdown-content" style="position: center;">
				    <a href="#">School Year</a>
				    <a href="#">Strand</a>
				    <a href="#">Subject</a>
				  </div>
				</div>
			</li>
			<li><a href="documentrequest.php">Document Request</a></li>
			<li><a href="profile.php">Profile</a></li>	
		</ul>
	</div>
	<br><br><br><br><br><br><br><br>


	<div id="grades_container_body">
		<b>Grade Report</b>
		<hr>
	</div>
	<div id="grades_data_body">
		
	</div>

	<br><br><br><br>
	<div class="before_footer"></div>
	<footer class="footer">
		2022 - All rights reserved
	</footer>


</body>
</html>