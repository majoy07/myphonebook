<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $firstname =$_REQUEST['firstname'];
    $surname = $_REQUEST['surname'];
    $mobile = $_REQUEST['mobile'];
    $ins_query="insert into new_record (firstname,surname,mobile) values
    ('$firstname','$surname','$mobile')";
    mysqli_query($con,$ins_query)
    or die(mysqli_affected_rows());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
</head>
<body background="photos/pexels-photo-317355.jpeg" alt="Responsive background-image" >
<br/><br/><br/><br/><div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h2><font face="Britannic Bold">Insert New Record</font></h2>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="firstname" placeholder="Enter Name" required /></p>
<p><input type="text" name="surname" placeholder="Enter surname" required /></p>
<p><input type="text" name="mobile" placeholder="Enter number" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>