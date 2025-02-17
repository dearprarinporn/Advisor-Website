<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบอาจารย์ที่ปรึกษา</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="login-container">
        <div class="wrapper">
            <form action="loginauthen.php" method="post">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" name="email" placeholder="Email" required>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button type="submit" class="loginbtn">Login</button>
                
            </form>
        </div>
    </div>
</body>

</html>