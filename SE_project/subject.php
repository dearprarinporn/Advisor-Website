<body>
    <?php
    include('navbar.php');
    include('connection.php');

    $sql = "SELECT * from subject ";
    $result = mysqli_query($connect, $sql);


    ?>
    <div class="container text-center bg-body-secondary mt-3">
        <div class="d-flex justify-content-start">
        <h2>รายวิชา</h2>
        </div>
        <div class="container-fluid-xl mt-1">
            <form action="subjectsearch.php" class="row g-3 align-items-center" role="search" method="post">
                <div class="col-auto">
                    <label for="search">ค้นหารายวิชา</label>
                </div>
                <div class="col-auto">
                    <input class="form-control me-2" name="subject_id" type="search" placeholder="Search"
                    aria-label="Search" required>
                </div>
                <div class="col-auto">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>
            </form>
            
            <div class="nav nav-tabs d-flex justify-content-between">
                <a href="subject.php"><button class="btn btn-outline-primary mt-5">วิชาทั้งหมด</button></a>
                <a href="subjectadd.php"><button class="btn btn-outline-success mt-5">เพิ่มรายวิชา</button></a>
            </div>
            <table class='table table-striped-columns mt-1'>
                <tr>
                    <td>รหัสวิชา</td>
                    <td>ชื่อวิชา</td>
                    <td></td>
                </tr>
                <?php while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['subject_id'] . "</td>";
                    echo "<td>" . $row['subject_name'] . "</td>";
                    echo "<td>" . "<a href='subjectedit.php?id=$row[0]'><button class='btn btn-outline-danger '>แก้ไขรายวิชา</button></a>" . "</td>" ; 
                    echo "<td>" . "<a href='subjectdelete.php?id=$row[0]'><button class='btn btn-outline-danger '>ลบรายวิชา</button></a>" . "</td>" ; 
                    echo "</tr>";
                }
                ?>
            </table>


        </div>
        <a href="studentMain.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a>
    </div>

</body>