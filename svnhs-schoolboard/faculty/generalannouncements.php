<?php
	session_start();			/*para masave yung information hanngang isara yung browser*/

	if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true){		/*kapag hindi ka nakalogin, labas*/
    	header("location: ../landing/generalannouncements.php");
    	exit();
	}

	if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){                           /*kapag nakalogin na sila*/
        if(!isset($_SESSION["faculty"]) && $_SESSION['faculty'] !== true){                               /*pero hindi sila faculty, labas pa rin*/
            header("location: ../landing/generalannouncements.php");                                    
            exit();
        }
    }

    require_once('../config.php');
?>

<?php

	 /*start - for creating announcement*/

        $whatErr = "";
        $whenErr = "";
        $whereErr = "";
        $contentErr = "";
        $incomplete_data = "";
        
        $what = "";
        $when = "";
        $where = "";
        $content = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){

        	function clean_data($data){
        		$data = trim($data);					/*   abc     */
        		$data = stripslashes($data);			/* abc/def/gfh/ */
        		$data = htmlspecialchars($data);		/*<br><div>*/
        		return $data;
        	}


        	if(empty($_POST['what'])){
        		$whatErr = "*Subject is required.";
        	}
        	else{
        		$what = clean_data($_POST['what']);
        	}

        	if(empty($_POST['when'])){
        		$whenErr = "*Date is required.";
        	}
        	else{
        		$when = clean_data($_POST['when']);
        	}

        	if(empty($_POST['where'])){
        		$whereErr = "*Place is required.";
        	}
        	else{
        		$where = clean_data($_POST['where']);
        	}

        	if(empty($_POST['content'])){
        		$contentErr = "*Description is required.";
        	}
        	else{
        		$content = clean_data($_POST['content']);
        	}


        	if(empty($what) || empty($when) || empty($where) || empty($content)){
        		$incomplete_data = "Please input required data";
        	}
        	else{
        		$sql = "INSERT INTO announcements (what, location, content) VALUES ('$what', '$where', '$content')";
        		if(mysqli_query($link,$sql)){			/*nageexecute ng query*/
        			echo "<script type=\"text/javascript\">
                        alert(\"Your Announcement is waiting for approval.\");
                        window.location = \"generalannouncements.php\"
                    </script>";
        		}
        		else{
        			echo "Error: ".$sql. " ".mysqli_error($conn);
        		}
        	}

        }

        /*end - for creating annoucement*/

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
		  	margin-left:1200px;
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
			font-size: 15px;
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

		.additional_white{					/*yung white sa create announcement*/
			background-color: white;
			height: 600px;
			margin-top: 200px;
			margin-left: 480px;
			margin-right: 480px;
			position: relative;
		}

		.additional_text{					/*yung text sa addtional-body*/
			padding-top: 60px;
			padding-left: 16px;
			padding-right: 16px;
			font-size: 15px;
			margin-top: -900px;
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
			<li><a class="active" href="#generalannouncements">General Announcement</a></li>
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
	<!-- announcements -->
	<div id="announcement_container_body">
		<div class="announcement_body"></div>
		<div class="announcement_text">
			<h1><b>Approved Announcements</b></h1><br>
			<br><br><br>
			<?php $qry = "SELECT * FROM announcements WHERE deleted IS NULL AND approval = 2"; ?>
			<?php if($result = mysqli_query($link, $qry)): ?>
			<?php if(mysqli_num_rows($result) > 0): ?> 

			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">What</th>
						<th scope="col">When</th>
						<th scope="col">Where</th>
						<th scope="col">Content</th>
						<th scope="col">Posted:</th>
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
								$rows["what"]
							?>
						</td>
						<td>
							<?=
								$rows["when_date"]
							?>
								at
							<?=
								$rows["when_time"]
							?>
						</td>
						<td>
							<?=
								$rows["location"]
							?>
						</td>
						<td>
							<?=
								$rows["content"]
							?>
						</td>
						<td>
							<?=
								$rows["time_posted"]
							?>
							at
							<?=
								$rows["date_posted"]
							?>
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

	</div>

	<!-- white na container sa gitna -->
	<div id="white_container_body"></div>

	<!-- Create Announcement -->
	<div id="additional_container_body">
		<div class="additional_body"></div>
		<div class="additional_white">
			<div class="additional_text">
				<center><h1><b>Create Announcements</b></h1><br></center>
				<div>
					<p><span class = "error">* required field</span></p>
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
						<table>
							<tr>
								<td><span class="error">*</span>WHAT:</td>
								<td>
									<input type="text" name="what"><br/><span class="error"><?php echo $whatErr;?></span><br/>
								</td>
							</tr>
							<tr>
								<td><span class="error">*</span>WHEN:</td>
								<td>
									<input type="text" name="when"><br/><span class="error"><?php echo $whenErr;?></span><br/>
								</td>
							</tr>
							<tr>
								<td><span class="error">*</span>WHERE:</td>
									<td><input type="text" name="where"><br/><span class="error"><?php echo $whereErr;?></span><br/>
								</td>
							</tr>
							<tr>
								<td><span class="error">*</span>DESCRIPTION:</td>
									<td><textarea name="content" rows="5" cols="40"></textarea><br/><span class="error"><?php echo $contentErr;?></span><br/>
								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" name="submit" value="submit"><br/><span class="error"><?php echo $incomplete_data;?></span><br/>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="before_footer"></div>
	<footer class="footer">
		2022 - All rights reserved
	</footer>

</body>
</html>