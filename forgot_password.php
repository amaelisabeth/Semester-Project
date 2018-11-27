<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <title>Forgot Password PAGE</title>

</head>
<body>
	<h1>Welcome to the Forgot Password Page!</h1>

  <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">

      <form method="post" action="forgot_password.php">
        <div class="form-group">
          <label for="username" class="text-black">Username:</label>
          <input type="text" class="form-control" name="username">
        </div>
  <div class="form-group">
          <input type="submit" class="btn btn-primary btn-md" value="Submit">
        </div>
      </form>
    </div>
    <p style="font-style:italic">

      <a href="login.php" class="btn btn-outline-primary">back</a>
    </p>
  </div>

  <?php
    require_once 'login_functions.php';
    $connection = new mysqli($hn, $un, $pw, $db);

    if ($connection->connect_error)
      die($connection->connect_error);

    if(isset($_POST["username"])) {
      $uname = $_POST["username"];
      $query = "SELECT passwd AS _msg FROM users
          WHERE UserID = '" . $uname . "'";
      $result = $connection->query($query);
      if (!$result){
        die($connection->error);
      }
    }



      // If username / password are invalid, print error message
      // and keep form filled
      if ($result->num_rows == 0) {
        echo "<p style=\"color: red\"> The username not found.</p>";
      }
      else{
        //print"Login successful!";

        $pword = $result->fetch_assoc();
        echo "<p style=\"color: black\"> Your password is '".$pword['_msg']."'";
        //header('Location: home_page.php');
        //exit();
    }

    $connection->close();

  ?>

</body>
</html>
