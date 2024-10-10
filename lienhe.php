
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="trangchu.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Trang Chủ</title>
    <style>
        .end-support {
            display: flex;
            justify-content: space-between;
            background-color: #222;
            padding: 50px 30px;
        }

        .container-support {
            width: 23%;
            background-color: #242529;
            padding: 15px;
            font-family: 'Arial', sans-serif;
    
        }

        .container-support h4 {
            font-size: 18px;
            color: #ccc;
            margin-bottom: 35px;
        }

        .container-support ul {
            list-style: none;
            padding: 0;
        }

        .container-support ul li {
            margin-bottom: 8px;
            font-size: 14px;
            color: #ccc;
            
        }

        .container-support ul li:hover {
            color: #1e90ff;
            cursor: pointer;
        }

        form input[type="text"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #555;
            color: #fff;
            Font-family: "Oswald", sans-serif;
        }

        form .button-style {
            background-color: #B0976D;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 1px;
            cursor: pointer;
            font-size: 14px;
            
        }

        form .button-style:hover {
            background-color: transparent;
        }

        @media (max-width: 768px) {
            .end-support {
                flex-direction: column;
            }

            .container-support {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="end-support">
        <div class="container-support">
            <h4>LIÊN HỆ</h4>
            <ul>
                <li>Rượu Tây - Rượu Tây Chính Hãng</li>
                <li>  </li>
                <li>Tư vấn: 098.765.43.21</li>
                <li>Email: adminruoutay@gmail.com</li>
            </ul>
        </div>
        <div class="container-support">
            <h4>HỖ TRỢ</h4>
            <ul>
                <li>Giới thiệu</li>
                <li>Liên hệ</li>
                <li>Khuyến mãi</li>
                <li>Phương thức thanh toán</li>
            </ul>
        </div>
        <div class="container-support">
            <h4>MUA HÀNG</h4>
            <ul>
                <li>Giỏ hàng</li>
                <li>Đổi trả sản phẩm</li>
                <li>Giao hàng tại Hà Nội</li>
                <li>Giao hàng toàn quốc</li>
            </ul>
        </div>
        <div class="container-support">
            <h4>LỜI NHẮN TỚI CHÚNG TÔI</h4>
            <form action="#" method="post">
                <input type="text" name="phone" placeholder="Lời nhắn và số điện thoại">
                <button type="submit" style="curspr:pointer" class="button-style">GỬI</button>
            </form>
        </div>
    </div>
    <div style="background-color:#191A1D;color:white;text-align:center;padding:10px;font-family: 'Arial';font-size:75%;">
        " 18+ THƯỞNG THỨC CÓ TRÁCH NHIỆM."
        <br>
        " KHÔNG DÀNH CHO NGƯỜI DƯỚI 18 VÀ PHỤ NỮ MANG THAI, KHÔNG LÁI XE KHI ĐÃ UỐNG RƯỢU BIA "
    </div>
</body>
</html>