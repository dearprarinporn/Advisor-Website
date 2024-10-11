<body>
    <?php
    include('navbar_admin.php');
    include('connection.php');

    $student_name = $_POST['student_name'];
    $sql = "SELECT * from student where student_name LIKE '%$student_name%' or student_id LIKE '%$student_name%'  ";
    $result = mysqli_query($connect, $sql);


    ?>
    <div class="container text-center bg-body-secondary mt-3">
        <div class="container-fluid-xl mt-1">
            <form action="student_search.php" class="row g-3 align-items-center" role="search" method="post">
                <div class="col-auto">
                    <label for="search">ชื่อนักศึกษา</label>
                </div>

                <div class="col-auto">
                    <input class="form-control me-2" name="student_name" type="search" placeholder="Search"
                        aria-label="Search">
                </div>

                <div class="col-auto">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>

            </form>

            <div class="nav nav-tabs d-flex justify-content-between">
 
                <a href="student_list.php"><button class="btn btn-outline-success mt-5">รายชื่อนักศึกษาทั้งหมด</button></a>
            </div>
            <table class='table table-striped-columns mt-1'>
                <tr>
                    <td>รหัสนักศึกษา</td>
                    <td>ชื่อนักศึกษา</td>
                    <td>ภาควิชา</td>

                    <td></td>
                </tr>
                
                <?php 
                
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['student_id'] . "</td>";
                    echo "<td>" . $row['student_name'] . "</td>";
                    echo "<td>" . $row['department'] . "</td>";
                    echo "<td>" . "<a href='student_info.php?id=$row[0]'><button class='btn btn-outline-danger '>ตรวจสอบข้อมูล</button></a>" . "</td>" ; 
                    echo "<td>" . "<a href='student_delete_db.php?id=$row[0]'><button class='btn btn-outline-danger '>ลบ</button></a>" . "</td>" ; 
                    echo "</tr>";
                }
                ?>
            </table>


        </div>
                <a href="student_list.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>

    </div>

</body>