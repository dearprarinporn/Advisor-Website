<?php
require '../connection.php';
require 'message.php';

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student View</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ตรวจสอบข้อมูลรายวิชาของนักศึกษา
                            <a href="tect_student_list.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        $student_id = $_GET["id"];

                        $query = "SELECT *  from student s1  where student_id = '$student_id'  ; ";
                        $result = mysqli_query($connect, $query);
                        $row = mysqli_fetch_array($result);
                        extract($row);


                        $query1 = "SELECT *  from teacher where teacher_id = '$teacher_id'  ; ";
                        $result1 = mysqli_query($connect, $query1);

                        if ($teacher_id != NULL) {
                            $row1 = mysqli_fetch_array($result1);
                            extract($row1);

                            $teacherName = $teacher_name;
                        } else {
                            $teacherName = 'ไม่มีอาจารย์ที่ปรึกษา';
                        }

                        ?>

                        <div class="mb-3">
                            <label>รหัสนักศึกษา</label>
                            <p class="form-control">
                                <?php echo $student_id; ?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>ชื่อ - สกุล</label>
                            <p class="form-control">
                                <?php echo $student_name; ?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>ภาควิชา</label>
                            <p class="form-control">
                                <?php echo $department; ?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>อาจารย์ที่ปรึกษา</label>
                            <p class="form-control">
                                <?php echo $teacherName; ?>
                            </p>
                        </div>



                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>รหัสวิชา</th>
                                        <th>ชื่อวิชา</th>
                                        <th>ภาคการศึกษา</th>
                                        <th>เกรด</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $student_id = mysqli_real_escape_string($connect, $_GET['id']);
                                    $query = "SELECT register.subject_id, subject.subject_name, register.semester, register.grade
                                              FROM register
                                              INNER JOIN subject ON register.subject_id = subject.subject_id
                                              WHERE register.student_id='$student_id'";
                                    $query_run = mysqli_query($connect, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $row) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= $row['subject_id']; ?>
                                                </td>
                                                <td>
                                                    <?= $row['subject_name']; ?>
                                                </td>
                                                <td>
                                                    <?= $row['semester']; ?>
                                                </td>
                                                <td>
                                                    <?= $row['grade']; ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo $_SESSION['message'] = "ไม่มีรายวิชาที่ลงทะเบียน";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>