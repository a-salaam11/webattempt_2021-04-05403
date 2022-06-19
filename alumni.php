<?php
session_start();
if (empty($_SESSION['web-attempt'])) {
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 80%;
      margin: auto;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>school web</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!--navigation details-->
  <?php
  include_once 'ui-elements/header.php';
  ?>
  <!-- Home -->
  <center>
    <section id="about-alumni">
      <h2>ALUMNI</h2>
    </section>
  </center>
  <section id="alumni-container">
    <div class="alumni">
      <div class="post">
        <img src="images/al-1.jpg" alt="wfn">
        <h3>Dr.Ashley Normann-Alumni(2014)</h3>
        <p><i>"Deviated me from a bill-paying career to a <strong>Life-fulfilling</strong> one."</i></p>
        <a href="post.html">Read More</a>
      </div>
      <div class="post">
        <img src="images/al-3.jpg" alt="wfn">
        <h3>Kelly Cumberbatch(Psychology-Expert)-Alumni(2013)</h3>
        <p><i>"If you wanna learn from the best,Enlightment-Schools is for <strong>You.</strong>"</i></p>
        <a href="post.html">Read More</a>
      </div>
      <div class="post">
        <img src="images/al-2.jpg" alt="wfn">
        <h3>Magrett Shitu(Lecturer)-Alumni(2014)</h3>
        <p><i>"I never knew that teaching was more of a thing to me till I came to Enlightment-Schools."</i></p>
        <a href="post.html">Read More</a>
      </div>
    </div>
    <div class="cate">
      <h2>UNIQUE GRADUANTS' CAREERS:</h2>
      <hr><a href="#">Andrew Kelly-Founder of <strong>VideoCopilot.net</strong></a>
      <hr><a href="#">Josh Neumann-World famous Magician</a>
      <hr><a href="#">William Langdren-Master of Blender 3D</a>
      <hr><a href="#">Dr.Michael Morbius-Founder of a cure for Alzhemier</a>
      <hr>

    </div>
  </section>

  <?php


  $conn = mysqli_connect('localhost', 'root', '', 'register_table');
  $sql = "SELECT * FROM alumnireg_table";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {

  ?>

    <table>
      <tr>
        <th>Name</th>
        <th>Year of Enrollment</th>
        <th>Year of Graduation</th>
        <th>headmaster at YoG</th>
        <th>headmistress at YoG</th>
        <th>Result</th>
        <th>Occupation</th>
        <th>Country</th>
        <th>Address</th>
        <th>Email Address</th>
        <th>Mobile Number</th>
      </tr>
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <tr>
          <td><?= $row['aname'] ?></td>
          <td><?= $row['Yoe'] ?></td>
          <td><?= $row['Yog'] ?></td>
          <td><?= $row['hma'] ?></td>
          <td><?= $row['hmi'] ?></td>
          <td><?= $row['res'] ?></td>
          <td><?= $row['occ'] ?></td>
          <td><?= $row['country'] ?></td>
          <td><?= $row['addr'] ?></td>
          <td><?= $row['eaddr'] ?></td>
          <td><?= $row['phone'] ?></td>
        </tr>
    <?php
      }
    }
    ?>

    </table>


</body>

</html>