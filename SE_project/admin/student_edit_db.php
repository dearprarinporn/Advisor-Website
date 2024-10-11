<?php 
    include('connection.php') ;

    $student_id = $_POST["id"] ;
    $name = $_POST["name"] ;
    $department = $_POST["department"] ;
    $prefix = $_POST["prefix"] ;

    $query = "UPDATE student set student_name = '$name' , department = '$department' , prefix = '$prefix' where student_id = '$student_id' ; " ;
    $result = mysqli_query($connect , $query) ;

    if($result) {
        echo "<script type='text/javascript'>" ;
        echo "alert('แก้ไขข้อมูลนักศึกษาสำเร็จ') ; " ;
        echo "window.location = 'student_info.php?id=".$student_id."';" ; 
        echo "</script>" ;
    }
?>