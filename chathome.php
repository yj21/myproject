<html>
<head>
</head>
<body>
<?php
session_start();
//$namess = $_SESSION['names'];
//echo $namess;
$user="root";
$pass="";
$tid="1";
$sid="3";
$sbr="it";
$db=new mysqli('localhost',$user,$pass,'db');
$sql="select tname,tid from teacher where tbr='". mysqli_real_escape_string($db,$sbr) . "';";
$result=$db->query($sql);
while(list($tname,$tid) = mysqli_fetch_array($result))
{
?>
<a href="chat.php?tid=<?php echo urlencode($tid)?>&sid=<?php echo urlencode($sid)?>"><?php echo urlencode($tname);?></a> <br>
<?php 
}

//include 'library/closedb.php';
?>
</body>
</html>