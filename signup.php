
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body style="background-color:black;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">TsecFileSharing</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="login.php">MESSAGES </a>
        
       
      </li>
      <li><a href="login.php">NOTES</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div style="position:absolute;margin-left:450px;margin-top:100px;">
 <a href="student/ssignup.php" ><img src="student.jpg" width="150" height="150"></img></a>
 <br>
 <a href="student/ssignup.php">STUDENT</a>
 </div>
 <div style="position:absolute;margin-left:650px;margin-top:100px;">
  <a href="teachers/tsignup.php"><img src="teacher.png"  width="150" height="150"></></img></a><br>
 <a href="teachers/tsignup.php"><strong>TEACHER<strong></a>
 </div>
 </body>
 </html>