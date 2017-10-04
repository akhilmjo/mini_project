<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{	
$a=$_POST["user"];

$sql="SELECT `user_name`, `passsword` FROM `login` WHERE `delstatus`=0 AND user_name='$a'";$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if($a!="" && $row['passsword']!="" )
{
	function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );	
	}

$pw=decryptIt( $row['passsword'] );
//echo($pw);
$subject = "TaxiGo";
//echo($a);
$message = "
<html>
<head>
<title>TaxiGo</title>
</head>
<body>
<p>Hi, 
<span>$a</span> </p>
<p>Thank you for registering TaxiGo</p>
<table>
<tr>
<td>Username:<span> $a</span></td>
</tr>
<tr>
<td>password:<span> $pw</span></td>
</tr>
<p>Please use this username and password to login to your account from here:http://localhost/supershine/login.html</p>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";
//echo($a);
mail($a,$subject,"$message",$headers);
header('location:login.php');
}
}
?>