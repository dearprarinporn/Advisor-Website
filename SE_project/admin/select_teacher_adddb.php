<?php
include('connection.php');

$teacherID = $_POST["teacher_id"];
$student_id = $_POST["student_id"];

$sql = "SELECT * from teacher where teacher_id = '$teacherID' ; ";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);
extract($row);

$sql1 = "SELECT * from student where student_id = '$student_id' ; ";
$result1 = mysqli_query($connect, $sql1);

if ($result1->num_rows == 0) {
    echo "<script type='text/javascript'>";
    echo "alert('ไม่มีนักศึกษาคนนี้ในระบบ') ; ";
    echo "window.location = 'select_teacher.php' ; ";
    echo "</script>";
}

if ($result1 ->num_rows > 0) {
    $row1 = mysqli_fetch_array($result1);
    extract($row1);

    if ($teacher_id == NULL) {
        $sql2 = "UPDATE student set teacher_id = '$teacherID' where student_id = '$student_id' ; ";
        $result2 = mysqli_query($connect, $sql2);

        if ($result2) {
            echo "<script type='text/javascript'>";
            echo "alert('เพิ่มอาจารย์ที่ปรึกษาสำเร็จ') ; ";
            echo "window.location = 'select_teacher.php' ; ";
            echo "</script>";
        }
    }

    if ($teacher_id != NULL) {
        echo "<script type='text/javascript'>";
            echo "alert('นักศึกษาคนนี้มีอาจารย์ที่ปรึกษาแล้ว') ; ";
            echo "window.location = 'select_teacher.php' ; ";
            echo "</script>";
    }
}
?>