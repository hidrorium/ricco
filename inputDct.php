<!Doctype html>
<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login'] == 1)
{ ?>
<html>
	<head>
		<title>Dictionary Management</title>
		<link rel="stylesheet" type="text/css" href="Style/Style.css">
	</head>
	<body>
		<div class="isi">
			<h3>INPUT DICTIONARY</h3>
			<form id="task" action="" method="POST">
				<table>
					<tr>
						<td><select>
							<option value="">Select Category</option>
						</select>
						</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>ID</td>
						<td>:</td>
						<td><input type="text" name="id" placeholder="ID" /></td>
					</tr>
					<tr>
						<td>Word</td>
						<td>:</td>
						<td><input type="text" name="word" placeholder="Word" /></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" name="input" value="INPUT" /></td>
					</tr>
					<tr>
						<td><input type="submit" name="back" value="BACK" /></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>
<?php 
}
else
{
	echo "Anda belum login, silahkan login dulu.";
	echo "<a href='Login.php'>Login</a>";
}
?>