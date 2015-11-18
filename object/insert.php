<?php
include('database.php');
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>new student</title>
<link rel="stylesheet" href="bootstrap.min.css" type="text/css">
</head>

<body style="width:800px; margin:0 auto;">

<?php
if(isset($_REQUEST['submit'])){
	/*echo "<pre>";
		print_r($_REQUEST);
	echo "</pre>";*/
	
	extract($_REQUEST);
	
	if($obj->Insert("employees","emp_name='$name',email='$email',mobile='$mobile',address='$address'")){
		header('location:sowall.php');
	}
	else{
		echo "<span class='text-danger'>Insert Fail</span>";	
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
    <td class="text-right"><input type="text" name="name" class="form-control" /></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Email</th>
    <td><input type="text" name="email" class="form-control" /></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Mobile</th>
    <td><input type="text" name="mobile" class="form-control" /></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Address</th>
    <td><textarea name="address" class="form-control" rows="5"></textarea></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td><input type="submit" name="submit" value="Save" class="btn btn-primary" /></td>
  </tr>
</table>

</form>
</body>
</html>