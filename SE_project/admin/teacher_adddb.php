<?php
include('connection.php');

$teacher_id = $_POST["teacher_id"];
$teacher_name = $_POST["teacher_name"];
$academic_position = $_POST["academic_position"];
$email = $_POST["email"];
$password = $_POST["password"];
$type = $_POST["type"];
$tcdepartment = $_POST["tcdepartment"];

$sql2 = "select * from user where email = '$email' ; ";
$result2 = mysqli_query($connect, $sql2);


if ($result2->num_rows == 0) {

    $sql4 = "SELECT * from teacher where teacher_id = '$teacher_id' ; ";
    $result4 = mysqli_query($connect, $sql4);

    if ($result4->num_rows > 0) {
        echo "<script type='text/javascript'>";
        echo "alert('มีรหัสอาจารย์นี้อยู่ในระบบแล้ว') ; ";
        echo "window.location = 'teacher_add.php' ; ";
        echo "</script>";
    }

    if ($result4->num_rows == 0) {


        $sql = "INSERT INTO user (email , password , type) value ('$email' , '$password' , '$type') ; ";
        $result = mysqli_query($connect, $sql);

        $sql3 = "INSERT INTO teacher (teacher_id , teacher_name , academic_position , email , tcdepartment ) value ('$teacher_id' , '$teacher_name' , '$academic_position' , '$email' , '$tcdepartment' ) ; ";
        $result3 = mysqli_query($connect, $sql3);

        if ($result && $result3) {
            echo "<script type='text/javascript'>";
            echo "alert('เพิ่มข้อมูลอาจารย์สำเร็จ') ; ";
            echo "window.location = 'teacher_list.php' ; ";
            echo "</script>";
        }
    }

}

if ($result2->num_rows != 0) {
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มข้อมูลอาจารย์ล้มเหลว') ; ";
    echo "window.location = 'teacher_add.php' ; ";
    echo "</script>";
}
?>