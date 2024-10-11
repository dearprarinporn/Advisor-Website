<?php 
    include('connection.php') ;

   
    $student_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $prefix = $_POST['prefix'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $sql2 = "select * from user where email = '$email' ; " ;
    $result2 = mysqli_query($connect , $sql2) ;

    if ($result2 -> num_rows == 0) {
        $query = "INSERT INTO user (email , password , type) value ('$email' , '$password' , '$type') ; " ;
        $result = mysqli_query($connect , $query) ;

        $query1 = "INSERT INTO student (student_id , student_name , prefix , department , email) values ('$student_id' , '$student_name' , '$prefix' , '$department' , '$email') ; " ;
        $result1 = mysqli_query($connect , $query1) ;

        if($result && $result1) {
            echo "<script type='text/javascript'> " ;
            echo "alert('เพิ่มข้อมูลนักศึกษาสำเร็จ') ;" ;
            echo "window.location='student_add.php' ; " ;
            echo "</script>" ;
        }
    }

    if ($result2 -> num_rows > 0) {
        echo "<script type='text/javascript'>" ;
        echo "alert('เพิ่มข้อมูลนักศึกษาล้มเหลว') ; " ;
        echo "window.location = 'student_add.php' ; " ;
        echo "</script>" ; 
    }
?>