<body>
    <?php
    include('navbar_admin.php');
    include('connection.php');

    $student_id = $_GET["id"];

    $sql = "SELECT * from student where student_id = '$student_id' ";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    extract($row);

    $sql2 = "SELECT r1.subject_id , r2.subject_name , r1.semester , r1.grade from register r1 , subject r2  where r1.student_id = '$student_id' and r1.subject_id = r2.subject_id ; ";
    $result2 = mysqli_query($connect, $sql2);

    $sql3 = "SELECT * from teacher where teacher_id = '$teacher_id' ; ";
    $result3 = mysqli_query($connect, $sql3);
    if ($result3->num_rows > 0) {
        $row3 = mysqli_fetch_array($result3);
        extract($row3);
        $teacherName = $teacher_name ;
    }
    else {
        $teacherName = '' ;
    }


    ?>

    <div class="container text-center bg-body-secondary mt-3">
        <h2>ข้อมูลส่วนต้วนักศึกษา</h2>
        <div class="row row-cols-2">
            <div class="col-sm-6 mt-3"><b>รหัสนักศึกษา</b></div>
            <div class="col-sm-6 mt-3">
                <?php echo $student_id ?>
            </div>
            <div class="col-sm-6 mt-3"><b>คำนำหน้า</b></div>
            <div class="col-sm-6 mt-3">
                <?php echo $prefix ?>
            </div>
            <div class="col-sm-6 mt-3"> <b>ชื่อ - นามสกุล</b></div>
            <div class="col-sm-6 mt-3">
                <?php echo $student_name ?>
            </div>
            <div class="col-sm-6 mt-3"> <b>ภาควิชา</b></div>
            <div class="col-sm-6 mt-3">
                <?php echo $department ?>
            </div>
            <div class="col-sm-6 mt-3"> <b>อาจารย์ที่ปรึกษา</b></div>
            <div class="col-sm-6 mt-3">
                <?php echo $teacherName ?>
            </div>
        </div>

        <h2>ผลการเรียน</h2>
        <table class='table table-striped-columns mt-1'>
            <tr>
                <td>รหัสวิชา</td>
                <td>ชื่อวิชา</td>
                <td>ปีการศึกษา</td>
                <td>ระดับขั้น</td>
            </tr>
            <?php while ($row = mysqli_fetch_array($result2)) {
                echo "<tr>";
                echo "<td>" . $row['subject_id'] . "</td>";
                echo "<td>" . $row['subject_name'] . "</td>";
                echo "<td>" . $row['semester'] . "</td>";
                echo "<td>" . $row['grade'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        <div class="button">
            <a href="student_list.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
            <a href="student_edit.php?id=<?php echo $student_id ?>"><button
            class="btn btn-outline-success">แก้ไขข้อมูล</button></a>
            <a href="select_teacher_deletedb.php?id=<?php echo $student_id ?>"><button class="btn btn-outline-danger">ลบอาจารย์ที่ปรึกษา</button></a>

        </div>
    </div>
</body>