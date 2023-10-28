<?php 
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>image</title>
</head>
<?php 
if(isset($_POST['submit'])){
	echo $name=$_POST['username'];
	 	$password = $_POST['password'];
		$confirmPassword = $_POST['confirmpassword'];
		$sql=mysqli_query($con,"INSERT INTO table_image(name,password,confirmpassword)values('$name','$password','$confirmPassword')");
}
?>
<body>
<form method="post" id="registerForm">
	<h1>LOGIN FORM:</h1>
	<label>name:</label>
	<input type="name" name="username"><br><br>

	<label>password:</label>
	<input type="password" name="password" id="password"><br><br>

	<label>confirmPassword</label>
	<input type="password" name="confirmpassword" id="confirmPassword"><br><br>
	<input type="submit" name="submit" value="submit" >

</form>
<script type="text/javascript">
	const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");
function verifyPassword() {
  if (password.value === confirmPassword.value) {
    return true;
  } else {
    return false;
  }
}
const form = document.getElementById("registerForm");
form.addEventListener("submit", function(event) {
  if (!verifyPassword()) {
    event.preventDefault();
    alert("Passwords do not match!");
  }
});

</script>
</body>
</html>