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
	<h1>New Quiz Page</h1>
	
	<?php
		// generate quiz given data from quizzes table
		// ADD RANDOMIZATION LATER
		
		//connect to database
		require_once 'login_functions.php';
		$connection = new mysqli($hn, $un, $pw, $db);
		
		if ($connection->connect_error) {
			die($connection->connect_error);
		}
		
		// Get latest entry in quizzes table because it is the newest quiz to be generated
		$query = "SELECT MAX(quizID) FROM quizzes";
		$result = $connection->query($query);
		if(!$result) {
			die($connection->error);
		}
		
		$row = $result->fetch_assoc();
		$maxID = $row["MAX(quizID)"];
	
		$query = "SELECT * FROM quizzes
				WHERE quizID = '" . $maxID . "'";
		$result = $connection->query($query);
		if(!$result) {
			die($connection->error);
		}
		
		//Get the number of questions from this entry and use that to get that many questions from each chapter
		if ($result->num_rows > 0) {
			// output data of each row
			$row = $result->fetch_assoc();
			//echo "quizID: " . $row["quizID"]. " Chapters: " . $row["chapters"]. " Num of Questions: " . $row["number_of_questions"]. "<br>"; 
		}
		else {
			echo("SOMETHING WENT WRONG");
		}
		$chapter_string = $row["chapters"]; 
		$numQues = $row["number_of_questions"];
		$numQues = (int)$numQues;
		//echo("Num of Questions: " ). $numQues; // Here for testing
		
		//split chapters string up
		$chapter_array = explode(",", $chapter_string); // this gives an array with each element being a chapter 
		
		
		//query database to get the questions from the given chapters
		$queries[] = ""; // an empty array to be filled with queries
		for ($i = 0; $i < count($chapter_array); $i++) {
			$queries[$i] = "SELECT * FROM questions
						WHERE chapter = '" . $chapter_array[$i] . "'";
		}
		
		$results[] = "";
		$rows[] = "";
		$questionID_array = array(array()); // Multidimensional array that contains the questionIDs for each chapter
		$questions_array = array(array());
		
		for ($i = 0; $i < count($queries); $i++) {
			$results[$i] = $connection->query($queries[$i]);
			if(!$results[$i]) {
				die($connection->error);
			}
			$count = 0;
			// Select only the number of questions needed for this quiz
			while($rows[$i] = $results[$i]->fetch_assoc() and ($count < $numQues)) {
				//echo("questionID: " . $rows[$i]["questionID"] . " "); // for testing. Make a while look where condition is the line right above this
				$questionID_array[$i][$count] = $rows[$i]["questionID"];
				$questions_array[$i][$count] = $rows[$i]["question"];
				$count++;
			}
		}
		
		for ($i = 0; $i < count($chapter_array); $i++) {
			$queries[$i] = "SELECT * FROM answers_a, questions
							WHERE answers_a.questionID = questions.questionID AND questions.chapter = '" . $chapter_array[$i] . "' UNION
							SELECT * FROM answers_b, questions
							WHERE answers_b.questionID = questions.questionID AND questions.chapter = '" . $chapter_array[$i] . "' UNION
							SELECT * FROM answers_c, questions 
							WHERE answers_c.questionID = questions.questionID AND questions.chapter = '" . $chapter_array[$i] . "' UNION
							SELECT * FROM answers_d, questions
							WHERE answers_d.questionID = questions.questionID AND questions.chapter = '" . $chapter_array[$i] . "' UNION
							SELECT * FROM answers_e, questions
							WHERE answers_e.questionID = questions.questionID AND questions.chapter = '" . $chapter_array[$i] . "'";	
		}
		$answerID_array = array(array()); 
		$answers_array = array(array()); // hold the answers for each question
		
		for ($i = 0; $i < count($queries); $i++) {
			$results[$i] = $connection->query($queries[$i]);
			if(!$results[$i]) {
				die($connection->error);
			}
			$count = 0;
			// Select only the number of questions needed for this quiz
			while($rows[$i] = $results[$i]->fetch_assoc() and ($count < $numQues)) {
				//echo("questionID: " . $rows[$i]["questionID"] . " "); // for testing. Make a while look where condition is the line right above this
				$answers_array[$i][$count] = $rows[$i]["answer"];
				echo $answers_array[$i][$count] . "<br>";
				$count++;
			}
		}
		
		
		// Testing. Checking if array made correctly
		echo "<form action = \"grade.php\" method = \"post\" id = \"quiz\">";
		
		for($i = 0; $i < count($queries); $i++) {
			echo("Chapter " . $chapter_array[$i] . "<br>");
				for($j = 0; $j < $numQues; $j++) {
					//echo($questions_array[$i][$j] . "<br>");
					echo ($j + 1) . ") " . $questions_array[$i][$j] . "<br>";
					for($k = 0; $k < count($answers_array[$i][$j]); $k++) {
						echo "STUFF HERE <br>";
						//echo "<input type = \"radio\" name = \"response\" value = " . $answers_array[$i][$k] . "><br>";
					}
					
				}
			}
			
		echo "</form>";
		
		// When making the form for the quiz, query database to get the answers for each.
		// Union the databases where questionIDs match

		// Populating form
		// while loop through ($rows[$i] = $results[$i]->fetch_assoc() and ($count < $numQues))
		// form entries in while loop 
		
	
		
		//Close database connection
		$connection->close();
	?>

	<p style="font-style:italic">
		<a href="create_new_quiz.php" class="btn btn-outline-primary">back</a>
	</p>


</body>
</html>
