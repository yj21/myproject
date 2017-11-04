 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../teachers/mycss.css">

  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
  <?php 
session_start();

$tid=$_SESSION["tid"];
//$tid=$_SESSION["tid"];

  //$sid = $_GET['sid'];
  // do some validation here to ensure id is safe
  $user="root";
  $pass="";
  $db=new mysqli('localhost',$user,$pass,'db');
  
  $sql = "SELECT tname FROM teacher WHERE tid='$tid'";
  $result =$db->query($sql);
  list($tname)=mysqli_fetch_array($result);
  mysqli_close($db);

  //header("Content-type: image/jpeg");
  //echo $tname;

?>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="thome.php?tid=<?php echo urlencode($tid); ?>">TsecFileSharing</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="thome.php">Home</a></li>
      <li><a href="tmsg.php?tid=<?php echo urlencode($tid);?>">Messages</a>
        
       
      </li>
      <li><a href="upload.php?tid=<?php echo urlencode($tid); ?>">Upload</a></li>
    	        <li><a href="vpn.php?tid=<?php echo urlencode($tid); ?>">MY NOTES</a></li>

	</ul>
    <ul class="nav navbar-nav navbar-right">
	      	<li><img src="photo.php?id=<?php echo urlencode($tid); ?>" width=40px height=40px style="padding-top:5px" /><span style="display:inline; white-space:nowrap; color:#9d9d9d;margin-top:50px;font-size:14px;line-height:10px">welcome <?php echo $tname; ?></span></li>

      <li><a href="../home.php"><span class="glyphicon glyphicon-user"></span> LOG OUT</a></li>
    </ul>
  </div>
</nav>
<h1 style="text-align:center;">STUDENTS</h1>
<?php 
$user="root";
$pass="";
$db=new mysqli('localhost',$user,$pass,'db');
$tid=$_GET["tid"];
//------------------
$sql="select tbr from teacher where tid='$tid'";
$result=$db->query($sql);
if($result->num_rows>0)
{
list($tbr) = mysqli_fetch_array($result);

}
//------------------
$sql="select sname,sid from std where sbr='$tbr';";
$result=$db->query($sql);
if($result->num_rows>0)
{
$i=0;
?>
<table width="800" cellspacing="20" style="margin-left:400px;align:center;">
<?php
while(list($sname, $sid) = mysqli_fetch_array($result))	{
			//echo $row["sid"];
	if($i%2==0)
	{		
		 ?>
		 <tr>
		 <th>
		 <img src="getimage.php?sid=<?php  echo urlencode($sid); ?>" width="120" height="120" />
		 <a href="tmsg0.php?sid=<?php echo urlencode($sid); ?>&tid=<?php echo urlencode($tid); ?>"><?php echo urlencode($sname); ?></a>
	</th>
	<!---</div>
	<?php
	}
	else
	{
		?>
	
				 <div style="font-size:25px; margin-left:500px; height:120px;width:120px ;">---->
				 <th>
		 <img src="getimage.php?sid=<?php  echo urlencode($sid); ?>" width="120" height="120" />
		 <a href="tmsg0.php?sid=<?php echo urlencode($sid); ?>&tid=<?php echo urlencode($tid); ?>"><?php echo urlencode($sname); ?><sup></sup></a>
		 </th>
		 </tr>
		 
<!--	</div>-->
		<?php
	}
	$i++;
	}
	?>
	</table>
	<?php
}
/*$sql="select comment,st from chat where tid='$tid'";
$result=$db->query($sql);

if($result->num_rows>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		 echo " " . $row["st"]. ":".$row["comment"]. "<br>";
	}
}*/
?>
</body>
</html>