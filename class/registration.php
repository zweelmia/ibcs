<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link href="bootstrap-3.3.5-dist/css/bootstrap.min.css"rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>

<body style="width:600px; margin:0 auto">
<form action="registration.php" method="post">
<table class="table table-bordered table-condensed table-hover table-striped table-responsive">
  <tr>
    <th colspan="2" scope="row" class="text-center">User Registration</th>
  </tr>
  <tr>
    <th width="153" scope="row" class="text-right">Name</th>
    <td width="231"><span id="sprytextfield1">
    <input type="text" name="name" id="name" class="form-control" />
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Email</th>
    <td><span id="sprytextfield2">
      <input type="text" name="email" id="email" class="form-control" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Mobile</th>
    <td><input type="text" name="mobile" id="mobile" class="form-control" /></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Address</th>
    <td><span id="sprytextarea1">
    <textarea name="address" id="address" cols="45" rows="5" class="form-control"></textarea>
    <span id="countsprytextarea1">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Country</th>
    <td><select name="country" id="country" class="form-control">
      <option value="Bangladesh">Bangladesh</option>
      <option value="India">India</option>
      <option value="Pakistan">Pakistan</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Gender</th>
    <td><input type="radio" name="gender" id="gender"  value="Male" />
      Male&nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="Female" />
      Female</td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Password</th>
    <td><span id="sprypassword1">
    <input type="password" name="password" id="password" class="form-control" />
    <span class="passwordRequiredMsg">A value is required.</span><span class="passwordInvalidStrengthMsg">The password doesn't meet the specified strength.</span></span></td>
  </tr>
  <tr>
    <th scope="row" class="text-right">Confirm Password</th>
    <td><input type="password" name="confirm_password" class="form-control" id="confirm_password" /></td>
  </tr>
  <tr>
  <td colspan="2" class="text-center"><input type="submit" name="submit" class="btn btn-primary" value="Register Now" /></td>
  </tr>
</table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {minChars:2, validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {validateOn:["change"], maxChars:150, counterType:"chars_count", counterId:"countsprytextarea1"});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minAlphaChars:1, minNumbers:1, validateOn:["blur", "change"]});
</script>
</body>
</html>