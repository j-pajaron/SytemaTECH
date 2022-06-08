<!doctype html>
<html lang="en">
  <head>
    <style>

      body {
        background-image: url('img/svnhs.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }

      .logo-container{        /*Header na yellow*/
        width: 19%;
        height: 100px;
        background-color: yellow;
        z-index: 2;
        position: fixed;
      }

      img{              /*Logo ng svnhs*/
        width: 90px;
        height: 90px;
        margin-left: 10px;
      }

      .title-container{       /*Title sa yellow na container*/
        font-size: 15px;
        margin-top: -90px;
        padding-top: 20px;
        padding-left: 100px;
        height: 100px;
        width: 100%;
        text-align: left;
        background-color: transparent;
      }

      .green_header{            /*kulay green sa taas*/
        height: 100px;
        width: 100%;
        background-color: green;
        position: fixed;
        z-index: 1;
      }

      ul{                 /*chhoices sa taas*/
        list-style-type: none;
        position: fixed;
        height: 100px;
        padding-top: 50px;
        z-index: 1;
        margin-left: 900px;
      }

      li{                 /*para nakaline yung mga choices*/
        display: inline;
      }

      li a{               /*yung itsura kapag hinover*/ 
        color: white;
        text-align: center;
        padding: 10px 30px;
      }

      li a:hover:not(.active){      /*yung kulay kapag hinover*/
        background-color: #c0f20a;
      }

      .active{              /*yung kulay kapag active*/
        color: #b1cc50;
        background-color: #5b633b;
      }


      /*css ng body*/

      .background1{
        height: 390px;
        width: 1100px;
        border-radius: 10px;
        position: fixed;
        top: 20%;
        left: 20%;
        opacity: 0.8;
        background-color: #BCD4E6;
      }

      .container1 {
        position: fixed;
        top: 20%;
        left: 20%;
        padding-top: 40px;
      }

      .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 500px;
        text-align: center;
        display: inline-block;
        font-size: 18px;
        margin: 4px 20px;
        cursor: pointer;
      }

      .button2 {
        background-color: #008CBA;
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
      <div class="logo-container">
        <img src="img/svnhs-logo.png">
        <div class="title-container">
          <b>Signal Village National High School<br>
          <font style="font-size: 25px;">SHS BOARD</font></b>
        </div>
      </div>
      <div class="green_header">
        <ul>
          <li><a href="landing/about.php">About</a></li>
          <li><a href="landing/generalannouncements.php">General Announcement</a></li>
          <li><a href="landing/events.php">Events</a></li>
          <li><a href="landing/enrolmentreport.php">Enrollment Reports</a></li>
          <li><a href="landing/faculty.php">Faculty</a></li>
          <li><a href="landing/courses.php">Courses</a></li>
          <li><a class="active" href="#login">Log In</a></li>
        </ul>
      </div>
      <br><br><br><br>


      <div class="background1"></div>      

      <div class="container1">
        <center>
          <font face = "Bedrock" size = "6"><b> SVNHS | School Board </b></font><br><br><br>
          <font face = "Bedrock" size = "3"><b> Please click below to proceed to your destination. </b></font><br><br>
          <a href="student/login.php"><button class="button">Student</button></a><br>
          <a href="faculty/login.php"><button class="button button2">Faculty</button></a>
        </center>

    </div>

    </body>

  </body>
</html>