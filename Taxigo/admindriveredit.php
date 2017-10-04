<?php
include 'dbcon.php';
$tp=$_SESSION['utype'];
if(!(isset($_SESSION['user_name']))||$tp!=1)
{	
	header('location:index.php');
}
if(isset($_POST['delete']))
{
$a=$_POST["firstname"];
$b=$_POST["lastname"];
$c=$_POST["contact"];
$d=$_POST["Email"];
$e=$_POST["dob"];
//$f=$_POST["ufile"];
$g=$_POST["gender"];
$h=$_POST["addres"];
$m=$_POST["sid1"];
//$i=$_POST["ufile1"];
$k=$_POST["idno"];
//echo($m);
$sql2="UPDATE `registration` SET `status`=1 WHERE `reg_id`=$m";
$result=mysqli_query($con,$sql2);
$sql1="UPDATE `login` SET `delstatus`=1 WHERE `reg_id`=$m";
$result2=mysqli_query($con,$sql1);
header('location:adminviewdriver.php');
}
if(isset($_POST['edit']))
{
$a=$_POST["firstname"];
$b=$_POST["lastname"];
$c=$_POST["contact"];
$d=$_POST["Email"];
$e=$_POST["dob"];
$g=$_POST["gender"];
$h=$_POST["addres"];
$m=$_POST["sid1"];
$k=$_POST["idno"];

$sql="UPDATE `registration` SET `fname`='$a',`lname`='$b',`phno`='$c',`Dob`='$e',`gender`='$g',`Address`='$h',`idproofno`='$k' WHERE `reg_id`=$m";
$result=mysqli_query($con,$sql);
header('location:adminviewdriver.php');
}
?>