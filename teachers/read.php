<?php 
$sql1="select sno from std where sid='$sid';"
$result1=$db->query($sql1);
list($no)=mysqli_fetch_array_array($result1);
$sql="select sr from chat where sno<='$sno';"
$result=$db->query($sql);
$no=mysqli_num_rows($result);
?>