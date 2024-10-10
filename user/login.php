<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .login-form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            
        }
        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-form label {
            display: block;
            margin-bottom: 5px;
        }
        .login-form input[type="tel"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
            font-size: 16px;
        }
        .login-form input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .login-form .signup-button {
            background-color: #28a745;
        }
        .login-form .signup-button:hover {
            background-color: #218838;
        }
        .signup-button {
            background-color: #28a745;
            color: white;
            padding: 10px 120px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .signup-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <form class="login-form" action="../trangchu.php" method="POST">
        <h2>Đăng nhập</h2>

        <label for="phone">Số điện thoại:</label>
        <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" title="Số điện thoại phải gồm 10 chữ số">

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Đăng nhập">
        <input type="button" value="Đăng ký" class="signup-button" onclick="window.location.href='register.php'">
    </form>

</body>
</html>
