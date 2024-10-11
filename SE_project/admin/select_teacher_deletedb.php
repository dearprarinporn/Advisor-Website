<?php
include('connection.php');

$studentID = $_GET["id"];

$sql = "SELECT * from student where student_id = '$studentID' ; ";
$result1 = mysqli_query($connect, $sql);
$row1 = mysqli_fetch_array($result1) ;
extract($row1) ;

if ($teacher_id != NULL) {

    $query = "UPDATE student set teacher_id = NULL where student_id = '$studentID' ; ";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('ลบอาจารย์ที่ปรึกษาสำเร็จ') ; ";
        echo "window.location = 'student_info.php?id=" . $student_id . "';";
        echo "</script>";
    }
}

if ($teacher_id == NULL) {
    echo "<script type='text/javascript'>";
        echo "alert('ยังไม่มีอาจารย์ที่ปรึกษา') ; ";
        echo "window.location = 'student_info.php?id=" . $student_id . "';";
        echo "</script>";
}


?>