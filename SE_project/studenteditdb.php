<body>
    <?php 
    include('navbar.php') ;
    include('connection.php') ;

    $name = $_POST["name"] ;
    $prefix = $_POST["prefix"] ;

    $sql = "UPDATE student set student_name = '$name' , prefix = '$prefix' where student_id = " . $_SESSION["studentID"] ;
    $result = mysqli_query($connect , $sql) ;

    if($result) {
        echo "<script type='text/javascript'>" ;
        echo "alert('แก้ไขข้อมูลสำเร็จ'); " ;
        echo "window.location = 'studentinfo.php' ; " ;
        echo "</script>" ;
    } 
    else {
        echo "<script type='text/javascript'>" ;
        echo "alert('แก้ไขข้อมูลล้มเหลว'); " ;
        echo "window.location = 'studentedit.php' ; " ;
        echo "</script>" ;
    }
    ?>
</body>