<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="style.css" />
</head>
<body background="photos/pexels-photo-317355.jpeg" alt="Responsive background-image" >
<br/><br/><br/><br/>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['submit']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$firstname =$_POST['firstname'];
$surname =$_POST['surname'];
$mobile =$_POST['mobile'];
$update="update new_record set
firstname='".$firstname."', surname='".$surname."',
mobile='".$mobile."' where id='".$id."'";
mysqli_query($con, $update); 
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="firstname" placeholder="Enter Name" 
required value="<?php echo $row['firstname'];?>" /></p>
<p><input type="text" name="surname" placeholder="Enter surname" 
required value="<?php echo $row['surname'];?>" /></p>
<p><input type="text" name="mobile" placeholder="Enter number" 
required value="<?php echo $row['mobile'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>