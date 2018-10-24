
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log in to Website</title>
  <style>
	input {
            margin-bottom: 0.5em;
        }
	</style>
</head>
<body>
<h1>Welcome to the Intro to SE Quiz Generator!</h1>

	<?php
		require_once 'login_functions.php';
		$connection = new mysqli($hn, $un, $pw, $db);
		
		
		if(isset($_POST["username"]) and isset($_POST["password"])) {
			$uname = $_POST["username"];
			$pword = $_POST["password"];
			$query = "SELECT * FROM users 
					WHERE UserID = '" . $uname . "' AND passwd = '" . $pword . "'";
			$result = $connection->query($query);
			if (!$result) 
				die($connection->error);
			else 
				print"Login successful!";
			
			// If username / password are invalid, print error message
			// and keep form filled 
			if ($result->num_rows == 0) {
				echo "<p style=\"color: red\"> The username / password combination is not correct.</p>";
			}
		}
			
		$connection->close();
		
	?>

	<form method="post" action="login.php">
		<label>Username: </label>
		<input type="text" name="username" value="<?php echo $_POST["username"] ?>"> <br>
		<label>Password: </label>
		<input type="password" name="password" value="<?php echo $_POST["password"] ?>"> <br>
		<input type="submit" value="Log in">
	</form>
	
	<p style="font-style:italic">
		Placeholder for "forgot password" link<br><br>
		Placeholder for "create account" link
	</p>

</body>
</html>