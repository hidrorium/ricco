<!Doctype html>
<?php
	$id = "admin";
	$pass = "dictionary";
	$a = "0";
	session_start();
	if(isset($_POST['login']))
	{
		$username = $_POST['id'];
		$password = $_POST['pass'];
		if(($username == $id) && ($password == $pass))
		{
			$_SESSION['login'] = 1;
			header('Location: task.php');
		}
		else
		{
			$a = "1";
		}
	}
?>
<html>
	<head>
		<title>Dictionary Management</title>
		<link rel="stylesheet" type="text/css" href="Style/Style.css">
	</head>
	<body>
		<div id="login">
			<h3>Login</h3>
			<form id="fLogin" action="" method="POST">
				<input type="text" name="id" placeholder="Username" />
				<input type="password" name="pass" placeholder="Password" />
				<label><?php  if ($a==1){ echo "<p style='color: #FF0000; font-weight: bold; font-size: 15px;' > Username atau Password Salah! </p>"; } ?></label>
				<input type="submit" name="login" value="LOGIN" />
			</form>
		</div>
	</body>
</html>