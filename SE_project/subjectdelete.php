<?php 
include ('connection.php') ;

$subjectid = $_GET['id'] ;

$sql = "delete from register where subject_id = '$subjectid'  ; " ;
$result1 = mysqli_query($connect , $sql) ;

$query = "DELETE FROM subject where subject_id = '$subjectid' " ;
$result = mysqli_query($connect , $query) ;

if ($result) {
    echo "<script type='text/javascript'>" ;
    echo "alert('ลบรายวิชาสำเร็จ') ; " ;
    echo "window.location = 'subject.php' ; " ;
    echo "</script>" ;
}

else {
    echo "<script type='text/javascript'>" ;
    echo "alert('ลบรายวิชาล้มเหลว') ; " ;
    echo "window.location = 'subject.php' ; " ;
    echo "</script>" ;
}
 ?>