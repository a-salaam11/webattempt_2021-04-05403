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
$country = $_POST['country'];
$phone = $_POST['phone'];

$sql = "INSERT INTO alumnireg_table(aname, Yoe, Yog, hma, hmi, res,occ,addr,eaddr,psword, country, phone) VALUES('$name','$yoe','$yog',
      '$Hma','$Hmi','$Res','$Occ','$Addr','$Eaddr','$Psword', '$country', '$phone')";

$result = mysqli_query($conn, $sql);
if($result) {
      $_SESSION['web-attempt'] = $row['aname'];
      header('Location: alumni.php');
}
