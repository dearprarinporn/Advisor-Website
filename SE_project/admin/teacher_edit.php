<body>
    <?php
    include('navbar_admin.php');
    include('connection.php');

    $teacherid = $_GET["id"];

    $sql = "SELECT * from teacher where teacher_id = '$teacherid' ; ";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    extract($row);

    ?><br>

    <div class="container text-center bg-body-secondary mt-3"><br>
    <h2>แก้ไขข้อมูลส่วนตัวอาจารย์</h2><br><br><br><br>
        <form action="teacher_edit_db.php" method="post">
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"><b>รหัสอาจารย์</b></div>
                <div class="col-sm-6 mt-3">
                    <?php echo $teacher_id ?>
                </div>
                <div class="col-sm-6 mt-3"><b>Email</b></div>
                <div class="col-sm-6 mt-3">
                    <?php echo $email ?>
                </div>
                <div class="col-sm-6 mt-3"> <b>ชื่อ - นามสกุล</b></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="name"
                        value="<?php echo $teacher_name  ?>">
                </div>
                <div class="col-sm-6 mt-3"> <b>ตำแหน่งวิชาการ</b></div>
                <div class="col-sm-6 mt-3">
                    <select class="form-select form-select-sm" name="academic_position">
                        <option value="<?php echo $academic_position ?>"><?php echo $academic_position ?></option>
                        <option value="อาจารย์">อาจารย์</option>
                        <option value="ศาสตราจารย์">ศาสตราจารย์</option>
                        <option value="ผู้ช่วยศาสตราจารย์">ผู้ช่วยศาสตราจารย์</option>
                        <option value="รองศาสตราจารย์">รองศาสตราจารย์</option>
                    </select>
                </div>
                <div class="col-sm-6 mt-3"> <b>หลักสูตร</b></div>
                <div class="col-sm-6 mt-3">
                    <select class="form-select form-select-sm" name="tcdepartment"  required>
                        <option value="<?php echo $tcdepartment ?>" selected><?php echo $tcdepartment ?></option>
                        <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
                        <option value="คณิตศาสตร์">คณิตศาสตร์</option>
                        <option value="สถิติ">สถิตื</option>
                        <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                        <option value="เทคโนโลยีสารสนเทศและการสื่อสาร">เทคโนโลยีสารสนเทศและการสื่อสาร</option>
                    </select>
                </div>
                    
              
            </div><br><br><br><br><br><br><br><br>
            <input type="hidden" name="id" value="<?php echo $teacherid ?>">
            <input class="btn btn-outline-primary" type="submit" value="submit">
        </form>
        <div class="button">
            <a href="teacher_list.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
        </div><br>
        
    </div>
</body>