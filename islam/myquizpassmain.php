<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My resutls</h1>
        <!-- add quiz -->
        <div>

            <a class="btn btn-primary" data-toggle="modal" data-target="#addQuiz">Add an quiz</a>
        </div>
    </div>
    <!-- list quiz -->
    <div><?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:../singIn.php');
}

include '../includes/functions.php';


$id_U = $_SESSION['id_user'];
$conn = connect();

$requette = "SELECT  pass_quiz.id_quiz, quiz.title_quiz, quiz.quiz_description, pass_quiz.note , pass_quiz.date   FROM pass_quiz INNER JOIN quiz ON quiz.id_quiz=pass_quiz.id_quiz WHERE pass_quiz.id_user = $id_U";
$resultat =$conn->query($requette);
$quizs =$resultat->fetchAll();

//print_r($quizs[0]);

//foreach ($quizs as $index => $quiz) {
//    print_r($quizs[$index]);
//    print('</br>');
//}

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
    <!-- navbar -->
    <?php include '../includes/NavbarWithSearch.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <?php include '../includes/sidebar.php'; ?>
            <!-- main Quiz -->
            <?php

            include '../islam/myquizpassmain.php';

            ?>

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

</body>

</html>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title quiz</th>
                    <th scope="col">Description</th>
                    <th scope="col">Note</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($quizs as $quiz) {
                    $i++;
                    print '
                              <tr>
                                <th scope="row">' . $i . '</th>
                                <td>' . $quiz['title_quiz'] . '</td>
                                <td>' . $quiz['quiz_description'] . '</td>
                                <td>' . $quiz['note'] . '</td>
                                <td>' . $quiz['date'] . '</td>
                                <td>
                                    <a class="btn btn-danger" href="../islam/view_result.php?id=' . $quiz['id_quiz'] . '">View result</a>
                                </td>
                              </tr>
                                       ';
                }
                ?>
            </tbody>
        </table>
    </div>

</main>