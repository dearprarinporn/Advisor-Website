<?php
include('navbar.php');
?>

<body>
    <div class="container text-center bg-body-secondary mt-3">
        <form action="subjectadddb.php" method="post">
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"> <b>รหัสวิชา</b></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="id" placeholder="รหัสวิชา" required>
                </div>

                <div class="col-sm-6 mt-3"> <b>ชื่อชื่อวิชา</b></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="name" placeholder="ชื่อวิชา" required>
                </div>
            </div>

            <button class="btn btn-outline-success mt-4" type="submit">เพิ่ม</button>
        </form>

        <a href="subject.php"><button class="btn btn-outline-warning mt-5">กลับ</button></a>

    </div>
</body>