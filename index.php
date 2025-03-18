<?php
include 'db.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa Hàng Thời Trang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Sản Phẩm Mới</h2>
        <div class="product-list">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="product">
                    <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                    <h3><?php echo $row['name']; ?></h3>
                    <p class="price"><?php echo number_format($row['price'], 0, ',', '.'); ?>₫</p>
                    <button class="wishlist">♥️</button>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>