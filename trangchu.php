<?php include 'menu.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">-->
    <title>Trang Chủ</title>
    <style>
        /* CSS SECTION-STAGE*/
        .section-stage{
            margin-top: 10px;
            margin-bottom: 20px;
            justify-content: center;
        }
        .image1-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Chia thành 2 cột */
            display: flex;
            justify-content: center;
            gap: 5px;
            
            padding-left: 10px;
            padding-right: 10px;
            margin-right: auto;
            margin-left: auto;
            max-width: 10px;
            
        }
        .image1_item {
            flex: 0 0 auto; /* Không cho phép ảnh tự mở rộng */
            object-fit: cover; /* Đảm bảo ảnh không bị biến dạng */
            margin-left: 40%;
            margin-right: 40%;
        }
        .image1-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Chia thành 2 cột */
            grid-gap: 3px; /* Khoảng cách giữa các ảnh */
            max-width: 800px; /* Đặt chiều rộng tối đa cho khung */
            margin: 0 auto; /* Căn giữa */
        }
        .image1-item {
            position: relative; /* Để có thể điều chỉnh vị trí nếu cần */
        }
        .image1-item img {
            height: auto; /* Giữ tỷ lệ của ảnh */
        }

        /* CSS COLORF4 */
        .colorf4 {
            background-color: #f4f4f4;
            margin-bottom: 0px;
            border-radius: 30px;
            padding: 0px 0 10px;
        }
        .heading-line {
            margin: 0px 0; /* Khoảng cách phía trên và dưới */
            text-align: center; /* Căn giữa nội dung */
            position: relative; /* Để định vị đường kẻ */
        }
        .heading-line h2 {
            display: inline-block; /* Để tiêu đề nằm giữa */
            position: relative; /* Để định vị đường kẻ dưới tiêu đề */
            padding: 10px 20px; /* Khoảng cách xung quanh tiêu đề */
            background: #f4f4f4; /* Màu nền cho tiêu đề */
            z-index: 1; /* Đưa tiêu đề lên trên đường kẻ */
            color: #b39851; /* Màu chữ (thay đổi màu ở đây) */
        }
        .heading-line::after {
            content: ""; /* Nội dung rỗng cho pseudo-element */
            position: absolute; /* Định vị tuyệt đối */
            left: 0; /* Bắt đầu từ bên trái */
            right: 0; /* Kết thúc bên phải */
            top: 50%; /* Đặt ở giữa chiều cao */
            height: 2px; /* Chiều cao của đường kẻ */
            background-color: #B0976D; /* Màu của đường kẻ */
            z-index: 0; /* Đưa đường kẻ xuống dưới tiêu đề */
        }
        .horizontal {
            text-align: center;
            color: #999;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: -10px;
            
        }
        .show-item {
            display: flex;
            justify-content: center; /* Căn giữa các mục theo chiều ngang */
            align-items: center;     /* Căn giữa các mục theo chiều dọc */
            flex-wrap: wrap;         /* Cho phép các mục tự xuống dòng khi màn hình nhỏ hơn */
            padding: 20px;
        }
        .item {
            border: 1px solid black;
            border-radius: 10px;
            padding: 20px;
            margin: 15px;          /* Điều chỉnh margin đồng đều cho các cạnh */
            text-align: center;
            width: 120px;          /* Đặt kích thước cố định cho các mục */
            height: 150px;         /* Chiều cao cố định cho các mục */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Thêm hiệu ứng đổ bóng */
            transition: transform 0.3s, box-shadow 0.3s; /* Hiệu ứng khi hover */
        }
        .item:hover {
            transform: scale(1.05); /* Hiệu ứng phóng to khi hover */
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Đổ bóng mạnh hơn khi hover */
        }
        .text {
            text-align: center;
        }

        /* CSS HEADING-NEW-TITLE */
        .heading-line2 {
            margin: 0px 0; /* Khoảng cách phía trên và dưới */
            text-align: center; /* Căn giữa nội dung */
            position: relative; /* Để định vị đường kẻ */
        }
        .heading-line2 h2 {
            display: inline-block; /* Để tiêu đề nằm giữa */
            position: relative; /* Để định vị đường kẻ dưới tiêu đề */
            padding: 10px 20px; /* Khoảng cách xung quanh tiêu đề */
            z-index: 1; /* Đưa tiêu đề lên trên đường kẻ */
            color: #b39851; /* Màu chữ (thay đổi màu ở đây) */
            background-color: white;
        }
        .heading-line2::after {
            content: ""; /* Nội dung rỗng cho pseudo-element */
            position: absolute; /* Định vị tuyệt đối */
            left: 0; /* Bắt đầu từ bên trái */
            right: 0; /* Kết thúc bên phải */
            top: 50%; /* Đặt ở giữa chiều cao */
            height: 2px; /* Chiều cao của đường kẻ */
            background-color: #B0976D; /* Màu của đường kẻ */
            z-index: 0; /* Đưa đường kẻ xuống dưới tiêu đề */
        }
        .list-column {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Chia thành 3 cột */
            display: flex;
            justify-content: center;
            gap: 5px;
        }
        .column {
            display: flex;
            justify-content: center;
            align-items: center; 
        }


        /* CSS TITLE-SANPHAM */
        .heading-line3 {
            margin: 0px 0; /* Khoảng cách phía trên và dưới */
            text-align: center; /* Căn giữa nội dung */
            position: relative; /* Để định vị đường kẻ */
        }
        .heading-line3 h2 {
            display: inline-block; /* Để tiêu đề nằm giữa */
            position: relative; /* Để định vị đường kẻ dưới tiêu đề */
            padding: 10px 20px; /* Khoảng cách xung quanh tiêu đề */
            z-index: 1; /* Đưa tiêu đề lên trên đường kẻ */
            color: #b39851; /* Màu chữ (thay đổi màu ở đây) */
            background-color: white;
        }
        .heading-line3::after {
            content: ""; /* Nội dung rỗng cho pseudo-element */
            position: absolute; /* Định vị tuyệt đối */
            left: 0; /* Bắt đầu từ bên trái */
            right: 0; /* Kết thúc bên phải */
            top: 50%; /* Đặt ở giữa chiều cao */
            height: 2px; /* Chiều cao của đường kẻ */
            background-color: #B0976D; /* Màu của đường kẻ */
            z-index: 0; /* Đưa đường kẻ xuống dưới tiêu đề */
        }
        .list-product {
            display: flex;
            justify-content: center; /* Căn giữa các mục theo chiều ngang */
            align-items: center;     /* Căn giữa các mục theo chiều dọc */
            flex-wrap: wrap;         /* Cho phép các mục tự xuống dòng khi màn hình nhỏ hơn */
            padding: 20px;
        }
        .product-item {
            border-radius: 1px;
            padding: 20px;
            margin: 15px;          /* Điều chỉnh margin đồng đều cho các cạnh */
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Thêm hiệu ứng đổ bóng */
            transition: transform 0.3s, box-shadow 0.3s; /* Hiệu ứng khi hover */
            
        }
        .product-item:hover {
            transform: scale(1.05); /* Hiệu ứng phóng to khi hover */
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Đổ bóng mạnh hơn khi hover */
        }
        .product-attribute {
            margin-top: 25px;
        }
        .product-title {
            color: black;
            font-family: 'Verdana', sans-serif;
        }
        .text-attribute {
            color: #999;
        }
        p {
            font-style: italic; /* In nghiêng văn bản trong thẻ <p> */
            font-weight: bold;
            font-size: 20px;
            color: red;
        }
        span {
            font-family: 'Arial', sans-serif;
        }
        
        
    </style>
</head>
<body>
    <div class="section-stage">
        <div class="image1-container">
            <div class="image1_item">
                <a href="#"><img src="https://ruoutaychinhhang.com/userfiles/images/BANNER/BANNER%20NEW/BANNER%20NEW%201/aowhisky.jpg" alt="Rượu" width="551" height="551"></a>
            </div>
            <div class="image1-grid">
                <div class="image1-item">
                    <a href="#"><img src="https://ruoutaychinhhang.com/userfiles/images/BANNER/BANNER%20NEW/BANNER%20NEW%201/johnnie%203.png" alt="Johnnie Walker" width="272" height="272"></a>
                </div>
                <div class="image1-item">
                    <a href="#"><img src="https://ruoutaychinhhang.com/userfiles/images/BANNER/BANNER%20NEW/BANNER%20NEW%201/chivas%203.png" alt="Chivas" width="272" height="272"></a>
                </div>
                <div class="image1-item">
                    <a href="#"><img src="https://ruoutaychinhhang.com/userfiles/images/BANNER/BANNER%20NEW/BANNER%20NEW%201/hennessy%203.png" alt="Hennessy" width="272" height="272"></a>
                </div>
                <div class="image1-item">
                    <a href="#"><img src="https://ruoutaychinhhang.com/userfiles/images/BANNER/BANNER%20NEW/BANNER%20NEW%201/glenfiddich%203(1).png" alt="Glenfiddich" width="272" height="272"></a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorf4">
        <div class="heading-line"><h2>PHÂN LOẠI CÁC LOẠI RƯỢU</h2></div>
        <div class="horizontal">Danh mục các loại rượu nổi tiếng trên thế giới</div>
        <div class="show-item">
            <div class="item">
                <a href="whisky.php"><img src="https://ruoutaychinhhang.com/userfiles/images/Loai%20SP/vang2.jpg" alt="Whisky" width="80" height="80"></a>
                <div class="text">Whisky</div>
            </div>
            <div class="item">
                <a href="cognac.php"><img src="https://ruoutaychinhhang.com/userfiles/images/Loai%20SP/Cognac2.jpg" alt="Cognac" width="80" height="80"></a>
                <div class="text">Cognac</div>
            </div>
            <div class="item">
                <a href="vooka.php"><img src="https://ruoutaychinhhang.com/userfiles/images/Loai%20SP/vodka2.jpg" alt="Vodka" width="80" height="80"></a>
                <div class="text">Vodka</div>
            </div>
            <div class="item">
                <a href="vang_champagne.php"><img src="https://ruoutaychinhhang.com/userfiles/images/Loai%20SP/Champagne2.jpg" alt="Champagne" width="80" height="80"></a>
                <div class="text">Champagne</div>
            </div>
            <div class="item">
                <a href="vang_champagne.php"><img src="https://ruoutaychinhhang.com/userfiles/images/Loai%20SP/vang2.jpg" alt="Vang" width="80" height="80"></a>
                <div class="text">Vang</div>
            </div>
        </div>
    </div>

    <div class="heading-new-title">
        <div class="heading-line2"><h2>XU HƯỚNG NỔI BẬT</h2></div>
        <div class="list-column">
            <div class="column-first">
                <a href="khuyenmai.php"><img src="https://ruoutaychinhhang.com/userfiles/images/BANNER/BANNER%20NEW/BANNER%20NEW%201/khuyenmai-bannerdung%20(3)%20(1).jpg" alt="First Image" width="272" height="544"></a>
            </div>
            <div class="column-second">
                <div class="second-im">
                    <a href="#"><img src="https://ruoutaychinhhang.com/userfiles/images/BANNER/BANNER%20NEW/BANNER%20NEW%201/summer-3.png" alt="Second Image" width="551" height="270"></a>
                </div>
                <div class="second-im">
                    <a href="#"><img src="https://ruoutaychinhhang.com/userfiles/images/BANNER/BANNER%20NEW/BANNER%20NEW%201/banner-ngang-2-khung-2.png" alt="Third Image" width="551" height="270"></a>
                </div>
            </div>
            <div class="column-third">
                <a href="#"><img src="https://ruoutaychinhhang.com/userfiles/images/BANNER/BANNER%20NEW/BANNER%20NEW%201/sanphambanchay-bannerdung%20(1).jpg" alt="Fourth Image" width="272" height="544">
            </div>
        </div>
    </div>

    <div class="title-sanpham">
        <div class="heading-line3"><h2>SẢN PHẨM THAM KHẢO</h2></div>
        <div class="list-product">
            <div class="product-item">
                <a href="sake.php"><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/auchentoshan12-2022-1.png" alt="" width="216" height="216"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Auchentoshan 12 Năm</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.250.000đ</p>
                </div>
            </div>
            <div class="product-item">
                <a href="#"><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/hennessy-vsop-2022-1.png" alt="" width="216" height="216"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Hennessy VSOP limited</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.250.000đ</p>
                </div>
            </div>
            <div class="product-item">
                <a href="#"><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/Hennessy-VSOP-Holidays-1.png" alt="" width="216" height="216"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Hennessy VSOP Holidays</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.250.000đ</p>
                </div>
            </div>
            <div class="product-item">
                <a href="#"><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/jagermeister-363.jpg" alt="" width="216" height="216"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Jagermeister</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.250.000đ</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php include 'lienhe.php'; ?>