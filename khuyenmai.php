<?php include 'menu.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <style>
            /*css vang*/
            .row-product-section {
                display: grid;
                grid-template-columns: repeat(4, 1fr); /* Chia làm 4 cột */
                text-align: center; /* Căn giữa nội dung */
                position: relative; /* Để định vị đường kẻ */
                display: flex;
                justify-content: center; /* Căn giữa các mục theo chiều ngang */
                align-items: center;     /* Căn giữa các mục theo chiều dọc */
                flex-wrap: wrap;         /* Cho phép các mục tự xuống dòng khi màn hình nhỏ hơn */
                padding: 40px;
            }
            .col-item {
                border-radius: 1px;
                padding: 20px;
                margin: 15px;          /* Điều chỉnh margin đồng đều cho các cạnh */
                text-align: center;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Thêm hiệu ứng đổ bóng */
                transition: transform 0.3s, box-shadow 0.3s; /* Hiệu ứng khi hover */
            }
            .col-item:hover {
                transform: scale(1.05); /* Hiệu ứng phóng to khi hover */
                box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Đổ bóng mạnh hơn khi hover */
            }
            .product-attribute {
                margin-top: 25px;
                font-size: 13px;
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

            .old-price {
                text-decoration: line-through; /* Gạch ngang giá cũ */
                color: #999; /* Màu xám cho giá cũ */
                font-size: 14px; /* Cỡ chữ của giá cũ */
                margin-right: 10px; /* Khoảng cách giữa giá cũ và giá mới */
            }

            .discounted-price {
                color: #e60000; /* Màu đỏ nổi bật cho giá giảm */
                font-size: 18px; /* Cỡ chữ lớn hơn cho giá mới */
                font-weight: bold; /* In đậm giá giảm */
            }

        </style>
    </head>
    <body>
        <div class="row-product-section">
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/absolut100.png" width="216px" height="216p"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Absolut 100</a>
                    </div>
                    <div class="text-attribute">
                        <span>1000</span>
                        <span>ml</span>
                        <span>50%</span>
                    </div>
                    <p class="old-price">1.500,000 VND</p>
                    <p class="discounted-price">1.300,000 VND</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/MA%CC%82%CC%83U%20HMX-015.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Hamper HMX 015</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p class="old-price">990,000 VND</p>
                    <p class="discounted-price">590,000 VND</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/ballon-dor-xo-2400.jpg" alt="hilelelel" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Ballon d'or X.O</a>
                    </div>
                    <div class="text-attribute">
                        <span>1000</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p class="old-price">900,000 VND</p>
                    <p class="discounted-price">700,000 VND</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/berville-xo-88.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Berville</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p class="old-price">1.350,000 VND</p>
                    <p class="discounted-price">1.000,000 VND</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/brandy-xo-bap-cai-xanh-ke-112.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Brandy xo Bắp Cải Xanh + kệ</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>38%</span>
                    </div>
                    <p class="old-price">1.500,000 VND</p>
                    <p class="discounted-price">1.350,000 VND</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/brandy-xo-ty-huu-vang-ke-114.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Brandy xo Tỳ Hưu Vàng + kệ</a>
                    </div>
                    <div class="text-attribute">
                        <span>1000</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p class="old-price">590,000 VND</p>
                    <p class="discounted-price">370,000 VND</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/brandy-xo-ty-huu-xanh-ke-115.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Brandy xo Tỳ Hưu Xanh + kệ</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p class="old-price">1.110,000 VND</p>
                    <p class="discounted-price">910,000 VND</p>
                </div>
            </div>
        </div>
    </body>
</html>
<?php include 'lienhe.php'; ?>