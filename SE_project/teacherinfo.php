<body>
    <?php
    include('navbar.php');
    include('connection.php');

    $sql1 = "select * from student where student_id = '" . $_SESSION['studentID'] . "'; ";
    $result1 = mysqli_query($connect, $sql1);
    $row1 = mysqli_fetch_array($result1);
    extract($row1);

    if ($teacher_id != '') {
        $sql = "SELECT * from teacher t1 , student s1 where t1.teacher_id = '" . $_SESSION["teacherID"] . "' AND t1.teacher_id = s1.teacher_id ";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result);
        extract($row);

        ?>
        <div class="container text-center bg-body-secondary mt-3">
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"><b>E-mail</b></div>
                <div class="col-sm-6 mt-3">
                    <?php echo $teacher_id ?>
                </div>
                <div class="col-sm-6 mt-3"><b>ตำแหน่งวิชาการ</b></div>
                <div class="col-sm-6 mt-3">
                    <?php echo $academic_position ?>
                </div>
                <div class="col-sm-6 mt-3"> <b>ชื่อ - นามสกุล</b></div>
                <div class="col-sm-6 mt-3">
                    <?php echo $teacher_name ?>
                </div>
                <div class="col-sm-6 mt-3"> <b>หลักสูตร</b></div>
                <div class="col-sm-6 mt-3">
                    <?php echo $tcdepartment ?>
                </div>
            </div>

            <div class="button">
                <a href="studentMain.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
            </div>
        </div>
    <?php }

    if ($teacher_id == '') { ?>



        <div class="container text-center bg-body-secondary mt-3">
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"><b>E-mail</b></div>
                <div class="col-sm-6 mt-3">

                </div>
                <div class="col-sm-6 mt-3"><b>ตำแหน่งวิชาการ</b></div>
                <div class="col-sm-6 mt-3">

                </div>
                <div class="col-sm-6 mt-3"> <b>ชื่อ - นามสกุล</b></div>
                <div class="col-sm-6 mt-3">

                </div>
                <div class="col-sm-6 mt-3"> <b>หลักสูตร</b></div>
                <div class="col-sm-6 mt-3">

                </div>
            </div>

            <div class="button">
                <a href="studentMain.php"><button class="btn btn-outline-warning mt-5">กลับ</button></a>
            </div>
        </div>

    <?php } ?>
</body>