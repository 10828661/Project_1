<?php
session_start();
include("connections.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //read from to database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);
        
        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {
                   
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;

                }
            }
        }
        echo "Invalid username or password !";
    }else
    {
        echo "Invalid username or password !";
    }
}

?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login</title>
</head>
    <link rel="stylesheet" type="text/css" href="login.css">
<body>
   <div class="container">
               <img src="b1924dce177345b5485bb5490ab3441f.jpg" class="avatar">
                     <h1>Log In</h1>
                     <form method="post">
                            <p>Username</p><br>
                            <input id="text" type="text" name="user_name" placeholder="Enter Username">
                            <p>Password</p><br>
                            <input id="text" type="password" name="password" placeholder="Enter Password">
                            <br>
                            
                     </form>
                     <form action="index.php">
                            <input type="submit" name="" value="Login">
                     </form>   
                     <a href="signup.php">Don't Have an account?</a>           
        </div>

</body>
</html>