<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<!-- Bootstrap CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <title>Pre-Made Quizzes</title>
</head>
<body>
	<?php
		session_start();
		//create connection to database
			require_once 'database_functions.php';
			$connection = create_connection();
		if($_SESSION['previous_location'] == 'create_new_quiz') {
			// get last entry in quizzes table
			$query = "SELECT MAX(quizID) FROM quizzes";
			$result = $connection->query($query);
			if(!$result) {
				die($connection->error);
			}
			
			$row = $result->fetch_assoc();
			$maxID = $row["MAX(quizID)"];
		
			// Drop the latest entry of quizzes table because we don't want it
			$query = "DELETE FROM quizzes
					WHERE quizID = '" . $maxID . "'";
			$result = $connection->query($query);
			if(!$result) {
				die($connection->error);
			}
			
			// Need to only query for entries that match parameters from previous page
			
			// for tetsing
			//echo "Chapters: " . $_SESSION['chapters'] . "<br>";
			//echo "Number of Questions: " . $_SESSION['numQues'] . "<br>";
			
			$query = "SELECT * FROM quizzes 
					WHERE chapters = '" . $_SESSION['chapters'] . "' AND number_of_questions = '" . $_SESSION['numQues'] . "'";
			$result = $connection->query($query);
			if(!$result) {
				die($connection->error);
			}
		}
		else if($_SESSION['previous_location'] == 'homepage') {
				$query = "SELECT * FROM quizzes";
				$result = $connection->query($query);
				if(!$result) {
					die($connection->error);
				}
			}
	?>
	<h1>Welcome to the Previously Generated Quizzes Page!</h1>
    <h2>Pick a previously generated quiz from the options below, 
        <a href="create_new_quiz.php">create</a> your own, or go <a href="home_page.php">home</a>.
    </h2>
	
<div class="container">
	<div class="row justify-content-center align-items-center">
		<h3>Quizzes Available</h3>
		<table class="table table-striped">
		<thead>
		  <tr>
			<th>Quiz</th>
			<th>Chapters</th>
			<th>Questions</th>
			<th>Selection</th>
		  </tr>
		</thead>
		<tbody>
		<form action="quiz_creation.php" method="post">
		<?php
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo 	"<td>" . $row['quizID'] . "<td>";
			echo	"<td>" . $row['chapters'] . "<td>";
			echo	"<td>" . $row['number_of_questions'] . "<td>";
			echo	"<td> <div class=\"radio\"> <label><input type=\"radio\" name=\"optradio\"></label></div></td>";
			echo "</tr>";
		}
		?>
		</tbody>
	  </table>
	  <div class="form-group">
			<?php 
				$_SESSION['previous_location'] = 'pre_gen_quiz'; 
				// need to pass quizID via session
			?>
			
			<input type="submit" name="submit" class="btn btn-primary btn-rt" value="submit"></input>

		</div>
		</form>
	</div>
	
</div>

    
    
    
	<p style="font-style:italic">
		<a href="logout.php"> <input type= "submit" value= "logout"></a>
	</p>

<?php
	//close database connection
	$connection->close();
?>

</body>
</html>