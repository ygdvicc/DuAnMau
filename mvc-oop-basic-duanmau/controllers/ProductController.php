<?php
class ProductController
{
    public $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
    }

    public function Home()
    {
        $title = "Trang chủ";
         $products = $this->modelProduct->getAllProduct();
        require_once './views/trangchu.php';
    }

    public function LoginForm()
    {
        $title = "Đăng nhập";
        require_once './views/login.php';
    }

    public function LoginPost()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = $this->modelProduct->login($username, $password);

        if ($user) {
            $_SESSION['user'] = $user;
            header("Location: index.php");
            exit();
        } else {
            $error = "Sai tên đăng nhập hoặc mật khẩu";
            require_once './views/login.php';
        }
    }

    public function Logout()
    {
        unset($_SESSION['user']);
        header("Location: index.php");
        exit();
    }
    public function RegisterForm()
{
    $title = "Đăng ký";
    require_once './views/register.php';
}

public function RegisterPost()
{
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $telephone = $_POST['telephone'] ?? '';

    if ($this->modelProduct->register($username, $password, $email, $address, $telephone)) {
        header("Location: index.php?act=login");
        exit();
    } else {
        $error = "Đăng ký thất bại, vui lòng thử lại!";
        require_once './views/register.php';
    }
}

}
