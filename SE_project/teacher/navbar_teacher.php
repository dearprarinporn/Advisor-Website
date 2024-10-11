<?php
include('../connection.php');

$query = "SELECT * from teacher where teacher_id = '" . $_SESSION["teacherID"] . "' ; ";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);
extract($row);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ระบบจัดการที่ปรึกษา</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

</nav>

<!-- As a heading -->
<nav class="navbar navbar-dark bg-success">
  <div class="container-fluid">
    <div>
      <span class="navbar-brand mb-0 h1">อาจารย์</span>
    </div>
    <div class="d-flex">
      <div class="mt-2 mx-5">
      <span class="navbar-brand mb-0 h4"><?php echo $teacher_name ?></span>
      </div>
      <div>
        <a href="../logout.php" class="btn btn-danger float-end">Logout</a>
      </div>
    </div>
</nav>

</body>

</html>