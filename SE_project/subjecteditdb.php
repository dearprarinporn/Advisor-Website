<?php 
    include('connection.php') ;

    $subjectID = $_POST["id"] ;
    $subjectName = $_POST["name"] ;     

    $query = "UPDATE subject SET subject_name = '$subjectName' where subject_id = '$subjectID' ; " ;
    $result = mysqli_query($connect , $query) ;

    echo $subjectID ;
    echo $subjectName ;

    if ($result) {
        echo "<script type='text/javascript'> " ;
        echo "alert('แก้ไขสำเร็จ') ; ";
        echo "window.location = 'subject.php' ; " ;
        echo "</script>" ;
    }

    else {
        echo "<script type='text/javascript'>" ; 
        echo "alert('แก้ไขไม่สำเร็จ') ; " ;
        echo "window.location = 'subject.php' ; " ;
        echo "</script> " ;
    }
    
    
?>