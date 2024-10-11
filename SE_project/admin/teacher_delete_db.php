<?php
include('connection.php');

$teacherid = $_GET["id"];

$query1 = "SELECT * from student where teacher_id = '$teacherid' ; ";
$result1 = mysqli_query($connect, $query1);

if ($result1->num_rows > 0) {
    echo "<script type='text/javascript'>";
    echo "alert('ยังมีนักศึกษาในที่ปรึกษา ไม่สามารถลบได้') ; ";
    echo "window.location = 'teacher_list.php' ; ";
    echo "</script>";
} else {

    $query3 = "SELECT * from teacher where teacher_id = '$teacherid' ; " ;
    $result3 = mysqli_query($connect , $query3);
    $row = mysqli_fetch_array($result3) ;
    extract($row) ;

    $query = "DELETE FROM teacher where teacher_id = '$teacherid' ; ";
    $result = mysqli_query($connect, $query);

    $query2 = "DELETE FROM user where email = '$email' ; ";
    $result2 = mysqli_query($connect, $query2);

    echo "<script type='text/javascript'>";
    echo "alert('ลบข้อมูลอาจารย์สำเร็จ') ; ";
    echo "window.location = 'teacher_list.php' ; ";
    echo "</script>";
}



?>