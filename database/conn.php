<?php 

    /* Setting database variables */
    $server = 'localhost';
    $username = 'root';
    $pwd = '';
    $dbname = 'mwf12to3';
    /* Setting database variables End */


    /* Create database connection using that variables */
    $conn = mysqli_connect( $server,$username,$pwd,$dbname);
    /* Create database connection using that variables End */


    /* Cheking for database Connection */
    if(!$conn)
    {
        echo 'not connected !';
    }
    /* Cheking for database Connection End */


?>