<body>
    <?php
    include('navbar.php');
    include('connection.php');

    $sql = "SELECT * from student where student_id = '" . $_SESSION["studentID"] . "' ; ";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    extract($row);

    ?>

    <div class="container text-center bg-body-secondary mt-3">
        <form action="studenteditdb.php" method="post">
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"><b>รหัสนักศึกษา</b></div>
                <div class="col-sm-6 mt-3">
                    <?php echo $student_id ?>
                </div>

                <div class="col-sm-6 mt-3"><b>คำนำหน้า</b></div>
                <div class="col-sm-6 mt-3">
                    <select class="form-select form-select-sm" name="prefix" value="<?php echo $prefix ?>">
                        <option value="<?php echo $prefix ?>" selected><?php echo $prefix ?></option>
                        <option value="นาย">นาย</option>
                        <option value="นางสาว">นางสาว</option>
                    </select>

                </div>
                <div class="col-sm-6 mt-3"> <b>ชื่อ - นามสกุล</b></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="name"
                        value="<?php echo $student_name ?>">
                </div>

                <div class="col-sm-6 mt-3"> <b>ภาควิชา</b></div>
                <div class="col-sm-6 mt-3">
                    <?php echo $department ?>
                </div>

                <div class="col-sm-6 mt-3"> <b>Email</b></div>
                <div class="col-sm-6 mt-3">
                    <?php echo $email ?>
                </div>
            </div>


            <button class="btn btn-outline-success" type="submit">บันทึก</button>
        </form>
        <div class="button">
            <a href="studentinfo.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
        </div>
    </div>
</body>