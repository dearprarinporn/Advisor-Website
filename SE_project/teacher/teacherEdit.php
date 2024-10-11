<body>
    <?php session_start();
    include('navbar_teacher.php');
    include('../connection.php');

    $sql = "SELECT * from teacher where teacher_id = " . $_SESSION["teacherID"];
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    extract($row);

    ?>

    <div class="container text-center bg-body-secondary mt-3">
        <form action="teacher-Edit-db.php" method="post">

            <div class="col-sm-6 mt-3"><b>ตำแหน่งวิชาการ</b></div>
            <div class="col-sm-6 mt-3">
                <select class="form-select form-select-sm" name="academic_position"
                    value="<?php echo $academic_position ?>">
                    <option value="<?php echo $academic_position ?>" selected>
                        <?php echo $academic_position ?>
                    </option>
                    <option value="อาจารย์">อาจารย์</option>
                    <option value="ศาสตราจารย์">ศาสตราจารย์</option>
                    <option value="ผู้ช่วยศาสตราจารย์">ผู้ช่วยศาสตราจารย์</option>
                    <option value="รองศาสตราจารย์">รองศาสตราจารย์</option>

                </select>

            </div>
            <div class="col-sm-6 mt-3"> <b>ชื่อ - นามสกุล</b></div>
            <div class="col-sm-6 mt-3">
                <input class="form-control form-control-sm" type="text" name="name" value="<?php echo $teacher_name ?>">
            </div>
            <div class="col-sm-6 mt-3"> <b>หลักสูตร</b></div>
            <div class="col-sm-6 mt-3">
                <?php echo $tcdepartment ?>
            </div>
    </div>


    <button class="btn btn-outline-success mt-5" type="submit">บันทึก</button>
    </form>
    <div class="button">
        <a href="teacher_teacher_info.php"><button class="btn btn-outline-warning mt-5">กลับ</button></a>
    </div>
    </div>
</body>