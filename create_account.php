<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <title>Create Account PAGE</title>

</head>
<body>
	<h1>Welcome to the Create Account Page!</h1>


  <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">

			<form method="post" action="create_account.php">
				<div class="form-group">
					<label for="username" class="text-black">Username:</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label for="password" class="text-black">Password:</label>
					<input type="password" class="form-control" name="password">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary btn-md" value="Submit">
				</div>
			</form>
		</div>
	</div>
  <p style="font-style:italic">
		<a href="login.php" class="btn btn-outline-primary">back</a>
	</p>

  <?php

		require_once 'login_functions.php';
		$connection = new mysqli($hn, $un, $pw, $db);

		if ($connection->connect_error)
			die($connection->connect_error);

		if(isset($_POST["username"]) and isset($_POST["password"])) {
      $flag = 0;
			$uname = $_POST["username"];
			$pword = $_POST["password"];
			$query = "INSERT INTO users (UserID, passwd, type) VALUES ('".$uname."','".$pword."', 1)";
			$result = $connection->query($query);
      //$res = $connection->commit();
			if (!$result)
				die($connection->error);

      $query2 = "SELECT passwd AS _msg FROM users
          WHERE UserID = '" . $uname . "'";
      $result2 = $connection->query($query2);
      if (!$result2){
        die($connection->error);
      }

      if ($result2->num_rows == 0) {
        echo "<p style=\"color: red\"> The username not found.</p>";
      }
      else{
        //print"Login successful!";

        $pwordCheck = $result2->fetch_assoc();
        if ($pword == $pwordCheck["_msg"]){
          $flag = 1;
        }
        //header('Location: home_page.php');
        //exit();
      }

      if ($flag == 1){
        echo "<p style=\"color: red\"> Account successfully created.</p>";
      }

		}

		$connection->close();

	?>

</body>
</html>
