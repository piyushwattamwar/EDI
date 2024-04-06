<?php

session_start();
include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")

{
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$phonenumber = $_POST['phonenumber'];
$confirmpassword = $_POST['confirmpassword'];
$gender = $_POST['gender'];

if(!empty($email) && !empty($password)  )
{
  $query= "insert into form (fullname,email	,password,username,phonenumber,confirmpassword,gender) values('$fullname','$email','$password','$username','$phonenumber','$confirmpassword','$gender')";

mysqli_query($con,$query);

echo "<script type='text/javascript'> alert('Successfully Register')</script>";

}
else 
{
  echo "<script type='text/javascript'> alert('Please Enter Some Valid Information!!')</script>";
}
}
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="styles3.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text"  placeholder="Enter your name" name="fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phonenumber" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name="confirmpassword" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="signup-link">
               Already registered? <a href="login.php">login now</a>
            </div>

        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>