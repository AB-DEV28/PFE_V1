<?php
// Start session
session_start();
//if (!isset($_SESSION['email'])) {
//    header('location:singIn.php');
//}

$idQ = $_GET['id'];
include '../includes/functions.php';
//$allInfo = getAllInfoQuizById($idQ);
$titleQ = getTitleQuiz($idQ);
$questions = getAllQuestion($idQ);
?>




<!DOCTYPE html>
<html>
<head>
	<title>Quiz Participation Form</title>
	<!-- Include Bootstrap CSS -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>

<body>
	<div class="container">
		<h1>Quiz Participation Form</h1>
		<form method="post" action="passquiz.php">
			<h2><?php echo $titleQ; ?></h2>
			<?php

			// Output each question with choices
			foreach ($questions as $index => $question) {
				?>
				<div class="card">
					<div class="card-header">Question <?php echo $index + 1; ?></div>
					<div class="card-body">
						<p><?php echo $question["title_question"]; ?></p>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="question_<?php echo $index; ?>" value="<?php echo $question["ch1"]; ?>">
								<label class="form-check-label">
									<?php echo $question["ch1"]; ?>
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="question_<?php echo $index; ?>" value="<?php echo $question["ch2"]; ?>">
								<label class="form-check-label">
									<?php echo $question["ch2"]; ?>
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="question_<?php echo $index; ?>" value="<?php echo $question["ch3"]; ?>">
								<label class="form-check-label">
									<?php echo $question["ch3"]; ?>
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="question_<?php echo $index; ?>" value="<?php echo $question["ch4"]; ?>">
								<label class="form-check-label">
									<?php echo $question["ch4"]; ?>
								</label>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		
	</div>
	<!-- Include Bootstrap JS -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>
</html>

