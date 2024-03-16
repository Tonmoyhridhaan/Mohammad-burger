<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<title>York Burger & Pizza login</title>
    <link rel="icon" type="image/x-icon" href="images/favicon-32x32.png">
	<link rel="stylesheet" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<div class="box">
		<form autocomplete="off" method="POST">
			<div class="imgBox">
				<img src="images/favicon.ico">
			</div>
			<h2>Sign in</h2>
			<div class="inputBox">
				<input type="text" required="required" name="username">
				<span>Userame</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name="password">
				<span>Password</span>
				<i></i>
			</div>
			
			<input type="submit" value="Login" name="submit">
			<span id="error"></span>
		</form>
		
		
		<?php 
		if(isset($_POST['submit'])){
			$user = $_POST['username'];
			$pass = md5(sha1($_POST['password']));

			include "connection.php";
			$sql  = "SELECT * FROM admins WHERE username = '$user' AND password = '$pass'";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($result);

			if($row){
				echo "<script type='text/javascript'>
					alert('Login Successful');
				</script>";
				header('Location: admin/admin.php');
			}else{
				echo "<script type='text/javascript'>
						document.getElementById('error').innerHTML = 'wrong username or password';
						document.getElementById('error').style.color = 'red';
					</script>";
			}

		}
		?>
	</div>
</body>
</html>