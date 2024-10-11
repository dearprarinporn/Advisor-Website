<?php
include('connection.php');

$id = $_POST['id'];
$name = $_POST['name'];

$query = "SELECT * from subject where subject_id = '$id' or subject_name = '$name' ; ";
$result1 = mysqli_query($connect, $query);

if ($result1->num_rows > 0) {
    echo "<script type='text/javascript'>";
    echo "alert('มีชื่อหรือรหัสวิชานี้แล้ว') ; ";
    echo "window.location = 'subjectadd.php' ; ";
    echo "</script>";
}

if ($result1->num_rows == 0) {

    $sql = "INSERT into subject (subject_id , subject_name) VALUES ('$id' , '$name' ) ";
    $result = mysqli_query($connect, $sql);

    if ($result) {
        echo "<script type='text/javascript'> ";
        echo "alert('เพิ่มรายวิชาสำเร็จ') ;";
        echo "window.location='subjectadd.php' ; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มรายวิชาล้มเหลว') ; ";
        echo "window.location = 'subjectadd.php' ; ";
        echo "</script>";
    }
}
?>