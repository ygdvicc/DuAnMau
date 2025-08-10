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
    </style>
</head>
<body>
    <div class="header">
        <div class="header-right">
    <a href="#">Trang chủ</a>
    <a href="#">Giới thiệu</a>
    <a href="#">Liên hệ</a>
    <a href="#">Góp ý</a>
    <a href="#">Hỏi đáp</a>
        </div>
        <div class="header-left">
            <a href="#">Đăng nhập</a>
        </div>
    </div>
    <div class="banner">
        <img src="img/OIP.webp" alt="">
    </div>
    
</body>
</html>