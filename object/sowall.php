<?php
include("database.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>

<body style="width:800px; margin:0 auto">

<?php
if(isset($_REQUEST['c_del_id'])){
$c_dell_id=$_REQUEST['c_del_id'];
if($obj->Delete("employees","emp_id=$c_dell_id")){
echo "<span class='text-success'>Delete Success</span>";
}
else{
echo "<span class='text-warning'>Delete Fail!</span>";
}
}

if(isset($_REQUEST['del_id'])){
$del_id=$_REQUEST['del_id'];
?>
<span class="text-warning" style="font-weight:bold">Do you want to Delete?</span><a class="btn btn-danger" href="sowall.php?c_del_id=<?php echo $del_id; ?>">Yes</a>&nbsp;&nbsp;<a class="btn btn-success" href="sowall.php">No</a>

<?php
}
?>


<table class="table table-bordered table-condensed table-hover table-striped table-responsive">
<tr>
<th scope="col">SL no.</th>
<th scope="col">emp_Name</th>
<th scope="col">Email</th>
<th scope="col">Mobile </th>
<th scope="col">Address</th>
<th scope="col">Action</th>
</tr>
<?php
$student=$obj->getAll("employees","*");

$sl=1;
foreach($student as $employees){
?>
<tr>
<td><?php echo $sl++;?></td>
<td><?php echo $employees['emp_name']; ?></td>
<td><?php echo $employees['email']; ?></td>
<td><?php echo $employees['mobile']; ?></td>
<td><?php echo $employees['address']; ?></td>
<td>
<a class="btn btn-info glyphicon glyphicon-pencil" href="edit.php?edit_id=<?php echo $employees['emp_id']; ?>">edit</a>&nbsp;

<a class="btn btn-danger glyphicon glyphicon-remove" href="sowall.php?del_id=<?php echo $employees['emp_id']; ?>">delete</a></td>

</td>
</tr>
<?php
}
?>
<tr>
 <td colspan="6" class="text-right"><a class="btn btn-success" href="insert.php">Add New Student</a></td>
 
</tr>
</table>

</body>
</html>