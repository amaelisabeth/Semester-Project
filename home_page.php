<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
  <title>HOME PAGE</title>
	
</head>
<body>
	<div class="col">
	
		<h1>Welcome to the Home Page!</h1>
		<ul class="nav flex-column">
			<li class="nav-item">
				<a href="create_new_quiz.php" class="btn btn-primary">Create New Quiz</a><br><br>
			</li>
			<li class="nav-item">
				<?php
					session_start();
					$_SESSION['previous_location'] = 'homepage';
				?>
				<a href="pre_gen_quiz.php" class="btn btn-primary">Placeholder for "old quizzes" link</a><br><br>
			</li>
		</ul>
		
		<a href="logout.php" class="btn btn-outline-primary">logout</a>
	</div>


</body>
</html>
