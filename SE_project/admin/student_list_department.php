<?php
include('connection.php');
include('navbar_admin.php');

$ack = $_GET["ack"];

if ($ack == 'all') {
    $sql = "SELECT * from student ; ";
    $result = mysqli_query($connect, $sql);
}

if ($ack == 'comsci') {
    $sql = "SELECT * from student where department = 'วิทยาการคอมพิวเตอร์' ; ";
    $result = mysqli_query($connect, $sql);
}

if ($ack == 'math') {
    $sql = "SELECT * from student where department = 'คณิตศาสตร์' ; ";
    $result = mysqli_query($connect, $sql);
}


if ($ack == 'stats') {
    $sql = "SELECT * from student where department = 'สถิติ' ; ";
    $result = mysqli_query($connect, $sql);
}


if ($ack == 'it') {
    $sql = "SELECT * from student where department = 'เทคโนโลยีสารสนเทศ' ; ";
    $result = mysqli_query($connect, $sql);
}


if ($ack == 'ict') {
    $sql = "SELECT * from student where department = 'เทคโนโลยีสารสนเทศและการสื่อสาร' ; ";
    $result = mysqli_query($connect, $sql);
}

?>

<div class="container text-center bg-body-secondary mt-3"><br><br>
    <div class="d-flex justify-content-start">
        <h2>ข้อมูลนักศึกษา</h2>
    </div>
    <div class="container-fluid-xl mt-1">
        <form action="student_search.php" class="row g-3 align-items-center" role="search" method="post">
            <div class="col-auto">
                <label for="search">ชื่อนักศึกษา</label>
            </div>
            <div class="col-auto">
                <input class="form-control me-2" name="student_name" type="search" placeholder="Search"
                    aria-label="Search">
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </div>
        </form>

        <div class="nav nav-tabs d-flex justify-content-between">
            <div>
                <a href="student_list_department.php?ack=all"><button
                        class="btn btn-outline-primary mt-5">ทุกหลักสูตร</button></a>

                <a href="student_list_department.php?ack=comsci"><button
                        class="btn btn-outline-primary mt-5">วิทยาการคอมพิวเตอร์</button></a>
                <a href="student_list_department.php?ack=math"><button
                        class="btn btn-outline-primary mt-5">คณิตศาสตร์</button></a>
                <a href="student_list_department.php?ack=stats"><button
                        class="btn btn-outline-primary mt-5">สถิติ</button></a>
                <a href="student_list_department.php?ack=it"><button
                        class="btn btn-outline-primary mt-5">เทคโนโลยีสารสนเทศ</button></a>
                <a href="student_list_department.php?ack=ict"><button
                        class="btn btn-outline-primary mt-5">เทคโนโลยีสารสนเทศและการสื่อสาร</button></a>
            </div>
            <div>
                <a href="student_add.php"><button class="btn btn-outline-success mt-5">เพิ่มข้อมูลนักศึกษา</button></a>
            </div>
        </div><br>
        <table class='table table-striped-columns mt-1'>
            <tr>
                <td>รหัสนักศึกษา</td>
                <td>ชื่อนักศึกษา</td>
                <td>ภาควิชา</td>

                <td></td>
            </tr>

            <?php

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['student_id'] . "</td>";
                echo "<td>" . $row['student_name'] . "</td>";
                echo "<td>" . $row['department'] . "</td>";
                echo "<td>" . "<a href='student_info.php?id=$row[0]'><button class='btn btn-outline-danger '>ตรวจสอบข้อมูล</button></a>" . "</td>";
                echo "<td>" . "<a href='student_delete_db.php?id=$row[0]'><button class='btn btn-outline-danger '>ลบ</button></a>" . "</td>";
                echo "</tr>";
            }
            ?>
        </table>


    </div><br>
    <a href="adminMain.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a><br><br>
</div>