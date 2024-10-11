<?php 
    include('connection.php') ;
    session_start() ;

    $semester = $_POST["semester"] ;
    $grade = $_POST['grade'] ;
    $subjectID = $_POST['subject_id'] ;

    $query = "UPDATE register set semester = '$semester' , grade = '$grade' where subject_id = '$subjectID' AND student_id = '".$_SESSION["studentID"]."' ; " ;
    $result = mysqli_query($connect , $query) ;

    if($result) {
        echo "<script type='text/javascript'>" ;
        echo "alert('แก้ไขประวัติการลงทะเบียนเรียนสำเร็จ') ; " ;
        echo "window.location = 'register.php' ; " ; 
        echo "</script>" ;
    }
?>