<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-269481.jpeg" alt="Responsive background-image" >
<center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="form">
<h1><font face="Cooper Black"><font color="white">Welcome <?php echo $_SESSION['username']; ?>!</font></font></h1>
<br/><br/>
<div class="sidebar">
  
  <a href="dashboard.php"><i class="fa fa-fw fa-wrench"></i>Profile</a>
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>

<p><a href="dashboard.php"><font color="yellow">Profile</font></a></p>
<a href="logout.php"><font color="yellow">Logout</font></a>
</div>
</center>
</body>
</html>