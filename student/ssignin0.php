<html>
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="../teachers/mycss.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../home.php">TsecFileSharing</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../home.php">Home</a></li>
      <li><a href="">MESSAGES </a>
        
       
      </li>
      <li><a href="#">NOTES</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
</div>
<h1 style="text-align:center; color:black;"><strong>SIGN IN FOR STUDENT</strong></h1>
<br>

<div id="mydiv" style="background:none;">
<form action="ssignin0.php">
<span style="color:black;"><strong>
<p>ID      :</p><input type="text" /><br><BR>
<p>PASSWORD:</p><input type="password"></span></strong>
<input type="submit" />
</div>
</form>
</body>
</html>
<?php
$user="root";
$pass="";
$db=new mysqli('localhost',$user,$pass,'db');
//echo "hellllllllllllllllllllllll";
 $sid=$_POST["id"];
$spass=$_POST["pwd"];
// echo $sid;
 //echo $spass;
$sql="select sid from std where sid='$sid' and spass='$spass';";
//  $sql="select tid from teacher where tid='1' and tpass='123456789';";
$result=$db->query($sql);
//if(row["tpass"]==$tpass)
if ($result->num_rows > 0) 
// while(list($tid) = mysqli_fetch_array($result))
{
	
	// echo $sid;
	  SESSION_START();
	$_SESSION['sid']=$sid;
	 header("Refresh:1;url=shome.php");

 }
 else
 {
	   // echo "EITHER YOUR ID OR PASSWORD IS WRONG";
		?>
		<script>
		alert( "EITHER YOUR ID OR PASSWORD IS WRONG");
		</script>
		<?php
		
	 	 header("Refresh:1;url=ssignin.php");

 }
 ?>