<?php
session_start();
require '../connection.php';
?>
<style>
      input[type="text"] {
        width: 50px;
      }
    </style>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student CRUD</title>
</head>
<body>
    <div class="container mt-4">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ข้อมูลนักศึกษา
                            <a href="teacherMain.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="GET">
                                    <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="search" placeholder="ค้นหานักศึกษา">

                                        <button class="btn btn-primary" type="submit">ค้นหา</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>รหัสนักศึกษา</th>
                                    <th>ชื่อ - สกุล</th>
                                    <th>ภาควิชา</th>
                                    <th>รายวิชาที่ลงทะเบียน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if(isset($_GET['search'])) {
                                    $search = mysqli_real_escape_string($connect, $_GET['search']);
                                    $query = "SELECT * FROM student WHERE student_name LIKE '%$search%'";
                                } else {
                                    $query = "SELECT * FROM student where teacher_id = '".$_SESSION["teacherID"] ."'; " ;
                                }

                                $query_run = mysqli_query($connect, $query);

                                if(mysqli_num_rows($query_run) > 0) {
                                    foreach($query_run as $student) {
                                        ?>
                                        <tr>
                                            <td><?= $student['student_id']; ?></td>
                                            <td><?= $student['student_name']; ?></td>
                                            <td><?= $student['department']; ?></td>
                                            <td>
                                                <a href="student-view.php?id=<?php echo $student['student_id']; ?>" class="btn btn-success btn-sm">ตรวจสอบ</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>ไม่พบข้อมูล</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
