<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:singIn.php');
}
$idQ = $_GET['idQ'];
include '../includes/functions.php';
//$quizs = getAllQuizsOfUser($_SESSION['id_user']);
$questions = getAllQuestion($idQ);


$urlQ = getUrlQuiz($idQ);
$titleQ = getTitleQuiz($idQ);


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
<?php include '../includes/NavbarWithoutSearch.php';?>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <?php include '../includes/sidebar.php'; ?>
            <!-- main Quiz -->

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><?php echo  $titleQ ?></h1>
                    <!-- url -->
                    <div>
                        <table>
                            <tr>
                                <td>
                                    <input class="form-control" id="url" type="text" value="<?php echo $urlQ ?>">
                                </td>
                                <td>
                                    <button onclick="copyContent(' url ')" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- add question -->
                    <div>

                        <a class="btn btn-primary" data-toggle="modal" data-target="#addQuestion">Add question</a>
                    </div>
                </div>

                <!-- alerts -->
                <div>
                    <!-- alert delete -->
                    <?php
                    if (isset($_GET['deleteQuestion']) && $_GET['deleteQuestion'] == 'ok') {
                        print '
                    <div class="alert alert-success">
                    Question deleting successfuly
                    </div>';
                    }
                    ?>
                    <!-- alert add -->
                    <?php
                    if (isset($_GET['addQuestion']) && $_GET['addQuestion'] == 'ok') {
                        print '
                    <div class="alert alert-success">
                    Question add successfuly
                    </div>';
                    }
                    ?>
                    <!-- alert edit -->
                    <?php
                    if (isset($_GET['edidQuestion']) && $_GET['edidQuestion'] == 'ok') {
                        print '
                    <div class="alert alert-success">
                    Question edit successfuly
                    </div>';
                    }
                    ?>
                </div>
                <!-- list question -->
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title Question</th>
                                <th scope="col">choice 1</th>
                                <th scope="col">choice 2</th>
                                <th scope="col">choice 3</th>
                                <th scope="col">choice 4</th>
                                <th scope="col">answer</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;

                            foreach ($questions as $question) {
                                $i++;

                                print '
              <tr>
                <th scope="row">' . $i . '</th>
                <td>' . $question['title_question'] . '</td>
                <td>' . $question['ch1'] . '</td>
                <td>' . $question['ch2'] . '</td>
                <td>' . $question['ch3'] . '</td>
                <td>' . $question['ch4'] . '</td>
                <td>' . $question['answer'] . '</td>
                <td>
                    <a class="btn btn-success" data-toggle="modal" data-target="#editQuestion' . $question['id_question'] . '">Edit</a>
                    <a class="btn btn-danger" href="deleteQuestion.php?id_Question=' . $question['id_question'] . '">Delete</a>
                </td>
              </tr>
                       ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </main>
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

    <!-- copyContent  -->
    <script src="../js/copyContent.js"></script>

    <!-- Modal addQuestion -->
    <div class="modal fade" id="addQuestion" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Add question </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../includes/addquestion.php" method="post">
                        <input type="hidden" name="idQ" value="<?php echo  $idQ ?>">
                        <div class="form-group">
                            <input type="text" name="title_question" class="form-control" placeholder="Title of a question.">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch1" class="form-control" placeholder="choice 1.">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch2" class="form-control" placeholder="choice 2.">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch3" class="form-control" placeholder="choice 3.">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch4" class="form-control" placeholder="choice 4.">
                        </div>
                        <div>
                            <select name="answer" class="form-select form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="ch1">choice 1</option>
                                <option value="ch2">choice 2</option>
                                <option value="ch3">choice 3</option>
                                <option value="ch4">choice 4</option>
                            </select>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal editQuestions -->
    <?php
    foreach ($questions as $index => $question) { ?>
    <!-- Modal editQuestion -->
    <div class="modal fade" id="editQuestion<?php echo $question['id_question']; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit question </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="editquestion.php" method="post">
                        <input type="hidden" name="idQ" value="<?php echo  $idQ ?>">
                        <div class="form-group">
                            <input type="text" name="title_question" class="form-control" placeholder="<?php echo $questions[''];?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch1" class="form-control" placeholder="choice 1.">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch2" class="form-control" placeholder="choice 2.">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch3" class="form-control" placeholder="choice 3.">
                        </div>
                        <div class="form-group">
                            <input type="text" name="ch4" class="form-control" placeholder="choice 4.">
                        </div>
                        <div>
                            <select name="answer" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="ch1">choice 1</option>
                                <option value="ch2">choice 2</option>
                                <option value="ch3">choice 3</option>
                                <option value="ch4">choice 4</option>
                            </select>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php  }

?>

    <!--  -->

</body>

</html>