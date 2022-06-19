<?php
$host ="localhost";
$dbUser ="root";
$dbPwd ="";
$dbName ="register_table";

$conn = mysqli_connect($host, $dbUser, $dbPwd, $dbName);


$name=$_POST['aname'];
$yoe=$_POST['Yoe'];
$yog=$_POST['Yog'];
$Hma=$_POST['hma'];
$Hmi=$_POST['hmi'];
$Res=$_POST['res'];
$Occ=$_POST['occ'];
$Addr=$_POST['addr'];
$Eaddr=$_POST['eaddr'];
$Psword=$_POST['psword'];

$sql = "INSERT INTO register_filltable(aname, Yoe, Yog, hma, hmi, res,occ,addr,eaddr,psword) VALUES('$name','$yoe','$yog',
      '$Hma','$Hmi','$Res','$Occ','$Addr','$Eaddr','$Psword')";

$result = mysqli_query($conn, $sql);
