<?php
include '../includes/functions.php';
// Start session
session_start();


if (!isset($_SESSION['email'])) {
	header('location:../singIn.php');
}

$idQ = $_GET['id'];



$titleQ = getTitleQuiz($idQ);
$questions = getAllQuestion($idQ);
$quiz = getQuizById($idQ);

//print_r($quiz);
?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

	<title>Quizy</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../css/dashboard.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php">Quizy</a>
		<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap">
				<a class="nav-link" href="../includes/logOut.php">Sign out</a>
			</li>
		</ul>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<!-- main Quiz -->
			<div class="container">
				<h1>Quiz Participation Form</h1>
				<!-- alert note -->
				<?php
                    if (isset($_GET['note'])) {
						$note=$_GET['note'];
                        print '
                    	<div class="alert alert-success">
                    		note is '.$note.'
                    	</div>';
                    }
                ?>
				<form method="POST" action="work.php">
                <input type="hidden" name="id_User" value="<?php echo $id_User; ?>">
                <input type="hidden" name="id_Q" value="<?php echo $idQ; ?>">
					<h2><?php echo $titleQ; ?></h2>
					<?php

					// Output each question with choices
					foreach ($questions as $index => $question) {
					?>
						<div class="card">
							<div class="card-header">Question <?php echo $index + 1; ?></div>
							<div class="card-body">
                                <input type="hidden" name="Question_<?php echo $index + 1; ?>" value="<?php echo $question["id_question"]; ?>">
								
                                <p><?php echo $question["title_question"]; ?></p>
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index + 1; ?>" value="<?php echo $question["ch1"]; ?>">
										<label class="form-check-label">
											<?php echo $question["ch1"]; ?>
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index + 1; ?>" value="<?php echo $question["ch2"]; ?>">
										<label class="form-check-label">
											<?php echo $question["ch2"]; ?>
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index + 1; ?>" value="<?php echo $question["ch3"]; ?>">
										<label class="form-check-label">
											<?php echo $question["ch3"]; ?>
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="answer_Question_<?php echo $index + 1; ?>" value="<?php echo $question["ch4"]; ?>">
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
                    <input type="hidden" name="number_question" value="<?php echo $index; ?>">
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>


		</div>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
	</script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

	<!-- Icons -->
	<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
	<script>
		feather.replace()
	</script>
	<!-- Graphs -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>

	<!--  -->
	<script data-timeout="<?php //echo $timeout; ?>">
    // Set the session timeout in seconds
    const timeout = parseInt(document.currentScript.dataset.timeout);; // Change this value to set the desired session timeout in seconds

    // Set the session start time
    
      //setTimeout(() => {
      //  window.location.href = 'http://localhost:81/fromgit/PFE_V1/index.php';
      //}, timeout);
    
  </script> 
  
</body>

</html>