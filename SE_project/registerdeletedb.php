<?php 
    include('connection.php') ;
    session_start();

    $subjectID = $_GET["subject_id"] ;

    $query = "DELETE FROM register where subject_id = '$subjectID' AND student_id = '".$_SESSION["studentID"]."' ; " ;
    $result = mysqli_query($connect , $query) ;

    if($result) {
        echo "<script type='text/javascript'>" ;
        echo "alert('ลบประวัติการลงทะเบียนเรียนสำเร็จ') ; " ;
        echo "window.location = 'register.php' ; " ; 
        echo "</script>" ;
    }
?>