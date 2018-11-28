<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
  <title>Grade Page</title>
	
</head>
<body>

	<?php
		echo "<h1>This is the quiz grade page</h1>";
		session_start();
		
		require_once 'database_functions.php';
		$connection = create_connection();
		
		// $query = "SELECT answers_a.correct as A, answers_b.correct as B, answers_c.correct as C, answers_d.correct as D, answers_e.correct as E, questions.questionID as ID
				// FROM answers_a, answers_b, answers_c, answers_d, answers_e, questions";
				
		// $result = $connection->query($query);
			// if (!$result) {
				// die($connection->error);
			// }
		
		//var_dump($_POST);
		// need to check if user input is correct answer
		$quesID_array = $_SESSION['QuesID'];
		$numQues = count($quesID_array);
		$total_correct = 0;
		$percent = 0.0;
		//echo count($quesID_array) . "<br>";
		
		for ($i = 0; $i < $numQues; $i++) {
			//echo $quesID_array[$i] . "<br>"; // TESTING
			if($_POST['question_' . $quesID_array[$i]] == $_SESSION['correct' . $quesID_array[$i]]) {
				echo "Question " . $quesID_array[$i] . ": ";
				echo $_POST['question_' . $quesID_array[$i]];
				echo "<br>";
				$total_correct += 1;
			}
			else {
				echo "Question " . $quesID_array[$i] . ": ";
				echo $_POST['question_' . $quesID_array[$i]];
				echo "	WRONG <br>";
			}
		}
		
		echo "Total Correct: " . $total_correct . "<br>";
		$percent = ($total_correct / $numQues) * 100;
		echo "Percent Correct: " . $percent . "% <br>";
		
		$_SESSION['previous_location'] = 'grade.php'; // keep track of previous page
		echo "<a href=\"logout.php\" class=\"btn btn-outline-primary\">logout</a><br>";
		echo "<a href=\"home_page.php\" class=\"btn btn-outline-primary\">Home</a>";
	?>
	
	

</body>
</html>
