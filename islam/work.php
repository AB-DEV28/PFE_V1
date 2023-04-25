<?php

    include "../includes/functions.php";
    
    $conn = connect();
    $id_User = $_POST['id_User'];
    $number_question = $_POST['number_question'];
    $id_Q = $_POST['id_Q'];
    
    // 
    $list_id_questions = array();
    $list_answers = array();
    $list_notes = array();
    $data_passage=date("Y-m-d");
    $note = 0;

    //For each question get their IDs, answers and check if they are correct
    for ($i = 0; $i <= $number_question; $i++) {
        
        $list_id_questions[] = $_POST['Question_' . $i+1 . ''];
        $list_answers[] = $_POST['answer_Question_' . $i+1 . ''];
        
        $requette = "SELECT * FROM question WHERE id_question='$list_id_questions[$i]'AND answer='$list_answers[$i]'";
        $resultat = $conn->query($requette);
    
        if ($resultat) {
            $er=0;
        }else {
            $er=1;
        }
      
        $tmp_answer = $resultat->fetch();
        if (!empty($tmp_answer)) {
            $R = 1;
            $note=$note+1;
        } else {
            $R = 0;
            $note=$note-1;
        }
        $list_notes[] = $R;
    }
    for ($i = 0; $i <= $number_question; $i++) {
        
        $requette = "INSERT INTO answers_users(id_user,id_question,answer,answer_case) VALUES('" . $id_User . "','" . $list_id_questions[$i] . "','" . $list_answers[$i] . "','" . $list_notes[$R] . "')";
    
        $resultat = $conn->query($requette);
        if( $i == $number_question){
            header('location:passQuizTest.php?id='.$id_Q.'&note='.$note);
        }
        //if ($resultat) {
        //    $er=0;
        //  }else {
        //    $er=1;
        //  }
    }
    


//http://localhost:81/fromgit/PFE_V1/Layout/passQuiz.php?id=14

?>