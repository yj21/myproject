<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="../teachers/mycss.css">

 </head>
 <?php 
$sid=$_GET["sid"];
$tid=$_GET["tid"];
//$sid=$_GET["sid"];
  $user="root";
  $pass="";
  $db=new mysqli('localhost',$user,$pass,'db');
  
  $sql = "SELECT sname FROM std WHERE sid='$sid'";
  $result =$db->query($sql);
  //$row = mysql_fetch_assoc($result);
list($sname) = mysqli_fetch_array($result);
  mysqli_close($db);

  //echo $sname;
 ?>
 <body style="background-color:black;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="shome.php">TsecFileSharing</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="shome.php">Home</a></li>
      <li><a href="smsg.php?sid=<?php echo urlencode($sid);?>">Messages</a> 
      </li>
      <li><a href="dwnld.php?sid=<?php echo urlencode($sid); ?>">NOTES</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      	<li><img src="photo.php?id=<?php echo urlencode($sid); ?>" width=40px height=40px style="padding-top:5px" /><span style="display:inline; white-space:nowrap; color:#9d9d9d;margin-top:50px;font-size:14px;line-height:10px">welcome <?php echo $sname; ?></span></li>

	  <li><a href="../home.php"><span class="glyphicon glyphicon-user"></span> LOG OUT</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
</div>
<div style="text-align:center;font-size:22px;">
<?php 
$user="root";
$pass="";
$db=new mysqli('localhost',$user,$pass,'db');
//$sid=$_GET["sid"];
//$tid=$_GET["tid"];
$sql="select comment,st from chat where tid='$tid' and sid='$sid';";
$result=$db->query($sql);
if($result->num_rows>0)
{

while(list($comment, $st) = mysqli_fetch_array($result))	
{
			echo " ".$st.":".$comment."<br>";
		 
		 
	}
}
?>
<form  method="post">
<input type="text" name="in" style="width:300px;"/>
<input type="button" onclick="c()" value="button">button</input>
</form>
</div>
</body>
</html>

<script type="text/javascript"> 
function c()
{
	<?php
	$comment=$_POST["in"];
$sql="INSERT INTO chat(comment,tid,sid,st)
VALUES ($comment,$tid,$sid,'s');";
$sql="INSERT INTO teacher (tname,tid,temail,tbr,tpass)
//VALUES (?,?,?,?,?);";
$db->query($sql) or die("wrong query");



$_SESSION["tid"]=$tid;
$_SESSION["sid"]=$sid;
?>
}
</script>