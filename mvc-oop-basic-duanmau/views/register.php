<h1>Đăng ký</h1>

<?php if (!empty($error)): ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>

<form action="index.php?act=register_post" method="POST">
    <label>Tên đăng nhập:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Mật khẩu:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Địa chỉ:</label><br>
    <input type="text" name="address" required><br><br>

    <label>Số điện thoại:</label><br>
    <input type="text" name="telephone" required><br><br>

    <button type="submit">Đăng ký</button>
</form>
