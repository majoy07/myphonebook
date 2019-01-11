<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
<br/><br/><div class="form">
<p><a href="index.php">Home</a> 
| <a href="insert.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h2><font face="Britannic Bold">View Records</font></h2>
</div>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>No</strong></th>
<th><strong>Firstname</strong></th>
<th><strong>Surname</strong></th>
<th><strong>Mobile</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["firstname"]; ?></td>
<td align="center"><?php echo $row["surname"]; ?></td>
<td align="center"><?php echo $row["mobile"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</html>
