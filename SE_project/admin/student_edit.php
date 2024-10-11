<body>
    <?php
    include('navbar_admin.php');
    include('connection.php');

    $student_id = $_GET["id"];

    $sql = "SELECT * from student where student_id = '$student_id' ; ";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    extract($row);

    $sql1 = "SELECT * FROM student ";
    $result1 = mysqli_query($connect, $sql1);
    ?><br>

    <div class="container text-center bg-body-secondary mt-3"><br>
        <h2>แก้ไขข้อมูลส่วนตัวนักศึกษา</h2><br><br><br><br>
        <form action="student_edit_db.php" method="post">
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"><b>รหัสนักศึกษา</b></div>
                <div class="col-sm-6 mt-3">
                    <?php echo $student_id ?>
                </div>
                <div class="col-sm-6 mt-3"> <b>คำนำหน้า</b></div>
                <div class="col-sm-6 mt-3">
                    <select class="form-select form-select-sm" name="prefix">
                        <option value="<?php echo $prefix ?>" selected ><?php echo $prefix ?></option>
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
                    <select class="form-select form-select-sm" name="department">
                        <option value="<?php echo $department ?>" selected>
                            <?php echo $department ?>
                        </option>
                        <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
                        <option value="คณิตศาสตร์">คณิตศาสตร์</option>
                        <option value="สถิติ">สถิติ</option>
                        <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                        <option value="เทคโนโลยีสารสนเทศและการสื่อสาร">เทคโนโลยีสารสนเทศและการสื่อสาร</option>
                        </option>
                    </select>
                </div>


            </div>
            <input type="hidden" value="<?php echo $student_id ?>" name="id">
                <button class="btn btn-outline-primary" type="submit">บันทึก</button>
        </form>
        <div class="button">
            <a href="student_list.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
        </div><br>

    </div>
</body>