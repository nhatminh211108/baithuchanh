<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form action="" method="POST">
        <h2>Đăng Ký</h2>
        <label>Họ và Tên</label>
        <input type="text" name="fullname" placeholder="Nhập họ tên" required>

        <label>Email</label>
        <input type="email" name="email" placeholder="Nhập email" required>

        <label>Mật khẩu</label>
        <input type="password" name="password" placeholder="Nhập mật khẩu" required>

        <label>Xác nhận mật khẩu</label>
        <input type="password" name="confirm_password" placeholder="Xác nhận mật khẩu" required>

        <button type="submit" name="register">Đăng Ký</button>

        <p>Đã có tài khoản? <a href="#">Đăng Nhập</a></p>
        <p><a href="#">Quên mật khẩu?</a></p>
    </form>
</div>

</body>
</html>