<?php
session_start();
include('navbar_teacher.php');
include('../connection.php');
?>

<div class="container text-center bg-body-secondary mt-3">
    <form action="teacherSetPassworddb.php" method="post" class="">
        <div class="row row-cols-2">
            <div class="col-sm-6 mt-3"><b>รหัสผ่านเก่า</b></div>
            <div class="col-sm-3 mt-3">
                <input type="password" name="old-password" class="form-control form-control-xs " required>
            </div>
            <div class="col-sm-6 mt-3"> <b>รหัสผ่านใหม่</b></div>
            <div class="col-sm-3 mt-3">
                <input type="password" name="new-password" class="form-control form-control-xs" required>
            </div>
            <div class="col-sm-6 mt-3"> <b>ยืนยันรหัสผ่านใหม่</b></div>
            <div class="col-sm-3 mt-3">
                <input type="password" name="confirm-new-password" class="form-control form-control-xs" required>
            </div>

        </div>
        <button class="btn btn-outline-success mt-5" type="submit">บันทึก</button>
    </form>

    <div class="button">
        <a href="teacher_teacher_info.php"><button class="btn btn-outline-warning mt-5">กลับ</button></a>
    </div>
</div>