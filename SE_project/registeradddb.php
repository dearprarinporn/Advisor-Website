<?php
include('connection.php');

$subjectID = $_POST["subjectID"];
$studentID = $_POST["studentID"];
$semester = $_POST["semester"];
$grade = $_POST["grade"];

$query1 = "SELECT * from register where subject_id = '$subjectID' AND student_id = '$studentID' ; ";
$result1 = mysqli_query($connect, $query1);

if ($result1 -> num_rows > 0) {
    echo "<script type='text/javascript'>";
    echo "alert('มีประวัติการลงทะเบียนเรียนวิชานี้แล้ว') ; ";
    echo "window.location = 'register.php' ; ";
    echo "</script>";
}

if ($result1->num_rows == 0) {

    $query = "INSERT INTO register (subject_id , student_id , semester , grade) VALUES ('$subjectID' , '$studentID' , '$semester' , '$grade') ; ";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มประวัติการลงทะเบียนเรียนสำเร็จ') ; ";
        echo "window.location = 'register.php' ; ";
        echo "</script>";
    }
}
?>