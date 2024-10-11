<body>
    <?php 
    include('navbar.php') ;
    include('connection.php') ;

    $sql = "SELECT * from student where student_id = " . $_SESSION["studentID"]  ; 
    $result = mysqli_query($connect , $sql) ;
    $row = mysqli_fetch_array($result) ;
    extract($row)
    
    
    ?>
    <div class="container text-center bg-body-secondary mt-3">
        <div class="row row-cols-2">
            <div class="col-sm-6 mt-3"><b>รหัสนักศึกษา</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $student_id ?></div>
            <div class="col-sm-6 mt-3"><b>คำนำหน้า</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $prefix ?></div>
            <div class="col-sm-6 mt-3"> <b>ชื่อ - นามสกุล</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $student_name ?></div>
            <div class="col-sm-6 mt-3"> <b>ภาควิชา</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $department ?></div>
            <div class="col-sm-6 mt-3"> <b>Email</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $email ?></div>
        </div>

        <div class="button mt-5">
            <a href="studentMain.php"><button class="btn btn-outline-warning">กลับ</button></a>
            <a href="studentedit.php"><button class="btn btn-outline-success">แก้ไขข้อมูล</button></a>
            <a href="resetPassword.php"><button class="btn btn-outline-success">แก้ไขรหัสผ่าน</button></a>
        </div>
    </div>
</body>