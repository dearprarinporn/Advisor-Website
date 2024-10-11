<?php 
    include('../connection.php') ;
    session_start() ;

    $oldPassword = $_POST["old-password"] ;
    $newPassword = $_POST["new-password"] ;
    $confirmNewPassword = $_POST["confirm-new-password"] ;

    $query = "select * from user where email = '".$_SESSION["email"]."' ; " ; 
    $result = mysqli_query($connect , $query) ;
    $row = mysqli_fetch_array($result) ;
    extract($row) ;

    if ($password == $oldPassword) {
        if($newPassword == $confirmNewPassword) {
            $query1 = "UPDATE user set password = '$confirmNewPassword' where email = '" . $_SESSION["email"] . "'; " ;
            $result1 = mysqli_query($connect , $query1) ;

            if($result1) {
                echo "<script type='text/javascript'>" ;
                echo "alert('แก้ไขรหัสผ่านสำเร็จ') ; " ;
                echo "window.location = 'teacher_teacher_info.php' ; " ; 
                echo "</script>" ;
            }
        }

        if($newPassword != $confirmNewPassword) {
            echo "<script type='text/javascript'>" ;
            echo "alert('รหัสผ่านใหม่ไม่ตรงกัน') ; " ;
            echo "window.location = 'teacher_teacher_info.php' ; " ; 
            echo "</script>" ;
        }
    }

    if ($password != $oldPassword) {
        echo "<script type='text/javascript'>" ;
            echo "alert('รหัสผ่านไม่ถูกต้อง') ; " ;
            echo "window.location = 'teacherSetPassword.php' ; " ; 
            echo "</script>" ;
    }
?>