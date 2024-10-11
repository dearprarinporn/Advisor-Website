<?php 
    include('connection.php') ;

    $teacherid = $_POST["id"] ;

    $teacher_name = $_POST["name"] ;
    $academic_position = $_POST['academic_position'] ;

    $query = "UPDATE teacher set teacher_name = '$teacher_name' , academic_position = ' $academic_position' where teacher_id = '$teacherid' ; ";
        $result = mysqli_query($connect , $query) ;

    if($result) {
        echo "<script type='text/javascript'>" ;
        echo "alert('แก้ไขข้อมูลอาจารย์สำเร็จ') ; " ;
        echo "window.location = 'teacher_list.php' ; " ; 
        echo "</script>" ;
    }
?>