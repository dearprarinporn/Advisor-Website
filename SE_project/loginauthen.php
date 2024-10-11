<?php
include('connection.php');
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT * from user where email = '$email' AND password = '$password' ; ";
$result = mysqli_query($connect, $query);


if ($result->num_rows == 1) {

    $row = mysqli_fetch_array($result);
    extract($row);

    if ($type == 'student') {

        $query1 = "SELECT * from student where email = '$email' ; ";
        $result1 = mysqli_query($connect, $query1);
        $row1 = mysqli_fetch_array($result1);
        extract($row1);

        $_SESSION["email"] = $email;
        $_SESSION["studentID"] = $student_id;

        echo "<script type='text/javascript'>";
        echo "window.location = 'studentMain.php' ; ";
        echo "</script>";
    }

    if ($type == 'teacher') {

        $query2 = "SELECT * from teacher where email = '$email' ; " ;
        $result2 = mysqli_query($connect, $query2);
        $row2 = mysqli_fetch_array($result2);
        extract($row2);

        $_SESSION["teacherID"] = $teacher_id;
        $_SESSION["email"] = $email;
        
        echo "<script type='text/javascript'>";
        echo "window.location = './Teacher/teacherMain.php' ; ";
        echo "</script>";
    }

    if ($type == 'admin') {
        echo "<script type='text/javascript'>";
        echo "window.location = './admin/adminMain.php' ; ";
        echo "</script>";
    }


    
}

if ($result->num_rows == 0) {
    echo "<script type='text/javascript'>";
    echo "alert('Username หรือ Password ผิดโปรดลองใหม่อีกครั้ง') ; ";
    echo "window.location = 'index.php ' ; ";
    echo "</script>";
}



?>