<?php 
session_start();
require "js/i.php";
$qid = "";
$qtext ="";
$correctans = "";
$useranswer = "";
$errors = array();
if(isset($_POST['continue_btn'])){
    $qid = mysqli_real_escape_string($con, $_POST['numb']);
    $qtext = mysqli_real_escape_string($con, $_POST['question']);
    $correctans = mysqli_real_escape_string($con, $_POST['answer']);
    $useranswer = mysqli_real_escape_string($con, $_POST['userAns']);
    // $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    if(count($errors) === 0){
        $insert_data = "INSERT INTO report (qid, qtext, correctans, useranswer)
                        values('$qid', '$qtext','$correctans', '$userans')";
        $data_check = mysqli_query($con, $insert_data);
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
?>