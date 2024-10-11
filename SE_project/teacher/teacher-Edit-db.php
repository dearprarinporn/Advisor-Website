<body>
    <?php  session_start();
    include('navbar_teacher.php') ;
    include('../connection.php') ;

    $name = $_POST["name"] ;
    $academic_position = $_POST["academic_position"] ;

    $sql = "UPDATE teacher set teacher_name = '$name' , academic_position = '$academic_position' where teacher_id = " . $_SESSION["teacherID"] ;
    $result = mysqli_query($connect , $sql) ;

    if($result) {
        echo "<script type='text/javascript'>" ;
        echo "alert('แก้ไขข้อมูลสำเร็จ'); " ;
        echo "window.location = 'teacher_teacher_info.php' ; " ;
        echo "</script>" ;
    } 
    else {
        echo "<script type='text/javascript'>" ;
        echo "alert('แก้ไขข้อมูลล้มเหลว'); " ;
        echo "window.location = 'teacher-Edit.php' ; " ;
        echo "</script>" ;
    }
    ?>
</body>