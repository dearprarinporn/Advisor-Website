<!DOCTYPE html>
<html lang="en">
<?php
include('connection.php');
session_start();

$query = "SELECT * from student where student_id = '" . $_SESSION["studentID"] . "' ; ";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);
extract($row);
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการที่ปรึกษา</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<nav class="navbar bg-body-secondary">
    <div class="container-fluid">
        <div>
            <span class="navbar-brand mb-0 h1">นักศึกษา</span>
        </div>
        <div class="d-flex">
            <div class="mt-2 mx-5">
                <span class="navbar-brand mb-0 h4"><?php echo $student_name; ?></span>
            </div>
            <div>
                <a href="logout.php"><button class="btn btn-outline-danger">logout</button></a>
            </div>
        </div>
    </div>
</nav>
</body>

</html>