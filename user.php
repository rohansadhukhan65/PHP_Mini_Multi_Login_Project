<?php 
    /* redirect page to login if user is not loged in */
    session_start();
    $user = $_SESSION['user'];
    if(empty($_SESSION['user'])){ header('location:login.php'); }
    /* redirect page to login if user is not loged in End */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="static/css/fontawsome.css">
    <link rel="stylesheet" href="static/css/user.css">
    <!-- Custom Css End -->
   
</head>
<body>
  
    <!-- Main Div -->
    <div class="card">

            <!-- Cheking it is client or admin and print messege respect to that -->
            <?php if($user['auth'] == 'admin'){ ?>
                <h1>Welcome Admin!</h1>
            <?php }else{?>
                <h1><span>Welcome!</span> <br> <?php echo $user['name']; ?></h1>
            <?php }?>
            <!-- Cheking it is client or admin and print messege respect to that End -->


            <!-- User icon -->
            <div class="proimg">
                <i class="fas fa-user-circle"></i>
            </div>
            <!-- User icon End -->

            
            <!-- User Information -->
            <div class="info">
                <h5>Email :   <?php echo $user['email'] ?></h5>
                <h5>Phone Number :   <?php echo $user['number'] ?></h5>
            </div>
            <!-- User Information End -->

            <!-- Lgout Button -->
            <div class="logoutbtndiv">
                <a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
            <!-- Lgout Button End -->

            
    </div>
    <!-- Main Div End -->



<script src="static/js/fontawsome.js"></script>
</body>
</html>