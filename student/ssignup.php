<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="mycss.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
       <link rel="stylesheet" href="../teachers/mycss.css">

   <script src="myjs.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../home.php">TsecFileSharing</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="../login.php">MESSAGES </a>
        
       
      </li>
      <li><a href="../login.php">notes</a></li>
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


<img src=tsec1.jpg id="i" style="position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;"></img>
<div id="mydiv" style="background:none;color:black;">
<form action="temp.php" method="post" enctype="multipart/form-data">
Name    : <input type="text" name="name" /><br>
id      :<input type="text" name="id" /><br>
branch  : <input type="radio" name="br" value="it"> IT</input> <input type="radio" name="br" value="cs"> CS</input><br>
email   : <input type="text" name="email" /><br>
year    :<input type="text" name="year" /><br>
password:<input type="password" name="pwd">
photo:<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile"> 
<input type="submit" name="upload"/>
</form>

</div>
</body>
</html> 
<script>
