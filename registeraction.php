<?php 

    include('database/conn.php');

    /* fetch values */
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['number'];
    $pwd = $_REQUEST['pwd'];
    /* fetch values End */


    /* Query */
    $sql = "INSERT INTO `multilogin`(`uid`, `name`, `email`, `number`, `password`, `auth`) 
    VALUES ('','$name','$email','$number','$pwd','client')";
    /* Query End */


    /* Execcute query */
    $result = mysqli_query($conn,$sql);
    /* Execcute query End */


    /* Cheking Query */
    if($result)
    {
        header('location:login.php');
    }
    else
    {
        echo "Registration Failed !";
    }
    /* Cheking Query End */


?>