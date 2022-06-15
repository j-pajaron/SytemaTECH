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
          background-color: green;
          color: white;
          padding: 10px 30px;
          width: 300px;
          margin: 3px 2px;
          cursor: pointer;
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
    height: 10em;
    position: relative 
    margin-top: 10%;
    position: absolute;
    top: 420%;
    left: 70%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }  
       
   

      .container2 {
       position: fixed;
        margin-top: 20px;
        margin-left: 50px;
        padding-top: 30px;
        
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
                      <input type="text" name="$username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid': '' ?>" value="<?= $username ?>" placeholder="Email Address">
                      <span class="invalid-feedback"><?=$username_err?></span>  <!-- if walang laman lalabas ito -->
                    </center>
                  </div>
                  <div class="form-group">
                      <br>                              <!-- for validation -->
                      <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid': '' ?>" value="<?= $password ?>" placeholder="Password">
                      <span class="invalid-feedback"><?=$password_err?></span>  <!-- if walang laman lalabas ito -->
                  </div>
                  <br>
                  <center><font face = "Bedrock" size = "3" ><input type="submit" class="btn btn-primary" value="Login"></center></font>
              </form>
                <p>Forgot Password? &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp;Help</p>
        
    </div>


      <div class="container1"></div>

      <div class="container2"></div>

       
        <div class="background2">

        <div class="logo-background2">
        <img src="shs.png">

	<div class="title-background2">
        <font style="font-family: arial black; ">SENIOR HIGH<br>
<font style="font-family: arial black; margin-right:-500;">SCHOOL BOARD</font>
	  
	 </div> </div>
  </div>

  </div>

    </body>
  </body>
</html>