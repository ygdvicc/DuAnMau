<?php 

// Biến môi trường, dùng chung toàn hệ thống
// Khai báo dưới dạng HẰNG SỐ để không phải dùng $GLOBALS

define('BASE_URL'       , 'http://localhost/duanmau/mvc-oop-basic/');

define('DB_HOST'    , 'localhost');
define('DB_PORT'    , 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME'    , 'duanmau');  // Tên database

define('PATH_ROOT'    , __DIR__ . '/../');


try {
    $conn = new PDO(
        "mysql:host=" . DB_HOST .";dbanme=" . DB_NAME . ";port=" . DB_PORT,
        DB_USERNAME,
        DB_PASSWORD,
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){
    die("Kết nối CSDL thất bại: " . $e->getMessage());
}