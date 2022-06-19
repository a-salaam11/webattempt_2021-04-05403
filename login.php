<?php
  $error = '';
  session_start();
  if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost', 'root', '', 'register_table');
    $sql = "SELECT * FROM alumnireg_table WHERE eaddr='$email' AND psword='$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
      $error = '';
      while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['web-attempt'] = $row['aname'];
        header('Location: alumni.php');
      }
    } else {
      $error = "Wrong Email/Password";
    }
  }


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school web</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<!--navigation details-->
<nav>
<img src="images/logo.jpg" alt="wait for now!">
<div class="navigation">
  <ul>
  <li><a  href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
      <li><a href="alumni.php">Alumni</a></li>
        <li><a href="staff.html">Staff</a></li>
          <li><a href="contact.html">Contact</a></li>
              <li><a href="register.html">Register</a></li>
                <li><button class="loginbtn" onclick="document.getElementById('login-form')"><a class="active" href="login.html">Login</a></button></li

  </ul>
</nav>
<!-- Home -->
<center>
  <br><br><br>
<!--log-in Form-->
<section id="log-in">
  <div class="ps">
    <h1>LOG-IN TO ACCESS:<br>
    </h1>
  <p>ALUMNI-PAGE</p>
  </div>

  <div class="form">
    <h3>For Members Only</h3>
    <form action="" method="post">
      <input type="email" name="email" value="" id="" placeholder="Email Address">
      <p><?=$error?></p>
    <input type="password" name="password" value="" id="" placeholder="Password">
    <div class="btn">
      <button class="yello" name="submit">SUBMIT</button>
      <p>Don't have account! <a href="alumniRegister.html">Register</a></p>
    </div>
    </form>

  </div>
</section>
<br> <br>
  </body>
</html>
