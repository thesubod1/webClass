<?php
	require(__DIR__.'/../inc/connection.php');

	if(isset($_POST['login']))
	{
		$uname = $_POST['username'];
		$pwd = $_POST['password'];

		$query = "SELECT * from login Where username ='$uname' AND password = '$pwd'";

		$result=mysqli_query($connection,$query);


		if(mysqli_num_rows($result) != 0)
		{
			header("location:index.php");
			exit;
		}
		else
		{
			echo"nft";
		}
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>login</title>
		<style type="text/css">
			body
			{
				background-color: #502a70;
			}
			.container
			{
				position: absolute;
				top: 40%;
				left: 40%;
				border: solid 2px;
				border-radius: 5px;
				padding: 25px;
				background-color: whitesmoke;
			}
			.button
			{
				display: inline-block;
				padding: 0 20px;
				height: 32px;
				line-height: 30px;

			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="form">
				<form method="post" action="">
					<label>Username:</label>
					<div><input type="text" name="username"/></div>
					<label>password:</label><div><input type="text" name="password"></div>
					<div class="button-section"><input type="submit" name="login" value="login" class="button"></div>
				</form>
			</div>
		</div>
	</body>
</html>