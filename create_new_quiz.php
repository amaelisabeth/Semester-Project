<html>
    <head>
        <title>Create New Quiz</title>
    </head>
    <body>
        <h2>Choose Chapters</h2>
			<form actions = "/new_quiz.php" method = "post">
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
		
			
		
			if(empty(isset($_POST['chapter']))){
				echo("You did not select any chapters");
			}
			
			else{
				$aChapter = ($_POST["chapter"]);
				$N = count($aChapter);
				echo("You selected $N chapter(s): ") . "</br>";
				for($i=0; $i < $N; $i++){
					echo($aChapter[$i] . " ") .  "</br>";
				}	
				
			}
		}
	?>
	<a href = "quiz_creation.php"> <input type = "submit" value = "Next"></a></br>
	</br><a href="index.php"> <input type = "submit" value = "Click here to go back" ></a></br>
</html>





