<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		body{							/*Full body background*/
			background-image: url('../img/svnhs.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
			font-family:  "Arial";
		}
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
		}
		/*css ng body*/
		#title_container_body{			/*Container ng SVNHS na title*/
	        background-color: transparent;
	        height: 960px;
		}
		.title_body{					/*yung kulay grey sa title*/
			background-color: black;
			opacity: 0.6;
			height: 960px;
			margin-left: 385px;
			margin-right: 400px;
			z-index: -5;
			position: relative;
		}
		.title_text{					/*yung text sa title*/
			padding-top: 330px;
			padding-left: 12px;
			padding-right: 12px;
			text-align: center;
			font-size: 40px;
			margin-top: -900px;
			margin-left: 430px;
			margin-right: 450px;
			color: white;
			font-style: "impact";
		}

	
		#about_container_body{			/*Container ng about*/
			background-color: white;
	        height: 950px;
		}
		.about_body{					/*yung laman ng about*/
			background-color: transparent;
			height: 800px;
			margin-left: 450px;
			margin-right: 900px;
			color: black;
			padding-top: 100px;
			padding-left: 50px;
			padding-right: 50px;
			font-size: 15px;
		}
		.about_picture{					/*picture sa gilid ng about*/
			background-color: #c9e890;
			height: 800px;
			margin-left: 1000px;
			margin-right: 0px;
			margin-top: -800px;
			padding-top: 200px;
			padding-left: 300px;
		}
		#principal_container_body{		/*Container ng principal's message*/
			background-color: transparent;
	        height: 850px;
		}
		.principal_picture{				/*picture sa gilid ng principal*/
			background-image: url('../img/principal-picture.jpg');
			background-repeat: no-repeat;
			background-size: 100% 100%;	
			height: 850px;
			margin-left: 200px;
			margin-right: 950px;
		}
		.principal_body{				/*yung laman ng principal*/
			background-color: yellow;
			color: black;
			height: 850px;
			margin-left: 950px;
			margin-right: 200px;
			margin-top: -850px;
			padding-top: 100px;
			padding-left: 50px;
			padding-right: 50px;
			font-size: 15px;
		}
		#additional_container_body{			/*Container ng addtional content*/
	        background-color: transparent;
	        height: 860px;
		}
		.additional_body{					/*yung kulay grey na additional content*/
			background-color: black;
			height: 860px;
			margin-left: 450px;
			margin-right: 450px;
			opacity: 0.6;
			z-index: -5;
			position: relative;
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
<body>
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
			<li><a class="active" href="#about">About</a></li>
			<li><a href="generalannouncements.php">General Announcement</a></li>
			<li><a href="events.php">Events</a></li>
			<li><a href="enrolmentreport.php">Enrollment Reports</a></li>
			<li><a href="faculty.php">Faculty</a></li>
			<li><a href="courses.php">Courses</a></li>
			<li><a href="login.php">Log In</a></li>
		</ul>
	</div>
	<!-- title -->
	<div id="title_container_body" >
		<div class="title_body"></div>
		<div class="title_text">
			<b>SIGNAL VILLAGE NATIONAL HIGH SCHOOL</b><br>
			<p><span style="font-family:Arial black; font-size: 80px;">SENIOR HIGH</font></p>
			<p><span style="font-family:Arial black; font-size: 80px;">SCHOOL BOARD</font></p>
			<img src="shs.png" style="width: 150px; height: 150px; margin-right: -520px; margin-top: -55%; ">
			<img src="svnhs-logo.png" style="width: 150px; height: 150px; margin-left: -645px; margin-top: -55%; ">
		
		</div>
	</div>
</div>
	<!-- about -->
	<div id="about_container_body">
		<div class="about_body">
			<font style="font-size: 60px;"><b>ABOUT</b></font>
			<br><hr><br>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br><br>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
		</div>
		<div class="about_picture">
			<img src="../img/about-book.png" style="width: 400px; height: 400px;">
		</div>
	</div>
	<!-- principal's message -->
	<div id="principal_container_body">
		<div class="principal_picture"></div>
		<div class="principal_body">
			<font style="font-size: 60px;"><b>PENGUINS	</b></font>
			<br><hr><br>
			Penguins are flightless seabirds that live almost exclusively below the equator. Some island-dwellers can be found in warmer climates, but most—including emperor, adélie, chinstrap, and gentoo penguins—reside in and around icy Antarctica. <br><br>
			On land, penguins have an upright stance and tend to waddle, hop, or run with their bodies angled forward. Polar penguins can travel long distances quickly by “tobogganing,” or sliding across the ice on their bellies and pushing forward with their feet. If it’s especially cold, they huddle together in large colonies that protect them from predators and provide warmth. These colonies consist of thousands, and even millions, of penguins. <br><br>
			Penguins eat krill, squids, and fishes. Their diet varies slightly on the species of penguins, which have slightly different food preferences. This reduces competition among species. The smaller penguin species of the Antarctic and the subantarctic primarily feed on krill and squids. Species found farther north tend to eat fishes. For example, in Antarctica, Adélie penguins feed primarily on small krill, while chinstraps forage for large krill. While the larger species, including Emperor and king penguins, mainly eat fishes and squids.
		</div>
	</div>
	<!-- Additional Content -->
	<div id="additional_container_body">
		<div class="additional_body">
			
		</div>
	</div>
</body>
</html>
