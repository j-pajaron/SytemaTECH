<?php
	session_start();																			/*para masave yung information hanngang isara yung browser*/

	if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true){		/*kapag hindi ka nakalogin, labas*/
    	header("location: ../landing/generalannouncements.php");
    	exit();
	}

	if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){                           /*kapag nakalogin na sila*/
        if(!isset($_SESSION["admin"]) && $_SESSION['admin'] !== true){                               /*pero hindi sila admin, labas pa rin*/
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
		  	margin-left:900px;
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

		#announcement_container_body{			/*Container ng announcements*/
	        background-color: transparent;
	        height: 960px;
		}

		.announcement_body{					/*yung kulay grey sa announcements*/
			background-color: black;
			opacity: 0.6;
			height: 960px;
			margin-left: 450px;
			margin-right: 450px;
			z-index: -5;
			position: relative;
		}

		.announcement_text{					/*yung text sa announcemets*/
			padding-top: 100px;
			padding-left: 12px;
			padding-right: 12px;
			text-align: center;
			font-size: 60px;
			margin-top: -900px;
			margin-left: 450px;
			margin-right: 450px;
			color: white;
		}

		#white_container_body{				/*Container na white*/
			background-color: white;
	        height: 850px;
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
			<li><a href = "generalannouncements.php";>General Announcement</a></li>
			<li><a href="grades.php">Grades</a></li>
			<li><a href="documentrequest.php">Document Request</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a class="active" href="#add-subjects">Add Subjects</a></li>
			<li><a href="register-users.php">Register Users</a></li>
		</ul>
	</div>
	<!-- announcements -->
	<div id="announcement_container_body" >
		<div class="announcement_body"></div>
		<div class="announcement_text">
			<b>Add subject</b><br>

			<div class = "col-md-12">
				<form method="post" action = "file-upload-subjects.php" enctype="multipart/form-data">
					<div class ="form-group row">
						<label class = "col-md-12"><font style="font-size: 20px;">Select File</font></label>
						<div class="col-md-8"></div>
						<input type="file" name = "uploadfile" class="form-control">
						</div>
						</div>

						<div class ="form-group row">
							<div class="col-md-4">
								<input type="submit" name = "submit" class = "btn btn-primary">
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>

	<!-- white na container sa gitna -->
	<div id="white_container_body">
		Grades
		<?php $qry = "SELECT * FROM subjects WHERE deleted IS NULL"; ?>
		<?php if($result = mysqli_query($link, $qry)): ?>
		<?php if(mysqli_num_rows($result) > 0): ?> 

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Subject</th>
					<th scope="col">Description</th>
					<th scope="col">Time</th>
					<th scope="col">Options</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i=0;
					$j=1;
					while($rows = mysqli_fetch_array($result)):
				?>
				<tr>
					<?php 
						$i++;
					?>
					<td classs="text-center">
						<?php
							echo $j++;
						?>
					</td>
					<td>
						<?=
							$rows["name"]
						?>
					</td>
					<td>
						<?=
							$rows["description"]
						?>
					</td>
					<td>
						<?=
							$rows["start_time"]
						?>
						-
						<?=
							$rows["end_time"]
						?>
					</td>
					<td>
						<div class="dropdown-menu">
							<a class="dropdown-item" href=""></a>
							<a class="dropdown-item" href=""></a>
						</div>
					</td>
				</tr>
			<?php 
				endwhile; 
			?>
			</tbody>
		</table>
		<?php
			else:
		?>
			<br><br>
			<div class="alert alert-danger"><em>No records found.</em></div>
		<?php
			endif;
		?>
		<?php
			else:
		?>
			<br><br>
			<div class="alert alert-danger"><em>Something went wrong. Query related error.</em></div>
		<?php
			endif;
		?>
	</div>

	<!-- Additional Content -->
	<div id="additional_container_body">
		<div class="additional_body">
			
		</div>
	</div>



</body>
</html>