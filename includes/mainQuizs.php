<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quizs</h1>
        <!-- add quiz -->
        <div>

            <a class="btn btn-primary" data-toggle="modal" data-target="#addQuiz">Add an quiz</a>
        </div>
    </div>
    <!-- alerts -->
    <div>
        <!-- alert delete -->
        <?php
        if (isset($_GET['delete']) && $_GET['delete'] == 'ok') {
            print '
                        <div class="alert alert-success">
                        quiz deleting successfuly
                    </div>';
        }
        ?>
        <!-- alert add -->
        <?php
        if (isset($_GET['addQ']) && $_GET['addQ'] == 'ok') {
            print '
                        <div class="alert alert-success">
                        quiz add successfuly
                    </div>';
        }
        ?>
        <!-- alert edit -->
        <?php
        if (isset($_GET['edidQ']) && $_GET['edidQ'] == 'ok') {
            print '
                        <div class="alert alert-success">
                        quiz edit successfuly
                    </div>';
        }
        ?>
    </div>
    <!-- list quiz -->
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title quiz</th>
                    <th scope="col">Description</th>
                    <th scope="col">URL</th>
                    <th scope="col">Situation quiz</th>
                    <th scope="col">Number of questions</th>
                    <th scope="col">Quiz duration</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($quizs as $quiz) {
                    $i++;
                    $idEL = "url" . $i;
                    if ($quiz['situation_quiz'] == 0) {
                        $situation_quiz = 'public';
                    } else {
                        $situation_quiz = 'private';
                    }

                    print '
                              <tr>
                                <th scope="row">' . $i . '</th>
                                <td>' . $quiz['title_quiz'] . '</td>
                                <td>' . $quiz['quiz_description'] . '</td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <input class="form-control" id="url' . $i . '" type="text" value="' . $quiz['url_quiz'] . '">
                                            </td>
                                            <td>
                                                <button onclick="copyContent(\'' . $idEL . '\')" class="btn btn-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>' . $situation_quiz . '</td>
                                <td>' . numerQuestionQuiz($quiz['id_quiz']) . '</td>
                                <td>' . $quiz['quiz_duration'] . '</td>
                                <td>
                                    <a class="btn btn-success" data-toggle="modal" data-target="#editQuiz' . $quiz['id_quiz'] . '">Edit</a>
                                    <a class="btn btn-success" href="../includes/manageQuiz.php?idQ=' . $quiz['id_quiz'] . '">Manage</a>
                                    <a class="btn btn-danger" href="../includes/deleteQuiz.php?idQ=' . $quiz['id_quiz'] . '">Delete</a>
                                    <a class="btn btn-danger" href="../includes/view_result.php?idQ=' . $quiz['id_quiz'] . '">View result</a>
                                </td>
                              </tr>
                                       ';
                }
                ?>
            </tbody>
        </table>
    </div>

</main>