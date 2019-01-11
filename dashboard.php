<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
</head>
<body background="photos/pexels-photo-265047.jpeg" alt="Responsive background-image" >
<br/><br/><br/><br/><br/><br/><br/><br/><br/><div>
<center>
<h1>Welcome to Dashboard</h1><br/><br/>
<p><a href="index.php">Home</a>
| <a href="insert.php">Insert New Record</a>
| <a href="view.php">View Records</a>
| <a href="logout.php">Logout</a></p>
</center>
</div>
</body>
</html>