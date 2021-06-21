<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="static/css/fontawsome.css">
    <link rel="stylesheet" href="static/css/register.css">
    <!-- Custom Css End -->

</head>
<body>
    

    <!-- Main Div -->
    <div class="center">

        <!-- Bacck button to login page -->
        <a href="login.php" class="backto"><i class="fas fa-arrow-circle-left"></i></a>
        <!-- Bacck button to login page -->
        
        <h2>Registration</h2>


        <!-- Registration form -->
        <form method="POST" action="registeraction.php">

            <input type="text" class="input" placeholder="Enter Name" name="name"> 
            <input type="email" class="input" placeholder="Enter Email" name="email">
            <input type="text" class="input" placeholder="Enter Number" name="number">
            <input type="password" class="input" placeholder="Enter Password" name="pwd" id="pwd">
            <!-- <input type="password" class="input" placeholder="Confirm Password" id="repwd" > -->
            <input type="submit" class="input btnreg" value="Submit" name="submit">

        </form>
        <!-- Registration form End -->


    </div>
    <!-- Main Div End -->


<script src="static/js/fontawsome.js"></script>
</body>
</html>