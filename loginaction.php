<?php 

    /* Start Session */
    session_start();
    /* Start Session End */


    /* Include Database Connection */
    include('database/conn.php');
    /* Include Database Connection End */


    /* Gettiing data from lohin form */
    $email = $_REQUEST['email'];
    $pwd = $_REQUEST['pwd'];
    /* Gettiing data from lohin form End */


    /* Create Query For Login  */
    $Qlog = "SELECT * FROM `multilogin` WHERE `email` ='$email' AND `password` ='$pwd' ";
    /* Create Query For Login End  */


    /* Execute login Query */
    $Q = mysqli_query($conn,$Qlog);
    /* Execute login Query */
    

    /* Cheking that User Exist in Database or not */
    $count = mysqli_num_rows($Q);

    if($count > 0)
    { 
        $_SESSION['user'] = mysqli_fetch_assoc($Q);
        header('location:user.php');
    }
    /* Cheking that User Exist in Database or not End */


?>