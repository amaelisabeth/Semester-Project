<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
	<title>Log in to Website</title>
</head>
<body class="text-center">
<h1>Welcome to the Intro to SE Quiz Generator!</h1>

	<?php
		require_once 'login_functions.php';
		$connection = new mysqli($hn, $un, $pw, $db);
		
		if ($connection->connect_error) 
			die($connection->connect_error);
		
		if(isset($_POST["username"]) and isset($_POST["password"])) {
			$uname = $_POST["username"];
			$pword = $_POST["password"];
			$query = "SELECT * FROM users 
					WHERE UserID = '" . $uname . "' AND passwd = '" . $pword . "'";
			$result = $connection->query($query);
			if (!$result) 
				die($connection->error);
			
			
			// If username / password are invalid, print error message
			// and keep form filled 
			if ($result->num_rows == 0) {
				echo "<p style=\"color: red\"> The username / password combination is not correct.</p>";
			}
			else 
				//print"Login successful!";
				header('Location: home_page.php');
				//exit();
		}
			
		$connection->close();
		
	?>
	<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
	
			<form method="post" action="login.php">
				<div class="form-group">
					<label for="username" class="text-black">Username:</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label for="password" class="text-black">Password:</label>
					<input type="password" class="form-control" name="password">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary btn-md" value="Login">
				</div>
			</form> 
		</div>
		<p>
		<a href="forgot_password.php" class="btn btn-primary active">Forgot Password</a>
		<a href="create_account.php" class="btn btn-primary active">Create Account</a>
		</p>
	</div>

</body>
</html>