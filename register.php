<?php
$host ="localhost";
$dbUser ="root";
$dbPwd ="";
$dbName ="register_table";

$conn = mysqli_connect($host, $dbUser, $dbPwd, $dbName);


$Fname=$_POST['fname'];
$Mname=$_POST['mname'];
$Lname=$_POST['Lname'];
$Email=$_POST['Email'];
$Username=$_POST['Username'];
$DoB=$_POST['DoB'];
$Mobnumber=$_POST['Mobnumber'];
$Socmedia=$_POST['Socmedia'];
$Password=$_POST['Password'];
$CV=$_POST['CV'];

$sql = "INSERT INTO register_filltable(fname, mname, Lname, Email, Username, DoB,Mobnumber,	Socmedia,password,CV) VALUES('$Fname','$Mname','$Lname',
      '$Email','$Username','$DoB','$Mobnumber','$Socmedia',' $Password', '$CV')";

$result = mysqli_query($conn, $sql);
