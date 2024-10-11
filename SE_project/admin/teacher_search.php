<body>
    <?php
    include('navbar_admin.php');
    include('connection.php');

    $teacher_name = $_POST["teacher_name"];

    $sql = "SELECT * from teacher where teacher_name LIKE '%$teacher_name%' or teacher_id LIKE '%$teacher_name%' ";
    $result = mysqli_query($connect, $sql);


    ?><br>
    <div class="container text-center bg-body-secondary mt-3"><br>
    <h2>ค้นหาอาจารย์</h2><br>
    <div class="container-fluid-xl mt-1">
            <form action="teacher_search.php" class="row g-3 align-items-center" role="search" method="post">
                <div class="col-auto">
                    <label for="search">ชื่ออาจารย์</label>
                </div>

                <div class="col-auto">
                    <input class="form-control me-2" name="teacher_name" type="search" placeholder="Search"
                        aria-label="Search">
                </div>

                <div class="col-auto">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>

            </form>

            <div class="nav nav-tabs d-flex justify-content-between">
 
                <a href="teacher_list.php"><button class="btn btn-outline-success mt-5">รายชื่ออาจารย์ทั้งหมด</button></a>
            </div><br>
            <table class='table table-striped-columns mt-1'>
                <tr>
                    <td>รหัสอาจารย์</td>
                    <td>ชื่ออาจารย์</td>
                    <td>ตำแหน่งวิชาการ</td>
                    <td></td>
                    <td></td>
                </tr>
                
                <?php 
                
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['teacher_id'] . "</td>";
                    echo "<td>" . $row['teacher_name'] . "</td>";
                    echo "<td>" . $row['academic_position'] . "</td>";
                    echo "<td>" . "<a href='teacher_info.php?id=$row[0]'><button class='btn btn-outline-danger '>ตรวจสอบข้อมูล</button></a>" . "</td>" ; 
                    echo "<td>" . "<a href='teacher_delete_db.php?id=$row[0]'><button class='btn btn-outline-danger '>ลบ</button></a>" . "</td>" ; 
                    echo "</tr>";
                }
                ?>
            </table><br><br><br><br><br><br><br>


        </div>
        <div class="button">
                <a href="teacher_list.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
                </div><br>
    </div>

</body>