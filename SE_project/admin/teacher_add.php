<?php
include('navbar_admin.php');
?><br>

<body>
    <div class="container text-center bg-body-secondary mt-3"><br>
   <h2>เพิ่มข้อมูลอาจารย์</h2> <br><br><br><br>
        <form action="teacher_adddb.php" method="post">
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"> <b>รหัสอาจารย์</b></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="teacher_id" placeholder="รหัสอาจารย์" required>
                </div>
                

                <div class="col-sm-6 mt-3"> <b>ชื่ออาจารย์</b></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="teacher_name" placeholder="ชื่ออาจารย์" required>
                </div>

                <div class="col-sm-6 mt-3"> <b>ตำแหน่งทางวิชาการ</b></div>
                <div class="col-sm-6 mt-3">
                    <select class="form-select form-select-sm" name="academic_position"  required>
                        <option value="" disabled selected>--เลือก--</option>
                        <option value="อาจารย์">อาจารย์</option>
                        <option value="ศาสตราจารย์">ศาสตราจารย์</option>
                        <option value="ผู้ช่วยศาสตราจารย์">ผู้ช่วยศาสตราจารย์</option>
                        <option value="รองศาสตราจารย์">รองศาสตราจารย์</option>
                    </select>
                </div>
                <div class="col-sm-6 mt-3"> <b>Email</b></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="email" placeholder="Email" required>
                </div>

                <div class="col-sm-6 mt-3"> <b>หลักสูตร</b></div>
                <div class="col-sm-6 mt-3">
                    <select class="form-select form-select-sm" name="tcdepartment"  required>
                        <option value="" disabled selected>--เลือกหลักสูตร--</option>
                        <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
                        <option value="คณิตศาสตร์">คณิตศาสตร์</option>
                        <option value="สถิติ">สถิตื</option>
                        <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                        <option value="เทคโนโลยีสารสนเทศและการสื่อสาร">เทคโนโลยีสารสนเทศและการสื่อสาร</option>
                    </select>
                </div>
            </div><br><br><br><br><br>

            <input type="hidden" value="12345" name="password">
            <input type="hidden" value="teacher" name="type">
           <button type="submit" value="submit" class="btn btn-outline-primary mt-5">บันทึก</button>
        </form>

        <div class="button">
            <a href="teacher_list.php"><button class="btn btn-outline-warning mt-5">กลับ</button></a>
        </div><br>
    </div>
</body>