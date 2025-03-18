<?php
    // Định nghĩa biến
    $title = "Trang Chủ";
    $logo_text = "";
    $welcome_text = "Chào Mừng Đến Với Thế Giới Đồ Hiệu";
    $description = "Đây là nơi bạn có thể khám phá các dịch vụ tuyệt vời của chúng tôi. Hãy đăng ký hoặc đăng nhập để trải nghiệm ngay hôm nay!";
    $copyright = "&copy; 2025 - Bản quyền thuộc về Nhật Minh";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Body */
        body {
            background: #f8fcff;
            text-align: center;
            padding: 20px;
        }

        /* Header */
        header {
            background: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        /* Navigation */
        nav ul {
            list-style: none;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        /* Main */
        main {
            margin: 50px auto;
            max-width: 600px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #666;
        }

        /* Buttons */
        .buttons {
            margin-top: 20px;
        }

        .button {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            display: inline-block;
            margin: 10px;
        }

        .register {
            background: #4f46e5;
            color: white;
        }

        .login {
            background: #e5e7eb;
            color: black;
        }

        /* Footer */
        footer {
            margin-top: 50px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo"><?php echo $logo_text; ?></div>
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="contact.php">Liên Hệ</a></li>
                <li><a href="register.php">Đăng Ký</a></li>
                <li><a href="login.php">Đăng Nhập</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1><?php echo $welcome_text; ?></h1>
        <p><?php echo $description; ?></p>
        <div class="buttons">
            <a href="register.php" class="button register">Đăng Ký</a>
            <a href="login.php" class="button login">Đăng Nhập</a>
        </div>
    </main>
    <footer>
        <p><?php echo $copyright; ?></p>
    </footer>
</body>
</html>