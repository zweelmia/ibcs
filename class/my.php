<?php
include("database.php");

?> 

<html>
<head>
<title>this is my </title>
</head>
<body>

 <form action="my.php" method="post">
  student_id:<br>
  <input type="text" name="student_id">
  <input type="submit" name="submit" value="submit" />
  
</form> 
<?php

if(isset($_REQUEST['submit'])){
	$student_id=$_REQUEST['student_id'];
	//echo "<pre>";
	//print_r($obj->getById("employees","*","emp_id=$student_id"));
	extract($obj->getById("student","*","student_id=$student_id"));
	//echo "</pre>";
}

?>
<table width="200" border="1">
  <tr>
    <td>student_id</td>
    <td><?php echo $student_id; ?></td>
  </tr>
  <tr>
    <td>name</td>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
    <td>email</td>
    <td><?php echo $email; ?></td>
  </tr>
  <tr>
    <td>mobile</td>
    <td><?php echo $mobile; ?></td>
  </tr>
</table>




</body>
</html>