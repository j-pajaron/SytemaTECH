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
<?php

if(isset($_POST["submit"])){
        

        echo $filename=$_FILES["uploadfile"]["tmp_name"];
        

         if($_FILES["uploadfile"]["size"] > 0)
         {

            $file = fopen($filename, "r");
             while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
             {
                $hashed_password = password_hash($emapData[5], PASSWORD_BCRYPT);
              //It wiil insert a row to our subject table from our csv file`
               $sql = "INSERT into users (`first_name`, `middle_name`, `last_name`, `username`, `password`, `gender`, `user_type`) 
                    values('$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$hashed_password','$emapData[6]','$emapData[7]')";
             //we are using mysql_query function. it returns a resource on true else False on error
              $result = mysqli_query( $link, $sql );
                if(! $result )
                {
                    echo "<script type=\"text/javascript\">
                            alert(\"Invalid File:Please Upload CSV File.\");
                            window.location = \"register-users.php\"
                        </script>";
                
                }

             }
             fclose($file);
             //throws a message if data successfully imported to mysql database from excel file
             echo "<script type=\"text/javascript\">
                        alert(\"CSV File has been successfully Imported.\");
                        window.location = \"register-users.php\"
                    </script>";
            
             

             //close of connection
            mysqli_close($link); 
                
            
            
         }
    }    
?>       

