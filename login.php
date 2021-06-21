<?php
    /* redirect to user if user loged in */
    session_start();
    if(!empty($_SESSION['user'])){ header('location:user.php');}
    /* redirect to user if user loged in */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="static/css/login.css">
    <!-- Custom CSS End -->
    
</head>
<body>

    <!-- Main Div -->
    <div class="center">

        <h2>Login</h2>

        <!-- Login Form -->
        <form  method="POST" action="loginaction.php">

            <input type="email" class="input" placeholder="Enter Email" name="email"> <br> <br> 
            <input type="password" class="input" placeholder="Enter Password" name="pwd"> <br> <br> <br>
            <input type="submit" class="input btnlog" value="Submit" name="submit">

        </form>
        <!-- Login Form End -->


        <div class="regi">
            <a href="register.php">New Registration </a>
        </div>

    </div>
    <!-- Main Div End -->

</body>
</html>