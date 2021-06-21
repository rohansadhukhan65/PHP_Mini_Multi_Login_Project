<?php 
    session_start();

    /* Unsert Session */
    unset($_SESSION['user']);
    /* Unsert Session End */

    /* Cheking login Session */
    if(empty($_SESSION['user']))
    {
        header('location:login.php');
    }
    /* Cheking login Session End */

?>