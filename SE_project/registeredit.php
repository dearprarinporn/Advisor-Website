<?php
include('navbar.php');
include('connection.php');

$subjectID = $_GET["subject_id"];

$query = "SELECT * FROM register where subject_id = '$subjectID' AND student_id = '". $_SESSION["studentID"]."' ; ";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);
extract($row);
?>

<div class="container text-center bg-body-secondary mt-3">
    <form action="registereditdb.php" method="post">
        <div class="row row-cols-2">
            <div class="col-sm-6 mt-3"><b>รหัสวิชา</b></div>
            <div class="col-sm-6 mt-3">
                <?php echo $subject_id ?>
            </div>
            <div class="col-sm-6 mt-3"> <b>ปีการศึกษา</b></div>
            <div class="col-sm-6 mt-3">
                <select class="form-select form-select sm" name="semester" id="semester" required>
                    <option value="<?php echo $semester ?>" selected ><?php echo $semester ?></option>
                    <option value="1/2565">1/2565</option>
                    <option value="2/2565">2/2565</option>
                    <option value="1/2566">1/2566</option>
                    <option value="2/2566">2/2566</option>
                </select>
            </div>
            <div class="col-sm-6 mt-3"> <b>เกรด</b></div>
            <div class="col-sm-6 mt-3">
                <select class="form-select form-select sm" name="grade" id="grade" required>
                    <option value="value="<?php echo $grade ?> selected><?php echo $grade ?></option>
                    <option value="A">A</option>
                    <option value="B+">B+</option>
                    <option value="B">B</option>
                    <option value="C+">C+</option>
                    <option value="C">C</option>
                    <option value="D+">D+</option>
                    <option value="D">D</option>
                </select>
            </div>
            <input type="hidden" value="<?php echo $subject_id ?>" name="subject_id">
        </div>
        <button class="btn btn-outline-success" type="submit">บันทึก</button>
    </form>

    <div class="button">
        <a href="register.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
    </div>
</div>