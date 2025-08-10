<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Ở đây bạn sẽ lưu dữ liệu vào database
    // Ví dụ đơn giản:
    // $conn = new mysqli('localhost', 'root', '', 'ten_database');
    // $conn->query("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')");

    header('Location: login.php'); // Đăng ký xong quay về login
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
</head>
<body>
    <h2>Đăng ký</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Tên đăng nhập" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Mật khẩu" required><br>
        <button type="submit">Tạo tài khoản</button>
    </form>
    <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
</body>
</html>
