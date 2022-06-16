<?php
    session_start();                                                                      /*para masave yung information hanngang isara yung browser*/

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

    else if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){         /*kapag naman nakalogin sila*/
       if(isset($_SESSION["admin"]) && $_SESSION['admin'] === true){                      /*at faculty sila, dederetso sila dito*/
            header("location: ../admin/generalannouncements.php");
            exit();
        }
    }

  require_once("../config.php") /*required na kasama db sa execution ng file*/
                  /*hindi include dahil required nga. At once lanf para walng error*/
?>


<?php
    $username = "";     /*variables*/
    $password = "";

    $username_err = "";   /*kapag may error sa variables*/
    $password_err = "";
    $login_err = "";


    /*dito mapupunta yung input ng user gamit ng POST*/
    if($_SERVER["REQUEST_METHOD"] == "POST"){     /*ito yung tamang paraan daw para magcheck ng form*/
        if(empty(trim($_POST["username"]))){    /*if walang laman yung email address*/
            $username_err = "Please enter your username."; /*gagawin niya ito*/
        }
        else{                     /*kapag meron laman yung email address, ilalagay niya sa variable na $username yung laman ng 'usernames'*/
            $username = trim($_POST['username']);
        }
        if(empty(trim($_POST["password"]))){      /*katulad land din ng proseso sa email address yung password*/
            $password_err = "Please enter a password.";
        }
        else{
            $password = trim($_POST['password']);
        }

        if(empty($username_err) && empty($password_err)){         /*if empty yung error*/
            $sql = "SELECT id, first_name, middle_name, last_name, username, password, gender, user_type FROM users WHERE username = ?";  
                                                            /*kukunin niya yung data sa db na may kaparehong username*/
            if($stmt = mysqli_prepare($link, $sql)){              /*kapag may laman, ipreprepare niya yung laman sql query tulad ng select para sa operation*/
                mysqli_stmt_bind_param($stmt, "s", $param_username,);     /*kailangan ito para magexecute, binabind niya variables to parameter markers (hindi ko po ito alam)*/
                $param_username = $username;                  /*eto yun*/
                if(mysqli_stmt_execute($stmt)){                 /*if may laman yung $stmt = ieexecute niya yon (SELECT)*/         
                    mysqli_stmt_store_result($stmt);              /*iniistore niya dito yung results*/
                    if(mysqli_stmt_num_rows($stmt) == 1){           /*irereturn niya yung number of rows sa select at kapag equals sa isa*/
                        mysqli_stmt_bind_result($stmt, $id, $first_name, $middle_name, $last_name, $username, $hashed_password, $gender, $user_type);   /*ilalagay niya yung result sa variables*/
                        if(mysqli_stmt_fetch($stmt)){               /*siyempre kailangan kunin, kaya fetch*/
                                if (password_verify($password, $hashed_password)){  /*if true yung password == hashed password*/
                                    $_SESSION['logged_in'] = true;          /*gagawin niya to*/  /*session pwedeng magamit hanggang mag log out*/
                                    if($user_type == 2){
                                        $_SESSION['faculty'] = true;
                                         header("location: ../faculty/generalannouncements.php");       /*pupunta siya dito pagkatapos*/
                                    }
                                    else if($user_type == 1){
                                        $_SESSION['user'] = true;
                                        header("location: ../student/generalannouncements.php");       /*pupunta siya dito pagkatapos*/
                                    }
                                    else if($user_type == 3){
                                        $_SESSION['admin'] = true;
                                        header("location: ../admin/generalannouncements.php");       /*pupunta siya dito pagkatapos*/
                                    }
                                    $_SESSION['id'] = $id;
                                    $_SESSION['first_name'] = $first_name;
                                    $_SEESION['middle_name'] = $middle_name;
                                    $_SESSION['last_name'] = $last_name;
                                    $_SESSION['username'] = $username;
                                    $_SESSION['gender'] = $gender;
                                    $_SESSION['address'] = $address;
                                    
                                }
                                else{               
                                    $login_err = "Invalid username or password. Try again.";    /*kung hindi tama yung password, eto yung lalabas*/
                                }
                        }
                    }
                    else{                               /*kapag wala sa tables yung hinahanap niya*/          
                        $login_err = "No account has been found. Try again";
                    } 
                }
                else{                                 /*may error*/
                    echo "Oops! Something went wrong.";
                }
                mysqli_stmt_close($stmt);             /*isasarado niya na yung prepared statement*/
            }
        }
        mysqli_close($link);                    /*isasarado niya rin yung koneksyon sa db*/
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <style>
     
      body {
        background-image: url('../img/svnhs.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
       

       .text{
          margin-left:120px;
          padding-top: 50px;
	     }
     
     
       /*css ng body*/

      .background1{
        height:580px;
        width: 900px;
        border-radius: 10px;
        position: fixed;
        top: 25%;
        left: 27%;
        background-color: #f3dc60;
      }

      .box {               /*yung kulay grey*/
          background-color: none;
            border-radius: 50px;
            padding-right: 20px;  
            padding-left: 575px;    
            padding-top: 80px;
        }
       
       input[type=submit]{       /*login button*/   
          font-family:arial;
          background-color: #1c8a43;
          color: white;
          padding: 10px 30px;
          width: 300px;
          margin: 3px 2px;
          cursor: pointer;
          border-radius: 50px;
          font-size: 24px; 
          font-weight: 800;
        }

      .container1 {
        position: fixed;
        margin-top: 20px;
        margin-left: 50px;
        padding-top: 30px;
        border-radius: 5px;
	
      }


      .background2{
        height: 580px;
        width: 550px;
        border-radius: 10px;
        position: fixed;
        top: 25%;
        left: 27%;
        background-color: #edcd1f;
      }

      .logo-background2{        /*Header na yellow*/
          width: 19%;
          height: 120px;
          position: fixed;
      } 

      img{              
        width: 200px;
        height: 200px;
        margin-left: 43%;
        margin-top: 90px;
      }


      .title-background2 {
        font-size: 40px;
        height: 6em;
        position: absolute;
        padding-left: 60px;
        top: 360%;
        left: 63%;
        margin-right: -100%;
        transform: translate(-50%, -50%)
      }  
         
      .container2 {
        position: fixed;
        margin-top: 20px;
        margin-left: 50px;
        padding-top: 30px; 
      }

      input[type=text], input[type=password]{
        border-radius: 10px;
        padding-top: 26px;
        padding-bottom: 26px;
        border: solid 2px;
      }
	

    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>School Board</title>
    <body>

      <!-- header -->
      <div class="text">
        <ul>
         <span style ="color:white; font-family:arial black;"><h5>SIGNAL VILLAGE NATIONAL HIGH SCHOOL</h5>
          <img src="svnhs-logo.png" style="width: 90px; height: 90px; margin-left:-90px; margin-top:-3%; padding-top: -70%; ">
       
       </ul>
    </div>


      
      <div class="background1 box">

          <?php
                  if(!empty($login_err)){     /*kapag merong laman yung error*/ /*sa taas ng container box lalabas yung error*/
                      echo '<div class="alert alert-danger">'.$login_err.'</div>';  /*gagawin niya to*/
                  }
              ?>
                          <!--special chars - para hindi mahack hehe, kinokonvert niya yung special chars into html entites tulad ng &gt  --> 
                          <!--$_SERVER['PHP_SELF']) - para yung data isusumite sa mismong page, at mageeror din sa mismong page rin.  -->
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <b><center><h4><span style="font-family: arial black;">SIGN IN TO YOUR ACCOUNT</h4></center></b>
                  <div class="form-group">
                      <br>                                    <!-- for validation -->
                      <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid': '' ?>" value="<?= $username ?>" placeholder="Username">
                      <span class="invalid-feedback"><?=$username_err?></span>  <!-- if walang laman lalabas ito -->
                    </center>
                  </div>
                  <div class="form-group">
                      <br>                              <!-- for validation -->
                      <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid': '' ?>" value="<?= $password ?>" placeholder="Password">
                      <span class="invalid-feedback"><?=$password_err?></span>  <!-- if walang laman lalabas ito -->
                  </div>
                  <br>
                  <center><font face = "Bedrock" size = "3" ><input type="submit" class="btn btn-primary" value="LOGIN"></center></font>
              </form><br>
                <b><p>Forgot Password? &emsp; &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp;Help</p></b>
        
    </div>


      <div class="container1"></div>

      <div class="container2"></div>

       
        <div class="background2">

        <div class="logo-background2">
        <img src="shs.png">

	<div class="title-background2">
    <center> 
      <font style="font-family: arial black; ">SENIOR HIGH<br>
      <font style="font-family: arial black; margin-right:-500;">SCHOOL BOARD</font>
    </center>
	  
	 </div> </div>
  </div>

  </div>

    </body>
  </body>
</html>