<html>
<head>
<title>Download File From MySQL</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
//include 'library/config.php';
//include 'library/opendb.php';
$user="root";
$pass="";
$db=new mysqli('localhost',$user,$pass,'db');
//include 'library/config.php';
//include 'library/opendb.php';

$query = "SELECT id, name FROM upload";
$result = $db->query($query) or die('Error, query failed');
if(mysqli_num_rows($result) == 0)
{
echo "Database is empty <br>";
} 
else
{
while(list($id, $name) = mysqli_fetch_array($result))
{
?>
<a href="download.php?id=<?php echo urlencode($id);?>&name=<?php echo urlencode($name);?>"><?php echo $name;?></a> <br>
<?php 
}
}
//include 'library/closedb.php';
?>
</body>
</html>