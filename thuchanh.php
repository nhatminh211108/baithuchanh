<?php
session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="register-container">
    <h2>Đăng Ký</h2>
    <form action="process_register.php" method="POST">
        <label for="fullname">Họ và Tên</label>
        <input type="text" id="fullname" name="fullname" required placeholder="Nhập họ tên">
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Nhập email">
        
        <label for="password">Mật khẩu</label>
        <input type="password" id="password" name="password" required placeholder="Nhập mật khẩu">
        
        <label for="confirm_password">Xác nhận mật khẩu</label>
        <input type="password" id="confirm_password" name="confirm_password" required placeholder="Xác nhận mật khẩu">
        
        <button type="submit" class="primary">Đăng Ký</button>
    </form>
    <p>Đã có tài khoản? <a href="login.php">Đăng Nhập</a></p>
    <p><a href="reset-password.php">Quên mật khẩu?</a></p>
</div>

</body>
</html>