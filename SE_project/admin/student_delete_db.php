<?php
    include('connection.php') ;

    $student_id = $_GET["id"] ;

    $query1 = "SELECT * from student where student_id = '$student_id' ; " ;
    $result1 = mysqli_query($connect , $query1) ;
    $row = mysqli_fetch_array($result1) ;
    extract($row) ;

    $query3 = "DELETE FROM register where student_id = '$student_id' ;" ;
    $result3 = mysqli_query($connect , $query3) ;

    $query = "DELETE from student where student_id = '$student_id' ; " ;
    $result = mysqli_query($connect , $query) ;
    
    $query2 = "DELETE from user where email = '$email' ; ";
    $result2 = mysqli_query($connect , $query2) ;
    


    if ($result && $result2 && $result3) {
        echo "<script type='text/javascript'>" ;
        echo "alert('ลบข้อมูลนักศึกษาสำเร็จ') ; " ;
        echo "window.location = 'student_list.php' ; " ;
        echo "</script>" ; 
    }
?>