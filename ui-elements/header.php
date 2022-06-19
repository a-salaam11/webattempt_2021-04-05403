<nav>
    <img src="images/logo.jpg" alt="wait for now!">
    <div class="navigation">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a class="active" href="alumni.php">Alumni</a></li>
            <li><a href="staff.html">Staff</a></li>
            <li><a href="contact.html">Contact</a></li>
            <?php
                if(!empty($_SESSION['web-attempt'])) {
            ?>
            <li><button class="loginbtn"><a href="logout.php">Logout</a></button></li>
            <?php
               } else{
            ?>
            <li><a href="register.html">Register</a></li>
            <li><button class="loginbtn" onclick="document.getElementById('login-form')"><a href="login.php">Login</a></button></li> 
            <?php
               }
            ?>
        </ul>
</nav>