<body>
    <?php session_start();
    include('navbar_teacher.php') ;
    include('../connection.php') ;

    $sql = "SELECT * from teacher where teacher_id = '".$_SESSION["teacherID"]."' ; "  ; 
    $result = mysqli_query($connect , $sql) ;
    $row = mysqli_fetch_array($result) ;
    extract($row)
    
    
    ?>
    <div class="container text-center bg-body-secondary mt-3">
        <div class="row row-cols-2">
            <div class="col-sm-6 mt-3"><b>รหัสอาจารย์</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $teacher_id ?></div>
            <div class="col-sm-6 mt-3"><b>ตำแหน่งวิชาการ</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $academic_position ?></div>
            <div class="col-sm-6 mt-3"> <b>ชื่อ - นามสกุล</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $teacher_name ?></div>
            <div class="col-sm-6 mt-3"> <b>หลักสูตร</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $tcdepartment ?></div>
            <div class="col-sm-6 mt-3"> <b>Email</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $email ?></div>
            
        </div>

        <div class="button">
            <a href="teacherMain.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
            <a href="teacherEdit.php"><button class="btn btn-outline-success">แก้ไขข้อมูล</button></a>
            <a href="teacherSetPassword.php"><button class="btn btn-outline-success">แก้ไขรหัสผ่าน</button></a>
        </div>
    </div>
</body>