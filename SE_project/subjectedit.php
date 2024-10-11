<?php 
    include('navbar.php') ;
    include('connection.php') ;

    $subjectID = $_GET['id'] ;

    $query = "SELECT * from subject where subject_id = '$subjectID' " ;
    $result = mysqli_query($connect , $query) ;
    $row = mysqli_fetch_array($result) ;
    extract($row) ;
?>

<body>
    <div class="container text-center bg-body-secondary mt-3">
        <form action="subjecteditdb.php" method="post">
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"> <b>รหัสวิชา</b></div>
                <div class="col-sm-6 mt-3">
                    <?php echo $subject_id ?>
                </div>

                <div class="col-sm-6 mt-3"> <b>ชื่อชื่อวิชา</b></div>
                <div class="col-sm-6 mt-3">
                    <input class="form-control form-control-sm" type="text" name="name" value="<?php echo $subject_name ?>">
                </div>
            </div>

            <input type="hidden" value="<?php echo $subject_id ?>" name="id">
            <button class="btn btn-outline-success mt-4" type="submit" value="submit">บันทึก</button>
        </form>

        <a href="subject.php"><button class="btn btn-outline-warning mt-5">กลับ</button></a>

    </div>
</body>
