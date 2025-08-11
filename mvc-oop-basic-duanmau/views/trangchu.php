<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f5f5f5;
        }
        .header {
            background-color: black;
            display: flex;
            padding: 10px 20px;
            justify-content: space-between;
            align-items: center;
            color: white;
        }
        .header a {
            color: #fff;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
        }
        .header a:hover {
            background-color: #555;
        }
        .banner img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
        }
        .content {
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        .product-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 sản phẩm mỗi hàng */
            gap: 20px;
        }
        .product-item {
            border: 1px solid #ccc;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.2s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .product-item:hover {
            transform: scale(1.03);
        }
        .product-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 5px;
        }
        .product-item h3 {
            margin: 10px 0 5px;
        }
        .product-item p {
            margin: 5px 0;
        }
        .footer {
            background-color: black; 
            color: white; 
            text-align: center; 
            padding: 20px 0; 
            margin-top: 30px; 
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="header">
        <div>
            <a href="#">Trang chủ</a>
            <a href="#">Danh mục</a>
            <a href="#">TOP yêu thích</a>
            <a href="#">Góp ý</a>
            <a href="#">Hỏi đáp</a>
        </div>
        <div>
            <?php if (!empty($_SESSION['user'])): ?>
                Xin chào, <?php echo htmlspecialchars($_SESSION['user']['user']); ?> 
                | <a href="index.php?act=logout">Đăng xuất</a>
            <?php else: ?>
                <a href="index.php?act=login">Đăng nhập</a> | 
                <a href="index.php?act=register">Đăng ký</a>
            <?php endif; ?>
        </div>
    </div>

    <div class="banner">
        <img src="img/OIP.webp" alt="">
    </div>

<div class="content">
    <h2>Các sản phẩm nổi bật</h2>
    <div class="product-list">
        <?php foreach($products as $p): ?>
            <?php 
                // Kiểm tra ảnh
                $imagePath = "img/OIP.jpg" . $p['img'];
                if (empty($p['img']) || !file_exists($imagePath)) {
                    $imagePath = "uploads/no-image.jpg"; // ảnh mặc định
                }
            ?>
            <div class="product-item">
                <img src="<?php echo $imagePath; ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
                <h3><?php echo htmlspecialchars($p['name']); ?></h3>
                <p><?php echo htmlspecialchars($p['detal']); ?></p>
                <p><strong><?php echo number_format($p['price'], 0, ',', '.'); ?> VND</strong></p>
                <p>Lượt xem: <?php echo htmlspecialchars($p['view']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

    <div class="footer">
        <p>Đỗ Hoàng Việt</p>
        <p>PH58574</p>
    </div>

</body>
</html>
