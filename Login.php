<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Blinders Express - Login Form</title>
<link rel="icon" type="image/x-icon" href="assets/icon.jpg" />
<link rel="stylesheet" href="css/css2.css" />
</head>

<body>
<div class="container">
  <section id="content">

    <form action="login2.php" method="post"> 
      <h1>Login Form</h1>
      <div>
        <input type="text" placeholder="Username" required="" id="username" />
      </div>
      <div>
        <input type="password" placeholder="Password" required="" id="password" />
      </div>
      <div>
        <input type="submit" value="Log in" />
        <a href="index2.php">Return to main page</a>
        <a href="signup.php">Register</a>
      </div>
    </form>

  </section>
</div>

<?php

session_start();
$registration = mysqli_connect('localhost', 'root', '', 'registration');

if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($_POST['username']);
    $password = mysqli_real_escape_string($_POST['password']);
    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($registration, $sql);
    
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in!";
    header('location: index2.php');
    
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: Login.php');
        
    }
    
}
?>

</body>
</html>