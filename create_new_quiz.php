<html>
    <head>
        <title>Create New Quiz</title>
    </head>
    <body>
        <h2>Choose Chapters</h2>
			<form actions = "new_quiz.php" method = "post">
				<input type = "checkbox" name = "chapter[]" value = "Chapter 1"> Chapter 1 </br>
				<input type = "checkbox" name = "chapter[]" value = "Chapter 2"> Chapter 2 </br>
				<input type = "checkbox" name = "chapter[]" value = "Chapter 3"> Chapter 3 </br>
				<input type = "checkbox" name = "chapter[]" value = "Chapter 4"> Chapter 4 </br>
				<input type = "checkbox" name = "chapter[]" value = "Chapter 5"> Chapter 5 </br>
				</br>Number of Questions: <input type="number" name = "qNum">
				<a href = "new_quiz.php" > <input type="submit" name="submit" value="Submit"></a>
			</form>
    </body>
	
	<?php
		if(isset($_POST['submit'])){
			if(empty(isset($_POST['chapter'])) or empty($_POST['qNum'])) {
				echo("You did not select any chapters or questions");
			}
			else{
				$aChapter = ($_POST["chapter"]);
				$sChapter = "";
				$numQuestion = ($_POST['qNum']);
				$N = count($aChapter);
				echo("You selected $N chapter(s): ") . "</br>";
				for($i=0; $i < $N; $i++){
					echo($aChapter[$i] . " ") .  "</br>";
					
					$sChapter = $sChapter . $aChapter[$i];
					
					if($i < ($N - 1)) {
						$sChapter = $sChapter . ',';
					}
				}
				echo("and $numQuestion question(s) for each chapter"). "<br>";
				$sChapter = str_replace("Chapter ", "", $sChapter);
				
				// check to see if a quiz with these parameters exists and ask if user wants to use old quiz or create new quiz
				// or they can select new parameters
				
				require_once 'login_functions.php';
				$connection = new mysqli($hn, $un, $pw, $db);
		
				if ($connection->connect_error) {
					die($connection->connect_error);
				} 
				
				$query = "SELECT * FROM quizzes 
							WHERE chapters = '" . $sChapter . "' AND number_of_questions = '" . $numQuestion . "'";
				
				// check if query was successful
				$result = $connection->query($query);
				if (!$result) {
					die($connection->error);
				}
				
				// if no result exists, generate new quiz and let user take it
				if ($result->num_rows == 0) {
					echo ("No quiz exists with these parameters") . "<br>";
					// store the new quiz in the quizzes table
					$query = "SELECT MAX(quizID) FROM quizzes";
					$result = $connection->query($query);
					if(!$result) {
						die($connection->error);
					}
					$query = "INSERT INTO quizzes(chapters, number_of_questions)
								VALUES('" . $sChapter . "','" . $numQuestion . "')";
					
					$result = $connection->query($query);
					if(!$result) {
						die($connection->error);
					}
					// button to link to quiz generation
					echo("<a href = \"quiz_creation.php\"> <input type = \"submit\" name = \"Next\" value = \"Next\"></a></br>");
					
				}
				// if a result exists, let user know and give them the option to generate a new quiz or take a previous quiz
				else {
					echo("At least one quiz with these parameters exists already. Would you like to take one of those?") . "<br>"; 
					echo("<a href = \"#\"> <input type = \"submit\" value = \"Yes\"></a></br>");
					// if they select no, store the new quiz in the quizzes table
					echo("<a href = \"quiz_creation.php\"> <input type = \"submit\" value = \"No\"></a></br>");
				}
				
				//close the database connection
				$connection->close();
			}
		}
		
	?>
	</br><a href="home_page.php"> <input type = "submit" value = "Click here to go back" ></a></br>
</html>
