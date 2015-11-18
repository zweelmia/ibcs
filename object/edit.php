<?php
include('database.php');
ob_start();
if(isset($_REQUEST['edit_id'])){
	$student_id=$_REQUEST['edit_id'];
	//echo "<pre>";
	//print_r($obj->getById("students","*","id=$student_id"));
	extract($obj->getById("employees","*","emp_id=$student_id"));
	//echo "</pre>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>add new student</title>
<link rel="stylesheet" href="bootstrap.min.css" type="text/css">
</head>

<body style="width:800px; margin:0 auto;">

<?php
if(isset($_REQUEST['submit'])){
	/*echo "<pre>";
		print_r($_REQUEST);
	echo "</pre>";*/
	
	extract($_REQUEST);
	
	if($obj->Update("employees","emp_name='$name',email='$email',mobile='$mobile',address='$address'","emp_id=$update_id")){
		header('location:sowall.php');
	}
	else{
		echo "<span class='text-danger'>Update Fail</span>";	
	}
}
?>
<form action="insert.php" method="post">
	<table width="100%" border="1" cellpadding="5" class="table table-bordered table-condensed table-hover table-striped table-responsive">
  <tr>
    <th colspan="2" scope="row" class="text-center">Add new Student</th>
    </tr>
  <tr>
    <th scope="row" class="text-right">Name</th>
    <td class="text-right"><input type="text" name="name" class="form-control" value="<?php echo $emp_name; ?>" /></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Email</th>
    <td><input type="text" name="email" class="form-control" value="<?php echo $email; ?>" /></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Mobile</th>
    <td><input type="text" name="mobile" class="form-control" value="<?php echo $mobile; ?>" /></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Address</th>
    <td><textarea name="address" class="form-control" rows="5"><?php echo $address; ?></textarea></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>
    <input type="hidden" name="update_id" value="<?php echo $emp_id; ?>" />
    <input type="submit" name="submit" value="Save" class="btn btn-primary" /></td>
  </tr>
</table>

</form>
</body>
</html>