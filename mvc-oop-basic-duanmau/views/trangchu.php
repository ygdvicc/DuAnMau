<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f9f9f9;
        }
        body > *{
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
        }
        .header{
            background-color: black;
            display: flex;
            padding: 10px 20px;
            justify-content: space-between;
            align-items: center;
        }
        .header-right {
            background-color: black;
            display: flex;
            padding: 10px 20px;
        }
        .header-right a{
            color: #fff;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition:background-color 0.3s;
        }
        .header-right a:hover {
            background-color: #555;
        }
        .header-left a{
            color: #fff;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .header-left a:hover {
            background-color: #555;
        }
        .content {
            display: flex;
            flex-direction: column; 
            gap: 20px; 
            padding: 20px;
        }

        .content1, .content2 {
            display: flex; 
            gap: 20px; 
        }

        .content1 > div, .content2 > div {
            border: 1px solid #ccc; 
            padding: 10px;
            flex: 1; 
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 8px;
        }

        .content1 img, .content2 img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .content img {
            width: 500px;

        }
        .footer {
        background-color: black; 
        color: white; 
        text-align: center; 
        padding: 20px 0; 
        margin-top: 30px; 
        font-size: 16px;
    }

    .footer p {
        margin: 5px 0; 
    }

    </style>
</head>
<body>
    <div class="header">
        <div class="header-right">
    <a href="#">Trang chủ</a>
    <a href="#">Danh mục</a>
    <a href="#">TOP yêu thích</a>
    <a href="#">Góp ý</a>
    <a href="#">Hỏi đáp</a>
        </div>
        <div class="header-left">

<?php if (!empty($_SESSION['user'])): ?>
    <p>Xin chào, <?php echo htmlspecialchars($_SESSION['user']['user']); ?> 
       | <a href="index.php?act=logout">Đăng xuất</a></p>
<?php else: ?>
    <a href="index.php?act=login">Đăng nhập</a> | 
    <a href="index.php?act=register">Đăng ký</a>
<?php endif; ?>

        </div>
    </div>
    <div class="banner">
        <img src="img/OIP.webp" alt="">
    </div>
    <div class="content"> <h1>các sản phẩm nổi bật</h1>
    <div class="content1">
        <div>
            <img src="img/OIP.webp" alt="">
            <h1>đồ 1</h1>
            <p>mô tả</p>
        </div>
        <div>
            <img src="" alt="">
            <h1>đồ 1</h1>
            <p>mô tả</p>
        </div>
        <div>
            <img src="" alt="">
            <h1>đồ 1</h1>
            <p>mô tả</p>
        </div>
    </div>

    <div class="content2">
        <div>
            <img src="" alt="">
            <h1>đồ 2</h1>
            <p>mô tả</p>
        </div>
        <div>
            <img src="" alt="">
            <h1>đồ 2</h1>
            <p>mô tả</p>
        </div>
        <div>
            <img src="" alt="">
            <h1>đồ 2</h1>
            <p>mô tả</p>
        </div>
    </div>
</div>


        <div class="footer">
            <p>Đỗ Hoàng Việt</p>
            <p>PH58574</p>
        </div>
</body>
</html>