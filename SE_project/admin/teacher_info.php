<body>
    <?php
    include('navbar_admin.php');
    include('connection.php') ;

    $teacher_id = $_GET["id"] ;
   

    $sql = "SELECT * from teacher  where teacher_id = '$teacher_id' ; " ;
    $result = mysqli_query($connect , $sql) ;
    $row = mysqli_fetch_array($result) ;
    extract($row) ;

    ?><br>

    <div class="container text-center bg-body-secondary mt-3"><br>
    <h2>ข้อมูลส่วนตัวอาจารย์</h2><br><br><br><br>
    <div class="row row-cols-2">
            <div class="col-sm-6 mt-3"><b>รหัสอาจารย์</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $teacher_id ?></div>
            <div class="col-sm-6 mt-3"><b>E-mail</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $email ?></div>
            <div class="col-sm-6 mt-3"><b>ตำแหน่งวิชาการ</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $academic_position ?></div>
            <div class="col-sm-6 mt-3"> <b>ชื่อ - นามสกุล</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $teacher_name ?></div>
            <div class="col-sm-6 mt-3"> <b>หลักสูตร</b></div>
            <div class="col-sm-6 mt-3"> <?php echo $tcdepartment ?></div>
            
        </div><br><br><br><br><br><br><br><br><br><br>

        <div class="button mt-5">
            <a href="teacher_list.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
            <a href="teacher_edit.php?id=<?php echo $teacher_id ?>"><button class="btn btn-outline-danger">แก้ไขข้อมูล</button></a>
        </div><br>
    </div>
</body>