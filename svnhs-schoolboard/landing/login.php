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

     
      .green_header{            /*kulay green sa taas*/
        height: 120px;
        width: 100%;
        padding-top: 30px;
        background-color: #1c8a43;
        position: fixed;
        z-index: 1;
      }

      .logo-green_header {
         width: 19%;
         height: 120px;
         z-index: 2;
         position: fixed;
         top: 3px;
         left: 600px;
      }

       /*css ng body*/

      .background1{
        height: 700px;
        width: 1200px;
        border-radius: 10px;
        position: fixed;
        top: 20%;
        left: 20%;
        background-color: #f3dc60;
      }

      .box {               /*yung kulay grey*/
          background-color: none;
            border-radius: 50px;
            padding-right: 90px;  
            padding-left: 600px;    
            padding-top: 220px;
        }
       
       input[type=submit]{       /*login button*/    
          background-color: green;
          color: white;
          padding: 15px 37px;
          width: 500px;
          margin: 5px 10px;
          cursor: pointer;
        }

      .container1 {
        position: fixed;
        top: 20%;
        left: 20%;
        padding-top: 40px;
        border-radius: 5px;
      }


      .background2{
        height: 700px;
        width: 500px;
        border-radius: 10px;
        position: fixed;
        top: 20%;
        left: 20%;
        background-color: #edcd1f;
      }

      .logo-background2{        /*Header na yellow*/
          width: 19%;
          height: 120px;
         position: fixed;
    }
    img{              /*Logo ng svnhs*/
      width: 250px;
      height: 250px;
      margin-left: 125px;
      margin-top: 150px;
    }
    .title-background2{       /*Title sa yellow na container*/
      font-size: 50px;
      margin-top: 10px;
          padding-left: 100px;
          height: 100px;
          width: 100%;
          text-align: left;
         
    }

      .container2 {
        position: fixed;
        top: 20%;
        left: 20%;
        padding-top: 40px;
	border-radius: 50px 20px;
	
      }
	#rcorners-container2 {
        border-radius: 25px;
      }

.circle {
  border-radius: 50%;
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

    <title>School Board</title>
    <body>

      <!-- header -->
      <div class="green_header">
        <ul>
         <center><font face = "arial black"><h2>SIGNAL VILLAGE NATIONAL HIGH SCHOOL</center></h2>
        <img src="svnhs-logo.png" style="width: 120px; height: 120px; margin-left: 520px; margin-top: -4%; padding-top: -70%; ">
    
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
                    <b><center><h3>SIGN IN TO YOUR ACCOUNT</h3></center></b>
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
                <p>Forgot Password? &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &emsp; &emsp;Help</p>
        
    </div>


      <div class="container1"></div>

      <div class="container2"></div>

       
        <div class="background2">

        <div class="logo-background2">
       <img src="shs.png">
       <center><p><font style="font-size: 45px; margin-left: 25%">SENIOR &nbsp;&nbsp;HIGH</font></p></center>
       <center><p><font style="font-size: 45px;  margin-left: 20%">SCHOOL&nbsp;&nbsp; BOARD</p></center>
         </div>
  </div>

  </div>

    </body>

  </body>
</html>