<?php
include('connection.php');
include('navbar_admin.php');
?>
<br>
</br>
<!DOCTYPE html>
<html>

<body>
  <?php
  echo "ข้อมูลอาจารย์";
  ?>
  <br></br>
  <form action="result_teacher.php" method="post">
    <form>
      <label>ชื่ออาจารย์:</label>
      <input type="text" seaech="search" name="search">
      <input type="submit" value="ค้นหา">
</body>
<br>
</br>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>
<table>
  <tr>
    <th>teacher_id</th>
    <th>teacher_name</th>
    <th>academic_position</th>
  </tr>
  <?php

  $sql = "SELECT * from teacher";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["teacher_id"] . "</td>";
    echo "<td>" . $row["teacher_name"] . "</td>";
    echo "<td>" . $row["academic_position"] . "</td>";
    echo "<td> <a href = 'update.php?id=$row[0]' onclick=\"return confirm('ต้องการแก้ไขข้อมูลหรือไม่')\" >ตรวจสอบข้อมูล</a></td> ";
    echo "<td> <a href = 'teacher_delete_db.php?id=$row[0]' onclick=\"return confirm('ต้องการลบข้อมูลหรือไม่')\" >ลบ</a></td> ";
    echo "</tr>";
  }
  ?>
</table>

<?php
mysqli_close(($conn));
?>
<div class="container text-center bg-body-secondary mt-3">
  <div class="button">
    <a href="adminMain.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
  </div>
</div>

</html>