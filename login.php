<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include("config.php");
//session_start();
//
//if($_SERVER['REQUEST_METHOD'] === 'POST'){
//    // username and password sent from form
//    
//    $myusername = mysqli_real_escape_string($db,$_POST['username']);
//    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
//    
//    $sql = "SELECT id from admin WHERE username = '$myusername' and '$mypassword'";
//    $result = mysqli_query($db, $sql);
//    $row = mysqli_fetch_array($result, MYSQL_ASSOC);
//    $active = $row['active'];
//    
//    $count = mysqli_num_rows($result);
//    
//    // if result matched $myusername and $mypassword, table row must be one row
//    
//    if($count == 1){
//        session_register($myusername);
//        $_SESSION['login_user'] = $myusername;
//        
//        header("location: welcome.php");
//    } else {
//        $error = "Your login Name or password is invalid";
//    }
//}
//
ob_start();
session_start();
?>
<html lang="en">
    <head>
        <title>This is test</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <style>
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #ADABAB;
            }
            
            .form-signin {
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
                color: #017572;
            }
            
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            
            .form-signin .checkbox {
                font-weight: normal;
            }
            
            .form-signin .form-control {
                position: relative;
                height: auto;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                padding: 10px;
                font-size: 16px;
            }
            
            .form-signin .form-control:focus {
                z-index: 2
            }
            
            .form-signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
                border-color: #017572;
            }
            
            h2 {
                text-align: center;
                color: #66ff66;
            }
        </style>
        
    </head>
    
</html>

<body>
    <h2>Enter Username and Password</h2>
    <div class="container form-signin">
        <?php 
        $msg = '';
        if(isset($_POST['login']) && !empty($_POST['username']) 
                && !empty($_POST['password'])){
            if($_POST['username'] === 'moaaz' 
                    && $_POST['password'] === '1234'){
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = 'moaazTest';
                echo 'You have entered valid username and password';
            } else {
                $msg = 'Wrong username or password';
            }
        }
        ?>
    </div> <!-- /container -->
    <div>
        <form class="form-signin" role="form"
              action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" 
              method="post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class="form-control" 
                   name="username" placeholder="username = moaaz" required autofocus>
            <input type="password" class="form-control" 
                   name="password" placeholder="password = 1234" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" 
                    name="login">Login </button>
        </form>
        Click here to clean <a href="logout.php" title="logout"> Session.
    </div>
</body>

<!--<html>
    <head>
        <title>Login Page</title>
        
        <style type = "text/css">
            body {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
            }
            label {
                font-weight: bold;
                width: 100px;
                font-size: 14px;
            }
            .box {
                border: #666666 solid 1px;
            }
        </style>
    </head>
    
    <body bgcolor = "#FFFFFF">
        <div style="width:300px;border: solid 1px #333333; " align = "left">
            <div style="background-color: #333333; color: #333333; padding: 3px;"><b>Login</b>
                <div style="margin: 30px">
                    <form action="" method="post">
                        <label>Username :</label><input type="text" name="username" class="box"/><br /><br />
                        <label>Password :</label><input type="password" name="password" class="box"/><br /><br />
                        <input type="submit" value="Submit"/><br />
                    </form>
                    <div style="font-size: 11px; color: #cc0000; margin-top: 10px"> //////<?php echo $error; ?></div>
                </div>
            </div>
        </div>
    </body>
</html>-->