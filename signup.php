<?php

require_once 'connections.php'; // copy the contents of db.php come here

if(isset($_POST['submit_button'])){ // if some values dey there or if somebody press the submit button 

    // get all values from form submitted using their names
    // getting data from submitted form
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
   // not compulsory for the names to add up


    // insert into database now
    $add_user = mysqli_query($connectionString,"INSERT INTO informations (id, email, user_name,password, timestamp) VALUES (NULL, '{$email}', '{$user_name}', '{$password}', '{$date}', current_timestamp())") or die(mysqli_error($connectionString));//or die throws an error when there is an error in the connection string
//get something or put something into the database
//connection string ties appllication to the application to the database
//tick is advisable to use instead of the single quotation
//them for add to each other
    if($add_user) {
        echo "<script>alert('Sign Up Successful');window.location.href='login.php';</script>";//if sign up is succesful
    }else{
        echo "<script>alert('Sorry, Error Occured')"; //else this occurs
    }
}
?>

<html>
    <head>
        <title>
            Sign Up 
        </title>
        <link rel="stylesheet" type="text/css" href="signup.css">
    </head>
    <body class="login">
        <div class="container">
        <form method="post ">
            <h1 class="main heading">Create an account</h1>
            <p><b>Fill This Form To Start Creating Your account</b></p> 
            <p><label><b>Email</b></label></p> 
            <input id="email" type="email" placeholder="Enter your Email" name="email">
           <p><label><b>Username</b></label></p> 
            <input id="text" type="text" placeholder="Enter your Username" name="user_name">
            <p><label><b>Password</b></label></p> 
            <input id="text" type="password" placeholder="Enter your Password" name="password">
             
        </form>
        <form action="login.php">
            <button class="registerbtn"><b>Click to  Signup</b></button>
            <p>Already own an acoount? <a href="login.php">Login Here.</p>
        </form>
        </div>
    </body>
</html>