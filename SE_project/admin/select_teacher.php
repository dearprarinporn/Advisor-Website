<body>
    <?php
    include('navbar_admin.php');
    include('connection.php');


    $sql1 = "SELECT * FROM teacher ";
    $result1 = mysqli_query($connect, $sql1);

    ?><br>




    <div class="container text-center bg-body-secondary mt-3"><br>
        <form action="select_teacher_adddb.php" method="post">
            <h2>กำหนดที่ปรึกษาให้กับนักศึกษา</h2>
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"><b>ชื่ออาจารย์</b></div>
                <div class="col-sm-6 mt-3">
                    <select class="form-select form-select-sm" name="teacher_id" value="<?php echo $teacher_name ?>" required>
                        <option value="">-เลือก-</option>
                        <?php foreach ($result1 as $results) { ?>
                            <option value="<?php echo $results["teacher_id"] ?>">
                                <?php echo $results["teacher_name"] ?>
                            </option>
                        <?php } ?>

                    </select><br>
                </div>
                <div class="col-sm-6 mt-3"> <b>รหัสนักศึกษา</b></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="student_id" placeholder="รหัสนักศึกษา" required>
                </div>

            </div>

            <a href="submit"><button class="btn btn-outline-success mt-5">บันทึก</button></a>
        </form>


            <div class="button">
                <a href="adminMain.php"><button class="btn btn-outline-warning mt-5">กลับ</button></a>
            </div>
    </div>
</body>