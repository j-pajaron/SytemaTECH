<!DOCTYPE html>
<html>
<head>

	<style type="text/css">

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

		/*css ng event*/

		#event_container_body{				/*Container ng event*/
	        background-color: transparent;
	        height: 600px;
	        padding-top: 200px;
		}

		.event_body{						/*yung body ng event*/
			background-color: white;
			color:  black;
			height: 530px;
			margin-left: 200px;
			margin-right: 200px;
		}

		.event_text{						/*yung text ng about*/
			background-color: transparent;
			height: 500px;
			margin-left: 10px;
			margin-right: 700px;
			color: black;
			padding-top:50px;
			padding-left: 50px;
			padding-right: 50px;
			font-size: 15px;
		}

		.event_picture{						/*yung picture ng about*/
			height: 500px;
			margin-top: -500px;
			margin-left: 800px;
			margin-right: 10px;
			padding-top:50px;
			padding-left: 50px;
			padding-right: 50px;
		}

		.before_footer{						/*space bago mag footer*/
			background-color: #07260f;
			height: 50px;
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

<body style="background-color: #07260f; font-family: Arial;">

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
			<li><a class="active" href="#events">Events</a></li>
			<li><a href="enrolmentreport.php">Enrollment Reports</a></li>
			<li><a href="faculty.php">Faculty</a></li>
			<li><a href="courses.php">Courses</a></li>
			<li><a href="login.php">Log In</a></li>
		</ul>
	</div>

	<!-- Event 1 -->
	<div id="event_container_body">
		<div class="event_body">
			<div class="event_text">
				<font style="font-size: 30px;"><b>Cats</b></font>
				<br><hr><br>
				The cat (Felis catus) is a domestic species of small carnivorous mammal. It is the only domesticated species in the family Felidae and is often referred to as the domestic cat to distinguish it from the wild members of the family. A cat can either be a house cat, a farm cat or a feral cat; the latter ranges freely and avoids human contact. Domestic cats are valued by humans for companionship and their ability to kill rodents. About 60 cat breeds are recognized by various cat registries.<br><br>
				The cat is similar in anatomy to the other felid species: it has a strong flexible body, quick reflexes, sharp teeth and retractable claws adapted to killing small prey. Its night vision and sense of smell are well developed. Cat communication includes vocalizations like meowing, purring, trilling, hissing, growling and grunting as well as cat-specific body language.
			</div>
			<div class="event_picture">
				<img src="../img/event1.jpg" style="width: 400px; height: 400px;">
			</div>
		</div>
	</div>
	<div id="event_container_body">
		<div class="event_body">
			<div class="event_text">
				<font style="font-size: 30px;"><b>Dogs</b></font>
				<br><hr><br>
				Today, many of the dogs you know and love are the product of selective breeding between individuals with desirable traits, either physical or behavioral. For instance, around 9,500 years ago, ancient peoples began breeding dogs that were best able to survive and work in the cold. These dogs would become the family of sled dogs—including breeds such as huskies and malamutes—that remains relatively unchanged today.<br><br>
				Similarly, humans bred German shepherds for their ability to herd livestock, Labrador retrievers to help collect ducks and other game felled by hunters, and sausage-shaped Dachshunds for their ability to rush down a burrow after a badger. Many more breeds were created to fill other human needs, such as home protection and vermin control.
			</div>
			<div class="event_picture">
				<img src="../img/event2.jpg" style="width: 400px; height: 400px;">
			</div>
		</div>
	</div>
	<br><br><br><br>
	<div class="before_footer"></div>
	<footer class="footer">
		2022 - All rights reserved
	</footer>


</body>
</html>