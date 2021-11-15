<?php
//database connection

$con=mysqli_connect("localhost","root","") or die ("can not connect");
mysqli_select_db($con,'blog_admin_db');
($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost","root","","blog_admin_db"));  //host,user,password,database
?>
