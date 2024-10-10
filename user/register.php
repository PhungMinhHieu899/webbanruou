<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Ký</title>
    <style>
        .register-form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .register-form h2 {
            text-align: center;
        }
        .register-form label {
            display: block;
            margin-bottom: 5px;
        }
        .register-form input[type="text"], 
        .register-form input[type="password"],
        .register-form input[type="tel"],
        .register-form input[type="number"],
        .register-form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .register-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .register-form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="register-form">
        <h2>Đăng Ký</h2>
        <form action="login.php" method="post">
            <label for="fullname">Họ tên:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="phone">Số điện thoại:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="birthyear">Năm sinh:</label>
            <input type="number" id="birthyear" name="birthyear" min="1900" max="2023" required>

            <label for="gender">Giới tính:</label>
            <select id="gender" name="gender" required>
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
                <option value="other">Khác</option>
            </select>

            <label for="address">Địa chỉ:</label>
            <input type="text" id="address" name="address" required>

            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Nhập lại mật khẩu:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <a href="../trangchu.php"><input type="submit" value="Đăng Ký"></a>
        </form>
    </div>

</body>
</html>
