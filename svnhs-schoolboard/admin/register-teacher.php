<?php
    require_once("../config.php")                   /*required na kasama db sa execution ng file*/
                                    /*hindi include dahil required nga. At once lanf para walng error*/
?>
<?php 

    $first_name = "";
    $middle_name = "";
    $last_name = "";                    /*variables*/
    $username = "";
    $password = "";
    $confirm_password = "";
    $gender = "";
    $address = "";

    $first_name_err = "";
    $middle_name_err = "";
    $last_name_err = "";                            /*kapag may error sa variables*/
    $username_err = "";
    $password_err = "";
    $confirm_password_err = "";
    $gender_err = "";
    $address_err = "";

    /*dito mapupunta yung input ng user gamit ng POST*/
    if($_SERVER["REQUEST_METHOD"] == "POST"){                   /*ito yung tamang paraan daw para magcheck ng form*/ 
        $input_first_name = trim($_POST["first_name"]);            /*if walang laman yung email address*/
        if(empty($input_first_name)){
            $first_name_err = "Please input a first name.";             /*gagawin niya ito*/
        }
        elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST['first_name']))){          /*letra, numero, underscore lang ang pwede dito, else mageeror*/             
            $firstname_err = "firstname can only contain letters, numbers, and underscore.";
        }
        else{                                                                                           /*else*/
            $sql = "SELECT id FROM teachers WHERE first_name = ?";                                      /*sql statement*//*kukunin niya yung data sa db na may kaparehong firstname*/
            if($stmt = mysqli_prepare($link, $sql)){                                    /*kapag may laman, ipreprepare niya yung laman sql query tulad ng select para sa operation*/
                mysqli_stmt_bind_param($stmt, "s", $param_first_name);         /*kailangan ito para magexecute, binabind niya variables to parameter markers (hindi ko po ito alam)*/

                $param_first_name = trim($_POST['first_name']);                 /*eto yun*/

                if(mysqli_stmt_execute($stmt)){                                 /*if may laman yung $stmt = ieexecute niya yon (SELECT)*/   
                    $result = mysqli_stmt_get_result($stmt);                    /*iniistore niya dito yung results*/
                    if(mysqli_num_rows($result) == 1){                          /*irereturn niya yung number of rows sa select at kapag equals sa isa*/
                        $first_name_err = "This first name is already taken.";  /*eto yung lalabas*/
                    }
                    else{                                                           /*else eto yung gagawin nya*/
                        $first_name = trim($_POST['first_name']);                   /*kukunin yung input at ilalagay sa variable na $first_name*/
                    }
                }
                else{                                                                         /*kung hindi maexecute, may error*/
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);                                                   /*icoclose na yung statement*/
            }
        }


        $input_middle_name = trim($_POST["middle_name"]);                               /*same lang yung proceso sa first_name*/
        if(empty($input_middle_name)){
            $middle_name_err = "Please input a middle name.";
        }
        elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST['middle_name']))){
            $middle_name_err = "middlename can only contain letters, numbers, and underscore.";
        }
        else{
            $sql = "SELECT id FROM teachers WHERE middle_name = ?";
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_middle_name);

                $param_middle_name = trim($_POST['middle_name']);

                if(mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);
                    if(mysqli_num_rows($result) == 1){
                        $middle_name_err = "This middle name is already taken.";
                    }
                    else{
                        $middle_name = trim($_POST['middle_name']);
                    }
                }
                else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }


        $input_last_name = trim($_POST["last_name"]);                               /*same lang yung proceso sa first_name*/
        if(empty($input_last_name)){
            $last_name_err = "Please input a last name.";
        }
        elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST['last_name']))){
            $last_name_err = "lastname can only contain letters, numbers, and underscore.";
        }
        else{
            $sql = "SELECT id FROM teachers WHERE last_name = ?";
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_last_name);

                $param_last_name = trim($_POST['last_name']);

                if(mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);
                    if(mysqli_num_rows($result) == 1){
                        $last_name_err = "This last name is already taken.";
                    }
                    else{
                        $last_name = trim($_POST['last_name']);
                    }
                }
                else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }

        $input_username = trim($_POST["username"]);                           /*same lang yung proceso sa first_name*/
        if(empty($input_username)){
            $username_err = "Please input a username.";
        }
        elseif(!preg_match('/^[a-zA-Z0-9_@.]+$/', trim($_POST['username']))){
            $username_err = "email address can only contain letters, numbers, and underscore.";
        }
        else{
            $sql = "SELECT id FROM teachers WHERE username = ?";
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_username);

                $param_username = trim($_POST['username']);

                if(mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);
                    if(mysqli_num_rows($result) == 1){
                        $username_err = "This email address is already taken.";
                    }
                    else{
                        $username = trim($_POST['username']);
                    }
                }
                else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }

        $input_gender = trim($_POST["gender"]);                               /*same lang yung proceso sa first_name*/
        if(empty($input_gender)){
            $gender_err = "Please input a gender.";
        }
        elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST['gender']))){
            $gender_err = "gender can only contain letters, numbers, and underscore.";
        }
        else{
            $sql = "SELECT id FROM teachers WHERE gender = ?";
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_gender);

                $param_gender = trim($_POST['gender']);

                if(mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);
                    if(mysqli_num_rows($result) == 1){
                        $gender_err = "This gender is already taken.";
                    }
                    else{
                        $gender = trim($_POST['gender']);
                    }
                }
                else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }

        $input_address = trim($_POST["address"]);                               /*same lang yung proceso sa first_name*/
        if(empty($input_address)){
            $address_err = "Please input address .";
        }
        elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST['address']))){
            $address_err = "address can only contain letters, numbers, and underscore.";
        }
        else{
            $sql = "SELECT id FROM teachers WHERE address = ?";
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_address);

                $param_address = trim($_POST['address']);

                if(mysqli_stmt_execute($stmt)){
                    $result = mysqli_stmt_get_result($stmt);
                    if(mysqli_num_rows($result) == 1){
                        $address_err = "This address is already taken.";
                    }
                    else{
                        $address = trim($_POST['address']);
                    }
                }
                else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }

        if(empty(trim($_POST['password']))){                                    /*kukunin niya yung password*/
            $password_err = "Please input a password.";                         /*kapag walang laman, mageeror*/
        }
        else if(strlen(trim($_POST['password'])) < 6){                          /*kailangan 6 characters + ang password*/
            $password_err = "Password is atleast 6 characters";
        }
        else{                                                                   /*kapag okay na, kukunin yung password at ilalagay sa $password*/
            $password = trim($_POST['password']);
        }

        if(empty(trim($_POST['confirm_password']))){                           /*kapag walang laman, yung confirm password*/    
            $confirm_password_err = "Please input a password confirmation.";    /*eto yung lalabas*/
        }
        else{                                                                   /*else*/
            $confirm_password = trim($_POST['confirm_password']);                  /*kukunin yung confirm password at ilalagay sa $confirm password*/
            if(empty($password_err) && ($password != $confirm_password)){           /*kapag empty yung error ng password at hindi tugma sa confirm*/
                $confirm_password_err = "Password and password confirmation did not match.";    /*eto yung lalabas sa baba na error*/
            }
        }

        if(empty($first_name_err) && empty($middle_name_err) && empty($last_name_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($gender_err) && empty($address_err)){
            $sql = "INSERT INTO teachers (first_name, middle_name, last_name, username, password, gender, address) VALUE(?, ?, ?, ?, ?, ?, ?)";
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "sssssss", $param_first_name, $param_middle_name, $param_last_name, $param_username, $param_password, $param_gender, $param_address);

                $param_first_name = $first_name;
                $param_middle_name = $middle_name;
                $param_last_name = $last_name;
                $param_username = $username;
                $param_password = password_hash($password, PASSWORD_DEFAULT);
                $param_gender = $gender;
                $param_address = $address;

                if(mysqli_stmt_execute($stmt)){
                    header("location: login.php");
                    exit();
                }
            else{
                echo "Something went wrong. Please try again.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css"/>
    <title>SVNHS School Board</title>

    <style>
        body {
            background-image: url('img/green-background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        .container {
            right: 400px;
            width: 600px;
            height: 750px;
            border-radius: 10px;
        }

        .box {
            border-radius: 5px;
            padding-right: 50px;  
            padding-left: 50px;    
            padding-top: 30px;
            background-color: #a1b2c3;
        }
    </style>

  </head>
  <body>
    <div class="container box">
      <div class="row">
            <i class="fas fa-user-plus fa-3x"><font face = "Bedrock" size = "7"><b> Sign Up</b></font></i>
            <br><br><br>
            <p><font face = "Bedrock" size = "5">Please fill this form to create an account.</font></p>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" name="first_name" class="form-control <?php echo (!empty($first_name_err)) ? 'is-invalid': '' ?>" value="<?= $first_name ?>">
                    <span class="invalid-feedback"><?=$first_name_err?></span>
                </div>
                <div class="form-group">
                    <label>Middle name</label>
                    <input type="text" name="middle_name" class="form-control <?php echo (!empty($middle_name_err)) ? 'is-invalid': '' ?>" value="<?= $middle_name ?>">
                    <span class="invalid-feedback"><?=$middle_name_err?></span>
                </div>
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" name="last_name" class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid': '' ?>" value="<?= $last_name ?>">
                    <span class="invalid-feedback"><?=$last_name_err?></span>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid': '' ?>" value="<?= $username ?>">
                    <span class="invalid-feedback"><?=$username_err?></span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid': '' ?>" value="<?= $password ?>">
                    <span class="invalid-feedback"><?=$password_err?></span>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid': '' ?>" value="<?= $confirm_password ?>">
                    <span class="invalid-feedback"><?=$confirm_password_err?></span>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" name="gender" class="form-control <?php echo (!empty($gender_err)) ? 'is-invalid': '' ?>" value="<?= $gender ?>">
                    <span class="invalid-feedback"><?=$gender_err?></span>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid': '' ?>" value="<?= $address ?>">
                    <span class="invalid-feedback"><?=$address_err?></span>
                </div>
                <hr>
                <font face = "Bedrock" size = "3"><input type="submit" class="btn btn-primary" value="Submit"></font>
                <font face = "Bedrock" size = "3"><input type="reset" class="btn btn-secondary ml-2" value="Reset"></font>
            </form>
                <p>
                    Already have an account?
                    <font face = "Bedrock" size = "3"><a href="login.php"user>Login Here</a></font>
                </p>
      </div>
    </div>
  </body>
</html>