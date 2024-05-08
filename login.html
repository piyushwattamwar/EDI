<?php

session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
   $email = $_POST['email'];
   $password = $_POST['password'];

   if(!empty($email) && !empty($password) && !is_numeric($email)) 
   {

      $query="select * from form where email= '$email' limit 1"; 
      $result= mysqli_query($con,$query);

      if($result)
      {

         if($result && mysqli_num_rows($result) > 0)
         {

            $user_data= mysqli_fetch_assoc($result);

            if($user_data['password'] == $password)
            {
               header("location:add_property2.php");
               die;

            }
         }
      }
      echo "<script type='text/javascript'> alert('Wrong Username or Password')</script>";

   }
   else{
      echo "<script type='text/javascript'> alert('successfull!!')</script>";

   }

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form Design | CodeLab</title>
      <link rel="stylesheet" href="styles2.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form method="POST">
            <div class="field">
               <input type="text"  name="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="signup.php">Signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>