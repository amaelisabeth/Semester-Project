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
		
		
		//var_dump($_POST);
		// need to check if user input is correct answer
		$quesID_array = $_SESSION['QuesID'];
		$numQues = count($quesID_array);
		$total_correct = 0;
		$percent = 0.0;
		//echo count($quesID_array) . "<br>";
		
		for ($i = 0; $i < $numQues; $i++) {
			//echo $quesID_array[$i] . "<br>"; // TESTING
			if (isset($_POST['question_' . $quesID_array[$i]])) {
				if($_POST['question_' . $quesID_array[$i]] == $_SESSION['correct' . $quesID_array[$i]]) {
					echo "<p>Question " . ($i + 1) . "<br> ";
					echo "Your Answer: " . $_POST['question_' . $quesID_array[$i]];
					echo "<br><font color=\"blue\"> CORRECT </font></p>";
					$total_correct += 1;
				}
				else {
					echo "<p>Question " . ($i + 1). "<br> ";
					echo "Your Answer: " . $_POST['question_' . $quesID_array[$i]];
					echo "<br><font color=\"red\">	WRONG </font><br>";
					echo "Correct Answer: " . $_SESSION['correct' . $quesID_array[$i]] . "</p>"; 
				}
			}
			else {
				echo "<p>Question " . ($i + 1). "<br> ";
					echo "<font color=\"red\">You did not answer this question </font><br>";
					echo "Correct Answer: " . $_SESSION['correct' . $quesID_array[$i]] . "</p>";
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
