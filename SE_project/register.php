<?php
include('navbar.php');
include('connection.php');

$sql = "SELECT r1.subject_id , r2.subject_name as subject_name, r1.semester , r1.grade from register r1 , subject r2 where r1.student_id = " . $_SESSION["studentID"] . " AND r1.subject_id = r2.subject_id"; 
$result = mysqli_query($connect, $sql);

?>

<body>
    <div class="container text-center bg-body-secondary mt-3">
        <div class="nav nav-tabs d-flex justify-content-end">
            <a href="registeradd.php"><button class="btn btn-outline-success mt-5 ">เพิ่มประวัติการลงทะเบียนเรียน</button></a>
        </div>
        <table class='table table-striped-columns mt-1'>
            <tr>
                <td>รหัสวิชา</td>
                <td>ชื่อวิชา</td>
                <td>ปีการศึกษา</td>
                <td>เกรด</td>
            </tr>
            <?php while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['subject_id'] . "</td>";
                echo "<td>" . $row['subject_name'] . "</td>";
                echo "<td>" . $row['semester'] . "</td>";
                echo "<td>" . $row['grade'] . "</td>";
                echo "<td>" . "<a href='registeredit.php?subject_id=$row[0]'><button class='btn btn-outline-danger '>แก้ไขประวัติการเรียน</button></a>" . "</td>";
                echo "<td>" . "<a href='registerdeletedb.php?subject_id=$row[0]'><button class='btn btn-outline-danger '>ลบประวัติการเรียน</button></a>" . "</td>";
                echo "</tr>";
            }
            ?>
        </table>


        <a href="studentMain.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
    </div>
</body>