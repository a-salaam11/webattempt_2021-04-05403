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
                <li><button class="loginbtn" onclick="document.getElementById('login-form')"><a class="active" href="login.php">Login</a></button></li

  </ul>
</nav>
<!-- Home -->
<center>
  <br><br><br>
<!--log-in Form-->
<section id="log-in">
  <div class="ps">
    <h1>REGISTER TO ACCESS:<br>
    </h1>
  <p>ALUMNI-PAGE</p>
  </div>
<form action="alumniReg.php" method="post">
  <div class="form">
    <h3>For Members Only</h3>
    <input type="text" name="aname" value="" id="" placeholder="Alumni Name">
    <input type="text" name="Yoe" value="" id="" placeholder="Year of Enrolment(YoE)">
    <input type="text" name="Yog" value="" id="" placeholder="Year of Graduation(YoG)">
    <input type="text" name="hma" value="" id="" placeholder="Headmaster at YoG">
    <input type="text" name="hmi" value="" id="" placeholder="Headmaster at YoG">
    <input type="text" name="res" value="" id="" placeholder="Result">
    <input type="text" name="occ" value="" id="" placeholder="Occupation">
    <input type="text" name="country" value="" id="" placeholder="Country">
    <input type="text" name="addr" value="" id="" placeholder="Address">
    <input type="email" name="eaddr" value="" id="" placeholder="Email Address">
    <input type="email" name="phone" value="" id="" placeholder="Phone Address">
    <input type="text" name="mno" value="" id="" placeholder="Mobile Number">
    <input type="password" name="psword" value="" id="" placeholder="Password">

    <div class="btn">
      <input type="submit" value="Submit" class="yellow">
    </div>
    <p>Alread have account! <a href="login.html">Login</a></p>
  </div>
</form>
</section>
<br> <br>
  </body>
</html>
