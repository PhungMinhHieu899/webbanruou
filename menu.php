<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="trangchu.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Trang Chủ</title>
    <style>
        /* CSS cho phần header */
        .background {
            background-color: #242529;
            padding: 10px 0;
            justify-content: center;
            align-items: center;
        }

        .background_nen1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            flex-wrap: wrap;
        }

        .logo img {
            width: 235px;
            height: 60px;
        }

        .timkiem {
            display: flex;
            align-items: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .timkiem li {
            margin: 0 10px;
            list-style: none;
        }

        .timkiem input[type="text"] {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 200px;
        }

        .zoom1 a, .zoom2 a, .zoom3 a {
            font-size: 24px;
            color: white;
        }

        .login {
            display: flex;
            background-color: #B0976D;
            padding: 12px 10px;
            color: white;
            border-radius: 8px;
            transition: 0.6s;
            
        }
        .login a {
            text-decoration: none;
            color: white;
            
        }

        .login:hover {
            background-color: black;
            border: solid 1px #B0976D;
            border-radius: 8px;
        }
        .login a:hover {
            border-radius: 3px;
            color: red;
        }

        .phone {
            display: flex;
            align-items: center;
            color: white;
        }

        .phone li {
            list-style: none;
            margin-left: 10px;
        }

        .phone li .sdt {
            display: flex;
            align-items: center;
            color: white;
        }

        .phone li p {
            margin: 0;
            padding-left: 5px;
            font-size: 18px;
        }

        /* CSS cho phần menu */
        .background2 {
            background-color: #B0976D;
        }

        .menu {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px 0;
            list-style: none;
            max-width: 1200px;
            margin: 0 auto;
        }

        .menu li {
            list-style: none;
        }

        .menu a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 10px 15px;
            text-transform: uppercase;
        }

        .menu a:hover {
            background-color: #8b6c48;
            border-radius: 5px;
        }

        /* Responsive CSS - điều chỉnh trên màn hình nhỏ hơn */
        @media (max-width: 768px) {
            .background_nen1 {
                flex-direction: column;
                align-items: center;
            }

            .timkiem {
                margin-top: 10px;
            }

            .phone {
                margin-top: 10px;
            }

            .menu {
                flex-direction: column;
                padding: 20px 0;
            }

            .menu li {
                margin-bottom: 10px;
            }

            .timkiem input[type="text"] {
                width: 150px;
            }
        }

        @media (max-width: 480px) {
            .timkiem input[type="text"] {
                width: 120px;
            }

            .menu a {
                font-size: 14px;
                padding: 8px 10px;
            }
        }

    </style>
</head>
<body>
    <div class="background">
        <div class="background_nen1">
            <div class="logo">
                <a href="trangchu.php"><img src="https://ruoutaychinhhang.com/userfiles/images/logo.png" alt="Logo" width="235" height="60"></a>
            </div>
            <div class="timkiem">
                <li class="zoom1"><input type="text" placeholder="Tìm kiếm rượu"><a class="fas fa-magnifying-glass" href="#"></a></li>
                <li class="zoom2"><a class="fas fa-home" href="trangchu.php"></a></li>
                <li class="zoom3"><a class="fas fa-shopping-cart" href="#"></a></li>
            </div>
            <div class="login">
                <a href="user/register.php">Đăng ký |</a><a href="user/login.php">| Đăng nhập</a>
            </div>

            <div class="phone">
                <li class="sdt"><a href="#"><span class="fas fa-phone"></span><p class="sdt">098 76 54 321</p></a></li>
            </div>
        </div>
    </div>

    <div class="background2">
        <div class="menu">
            <li><a href="trangchu.php">TRANG CHỦ</a></li>
            <li><a href="vang_champagne.php">RƯỢU VANG/CHAMPAGNE</a></li>
            <li><a href="vooka.php">VOOKA</a></li>
            <li><a href="whisky.php">WHISKY</a></li>
            <li><a href="cognac.php">COGNAC</a></li>
            <li><a href="sake.php">SAKE</a></li>
            <li><a href="ruoumui.php">RƯỢU MÙI</a></li>
            <li><a href="khuyenmai.php">KHUYẾN MẠI</a></li>
            <li><a href="thongtin.php">THÔNG TIN</a></li>
        </div>
    </div>
</body>
</html>