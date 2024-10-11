<body>
    <?php
    include('navbar_admin.php');
    include('connection.php');



    $ack = $_GET["ack"];

    if ($ack == 'all') {
        $sql = "SELECT * from teacher ; ";
        $result = mysqli_query($connect, $sql);
    }
    
    if ($ack == 'comsci') {
        $sql = "SELECT * from teacher where tcdepartment = 'วิทยาการคอมพิวเตอร์' ; ";
        $result = mysqli_query($connect, $sql);
    }
    
    if ($ack == 'math') {
        $sql = "SELECT * from teacher where tcdepartment = 'คณิตศาสตร์' ; ";
        $result = mysqli_query($connect, $sql);
    }
    
    
    if ($ack == 'stats') {
        $sql = "SELECT * from teacher where tcdepartment = 'สถิติ' ; ";
        $result = mysqli_query($connect, $sql);
    }
    
    
    if ($ack == 'it') {
        $sql = "SELECT * from teacher where tcdepartment = 'เทคโนโลยีสารสนเทศ' ; ";
        $result = mysqli_query($connect, $sql);
    }
    
    
    if ($ack == 'ict') {
        $sql = "SELECT * from teacher where tcdepartment = 'เทคโนโลยีสารสนเทศและการสื่อสาร' ; ";
        $result = mysqli_query($connect, $sql);
    }
    
    ?><br>
    <div class="container text-center bg-body-secondary mt-3"><br>
    <h2>ข้อมูลอาจารย์</h2><br>   
    <div class="d-flex justify-content-start">
            
        </div>
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
                <div>
                <div>
                <a href="student_list_department.php?ack=all"><button
                        class="btn btn-outline-primary mt-5">ทุกหลักสูตร</button></a>

                <a href="teacher_list_department.php?ack=comsci"><button
                        class="btn btn-outline-primary mt-5">วิทยาการคอมพิวเตอร์</button></a>
                <a href="teacher_list_department.php?ack=math"><button
                        class="btn btn-outline-primary mt-5">คณิตศาสตร์</button></a>
                <a href="teacher_list_department.php?ack=stats"><button
                        class="btn btn-outline-primary mt-5">สถิติ</button></a>
                <a href="teacher_list_department.php?ack=it"><button
                        class="btn btn-outline-primary mt-5">เทคโนโลยีสารสนเทศ</button></a>
                <a href="teacher_list_department.php?ack=ict"><button
                        class="btn btn-outline-primary mt-5">เทคโนโลยีสารสนเทศและการสื่อสาร</button></a>
            </div>
                </div>
                <div>
                    <a href="teacher_add.php"><button
                            class="btn btn-outline-success mt-5">เพิ่มข้อมูลอาจารย์</button></a>
                </div>

            </div><br>
            <table class='table table-striped-columns mt-1'>
                <tr>
                    <td>รหัสอาจารย์</td>
                    <td>ชื่ออาจารย์</td>
                    <td>ตำแหน่งวิชาการ</td>
                    <td>หลักสูตร</td>
                    <td></td>
                    <td></td>
                </tr>

                <?php

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['teacher_id'] . "</td>";
                    echo "<td>" . $row['teacher_name'] . "</td>";
                    echo "<td>" . $row['academic_position'] . "</td>";
                    echo "<td>" . $row['tcdepartment'] . "</td>";
                    echo "<td>" . "<a href='teacher_info.php?id=$row[0]'><button class='btn btn-outline-danger '>ตรวจสอบข้อมูล</button></a>" . "</td>";
                    echo "<td>" . "<a href='teacher_delete_db.php?id=$row[0]'><button class='btn btn-outline-danger '>ลบ</button></a>" . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>


        <div class="button"><br><br><br><br>
        <a href="adminMain.php"><button class="btn btn-outline-warning hover-white">กลับ</button></a><br>

    </div><br>
    </div>
</body>