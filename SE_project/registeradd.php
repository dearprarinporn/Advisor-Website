<?php
include('navbar.php');
include('connection.php') ;

$query = "SELECT * from subject" ;
$result = mysqli_query($connect , $query) ;
$row = mysqli_fetch_array($result) ;
extract($row) ;


?>

<body>
    <div class="container text-center bg-body-secondary mt-3">
        <form action="registeradddb.php" method="post">
            <div class="row row-cols-2">
                <div class="col-sm-6 mt-3"> <b>ชื่อวิชา</b></div>
                <div class="col-sm-6 mt-3">
                <select class="form-select form-select sm" name="subjectID" id="subjectID" required>
                        <option value="" disabled selected>ชื่อวิชา</option>
                        <?php foreach ($result as $results) { ?>
                            <option value="<?php echo $results["subject_id"] ?>"><?php echo $results["subject_name"] ?></option>
                            <?php } ?>
                    </select>                
                </div>

                <div class="col-sm-6 mt-3"> <b>ปีการศึกษา</b></div>
                <div class="col-sm-6 mt-3">
                <select class="form-select form-select sm" name="semester" id="semester" required>
                        <option value="" disabled selected>ปีการศึกษา</option>
                        <option value="1/2565" >1/2565</option>
                        <option value="2/2565" >2/2565</option>
                        <option value="1/2566" >1/2566</option>
                        <option value="2/2566" >2/2566</option>
                    </select>               
                 </div>

                <div class="col-sm-6 mt-3"> <b>เกรด</b></div>
                <div class="col-sm-6 mt-3">
                    <select class="form-select form-select sm" name="grade" id="grade" required>
                        <option value="" disabled selected>เกรด</option>
                        <option value="A" >A</option>
                        <option value="B+" >B+</option>
                        <option value="B" >B</option>
                        <option value="C+" >C+</option>
                        <option value="C" >C</option>
                        <option value="D+" >D+</option>
                        <option value="D" >D</option>
                    </select>
                </div>
            </div>

            <input type="hidden" name="studentID" value="<?php echo $_SESSION["studentID"] ; ?>">
            <button class="btn btn-outline-success mt-4" type="submit">เพิ่ม</button>
        </form>

        <a href="register.php"><button class="btn btn-outline-warning mt-5">กลับ</button></a>

    </div>
</body>