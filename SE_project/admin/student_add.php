<?php
include('navbar_admin.php');
include('connection.php');

$sql1 = "SELECT * FROM student ";
$result1 = mysqli_query($connect, $sql1);
?>

<body>

    <div class="container text-center bg-body-secondary mt-3"><br>
        <h2>เพิ่มข้อมูลนักศึกษา</h2>
        <form action="student_add_db.php" method="post">
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"> <b>รหัสนักศึกษา</b></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="student_id"
                        placeholder="รหัสนักศึกษา"
                        required ><br>

                </div>
                
                <div class="col-sm-6 mt-3"> <b>คำนำหน้า</b></div>
                <div class="col-sm-6 mt-3">
                    <select class="form-select form-select-sm" name="prefix" required>
                        <option value="" disabled selected>-เลือก-</option>
                        <option value="นาย">นาย</option>
                        <option value="นางสาว">นางสาว</option>
                    </select><br>
                </div>

                <div class="col-sm-6 mt-3"> <b>ชื่อนักศึกษา</b></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="student_name"
                        placeholder="ชื่อนักศึกษา"
                        required><br>
                </div>


                <div class="col-sm-6 mt-3"> <b>ภาควิชา</b></div>
                <div class="col-sm-6 mt-3">
                    <select class="form-select form-select-sm" name="department" required>
                        <option value="" disabled selected>-เลือก-</option>
                        <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
                        <option value="คณิตศาสตร์">คณิตศาสตร์</option>
                        <option value="สถิติ">สถิติ</option>
                        <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                        <option value="เทคโนโลยีสารสนเทศและการสื่อสาร">เทคโนโลยีสารสนเทศและการสื่อสาร</option>

                    </select><br>
                </div>
                <div class="col-sm-6 mt-3"> <b>Email</b><br><br><br></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="email" placeholder="Email" required>
                </div>

            </div>
            <input type="hidden" value="12345" name="password">
            <input type="hidden" value="student" name="type">
            <button type="submit" value="submit" class="btn btn-outline-primary">เพิ่มข้อมูล</button>

        </form>


        <div class="button">
            <a href="student_list.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>

        </div>
    </div>
</body>