<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập (Demo cứng, có thể thay bằng kiểm tra CSDL)
    $demo_email = "user@example.com";
    $demo_password = "123456";

    if ($email == $demo_email && $password == $demo_password) {
        $_SESSION['user'] = $email;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Sai email hoặc mật khẩu!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form action="" method="POST">
        <h2>Đăng Nhập</h2>

        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>

        <label>Email</label>
        <input type="email" name="email" placeholder="Nhập email" required>

        <label>Mật khẩu</label>
        <input type="password" name="password" placeholder="Nhập mật khẩu" required>

        <button type="submit">Đăng Nhập</button>

        <p>Chưa có tài khoản? <a href="register.php">Đăng Ký</a></p>
        <p><a href="#">Quên mật khẩu?</a></p>
    </form>
</div>

</body>
</html>