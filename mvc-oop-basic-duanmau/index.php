<?php
session_start(); // Bắt buộc có để dùng $_SESSION

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/ProductController.php';

// Require toàn bộ file Models
require_once './models/ProductModel.php';

// Route
$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => (new ProductController())->Home(),
    'login' => (new ProductController())->LoginForm(),
    'login_post' => (new ProductController())->LoginPost(),
    'logout' => (new ProductController())->Logout(),

    // Trang đăng ký
    'register' => (new ProductController())->RegisterForm(),

    // Xử lý đăng ký
    'register_post' => (new ProductController())->RegisterPost(),
};