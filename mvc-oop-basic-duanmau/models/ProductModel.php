<?php 
class ProductModel 
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllProduct()
    {
        {
        $sql = "SELECT * FROM product";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    }

    // Đăng nhập
    public function login($username, $password)
    {
        $sql = "SELECT * FROM account WHERE user = :user AND pass = :pass";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':user' => $username,
            ':pass' => $password
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // Đăng ký
public function register($username, $password, $email, $address, $telephone)
{
    $sql = "INSERT INTO account (user, pass, email, address, telephone, role) 
            VALUES (:user, :pass, :email, :address, :telephone, 0)";
    $stmt = $this->conn->prepare($sql);
    return $stmt->execute([
        ':user' => $username,
        ':pass' => $password,
        ':email' => $email,
        ':address' => $address,
        ':telephone' => $telephone
    ]);
}

}
