<?php
    session_start();                /*para masave yung information hanngang isara yung browser*/

    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){                           /*kapag nakalogin na sila*/
        if(isset($_SESSION["user"]) && $_SESSION['user'] === true){                                /*at user yung nakalogin*/
            header("location: ../student/generalannouncements.php");                                        /*mapupunta dito si user*/    
            exit();
        }
    }

    else if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){         /*kapag naman nakalogin sila*/
       if(isset($_SESSION["faculty"]) && $_SESSION['faculty'] === true){                      /*at faculty sila, dederetso sila dito*/
            header("location: ../faculty/generalannouncements.php");
            exit();
        }
    }

    else if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){            /*kapag admin naman nakalogin*/
        header("location: generalannouncements.php");                                      /*hindi na siya pwedeng pumunta sa login page*/
    }

	require_once("../config.php")	/*required na kasama db sa execution ng file*/
									/*hindi include dahil required nga. At once lanf para walng error*/
?>

<?php
	$username = "";			/*variables*/
    $password = "";

    $username_err = "";		/*kapag may error sa variables*/
    $password_err = "";
    $login_err = "";


    /*dito mapupunta yung input ng user gamit ng POST*/
    if($_SERVER["REQUEST_METHOD"] == "POST"){			/*ito yung tamang paraan daw para magcheck ng form*/
        if(empty(trim($_POST["username"]))){		/*if walang laman yung email address*/
            $username_err = "Please enter an email address.";	/*gagawin niya ito*/
        }
        else{											/*kapag meron laman yung email address, ilalagay niya sa variable na $username yung laman ng 'usernames'*/
            $username = trim($_POST['username']);
        }
        if(empty(trim($_POST["password"]))){			/*katulad land din ng proseso sa email address yung password*/
            $password_err = "Please enter a password.";
        }
        else{
            $password = trim($_POST['password']);
        }

        if(empty($username_err) && empty($password_err)){					/*if empty yung error*/
            $sql = "SELECT id, first_name, middle_name, last_name, username, password FROM admins WHERE username = ?";	
            																								/*kukunin niya yung data sa db na may kaparehong username*/
            if($stmt = mysqli_prepare($link, $sql)){							/*kapag may laman, ipreprepare niya yung laman sql query tulad ng select para sa operation*/
                mysqli_stmt_bind_param($stmt, "s", $param_username,);			/*kailangan ito para magexecute, binabind niya variables to parameter markers (hindi ko po ito alam)*/
                $param_username = $username;									/*eto yun*/
                if(mysqli_stmt_execute($stmt)){									/*if may laman yung $stmt = ieexecute niya yon (SELECT)*/					
                    mysqli_stmt_store_result($stmt);							/*iniistore niya dito yung results*/
                    if(mysqli_stmt_num_rows($stmt) == 1){						/*irereturn niya yung number of rows sa select at kapag equals sa isa*/
                        mysqli_stmt_bind_result($stmt, $id, $first_name, $middle_name, $last_name, $username, $hashed_password);		/*ilalagay niya yung result sa variables*/
                        if(mysqli_stmt_fetch($stmt)){								/*siyempre kailangan kunin, kaya fetch*/
                                if(password_verify($password, $hashed_password)){	/*if true yung password == hashed password*/
                                    $_SESSION['logged_in'] = true;					/*gagawin niya to*/
                                    $_SESSION['admin'] = true;						/*session pwedeng magamit hanggang mag log out*/
                                    $_SESSION['id'] = $id;
                                    $_SESSION['first_name'] = $first_name;
                                    $_SEESION['middle_name'] = $middle_name;
                                    $_SESSION['last_name'] = $last_name;
                                    $_SESSION['username'] = $username;
                                    
                                    header("location: generalannouncements.php");				/*pupunta siya dito pagkatapos*/
                                }
                                else{								
                                    $login_err = "Invalid email address or password1";		/*kung hindi tama yung password, eto yung lalabas*/
                                }
                        }
                    }
                    else{																/*kapag wala sa tables yung hinahanap niya*/					
                        $login_err = "No account has been found. Try again";
                    } 
                }
                else{																	/*may error*/
                    echo "Oops! Something went wrong.";
                }
                mysqli_stmt_close($stmt);							/*isasarado niya na yung prepared statement*/
            }
        }
        mysqli_close($link);										/*isasarado niya rin yung koneksyon sa db*/
    }
?>


<!doctype html>
<html lang="en">
<head>
	<style>

     	body{
        	background-image: url('img/svnhs.jpg');
        	background-repeat: no-repeat;
        	background-attachment: fixed;
        	background-size: cover;
      	}

        .logo-container{                /*Header na yellow*/
            width: 24%;
            height: 150px;
            background-color: #edcd1f;
            z-index: 2;
            position: fixed;
        }

        img{                            /*Logo ng svnhs*/
            width: 110px;
            height: 110px;
            margin-left: 70px;
            margin-top: 10px;
        }

        .title-container{               /*Title sa yellow na container*/
            font-size: 15px;
            margin-top: -100px;
            padding-top: 20px;
            padding-left: 180px;
            height: 100px;
            width: 100%;
            text-align: left;
            background-color: transparent;
        }

        .green_header{                      /*kulay green sa taas*/
            height: 155px;
            width: 100%;
            background-color: #1c8a43;
            position: fixed;
            z-index: 1;
        }

        ul{                                 /*chhoices sa taas*/
            list-style-type: none;
            position: fixed;
            height: 100px;
            padding-top: 90px;
            z-index: 1;
            margin-left:600px;
        }

        li{                                 /*para nakaline yung mga choices*/
            display: inline;
            margin-left:40px;
        }

        li a{                               /*yung itsura kapag hinover*/   
            color: white;
            text-align: center;
            padding: 10px 30px;
        }

        li a:hover:not(.active){            /*yung kulay kapag hinover*/
            background-color: #c0f20a;
        }

        .active{                            /*yung kulay kapag active*/
            color: #b1cc50;
            background-color: #5b633b;
        }




        /*css ng body*/

        .container {						/*yung box*/
            margin-top: 200px;
        }
        
        .box {								/*yung kulay grey*/
        	background-color: grey;
            border-radius: 35px;
            padding-right: 90px;  
            padding-left: 50px;    
            padding-top: 30px;
        }

        input[type=submit]{				/*login button*/		
          background-color: green;
          color: white;
          padding: 10px 32px;
          width: 250px;
          margin: 4px 2px;
          cursor: pointer;
        }


	</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="./fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>School Board</title>
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
	          	<li><a href="../landing/about.php">About</a></li>
	          	<li><a href="../generalannouncements.php">General Announcement</a></li>
	          	<li><a href="../landing/events.php">Events</a></li>
	          	<li><a href="../landing/enrolmentreport.php">Enrollment Reports</a></li>
	          	<li><a href="../landing/faculty.php">Faculty</a></li>
          		<li><a href="../landing/courses.php">Courses</a></li>
          		<li><a class="active" href="#login">Log In</a></li>
        	</ul>
      	</div>
      	<br><br><br><br>

		<div class="container box">

		    	<?php
                	if(!empty($login_err)){			/*kapag merong laman yung error*/ /*sa taas ng container box lalabas yung error*/
                    	echo '<div class="alert alert-danger">'.$login_err.'</div>';	/*gagawin niya to*/
                	}
            	?>
            							<!--special chars - para hindi mahack hehe, kinokonvert niya yung special chars into html entites tulad ng &gt  --> 
            							<!--$_SERVER['PHP_SELF']) - para yung data isusumite sa mismong page, at mageeror din sa mismong page rin.  -->
            	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                	<b><center>ADMIN LOGIN</center></b>
                    <div class="form-group">
                    	<br>																		<!-- for validation -->
                    	<input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid': '' ?>" value="<?= $username ?>" placeholder="Email Address">
                    	<span class="invalid-feedback"><?=$username_err?></span>	<!-- if walang laman lalabas ito -->
                	</div>
                	<div class="form-group">
                    	<br>															<!-- for validation -->
                    	<input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid': '' ?>" value="<?= $password ?>" placeholder="Password">
                    	<span class="invalid-feedback"><?=$password_err?></span>	<!-- if walang laman lalabas ito -->
                	</div>
                	<br>
                	<font face = "Bedrock" size = "3" ><input type="submit" class="btn btn-primary" value="Login"></font>
            	</form>
                <center>Forgot Password?</center>
                <br><hr><br>
		    
		</div>

    </body>

  </body>
</html>