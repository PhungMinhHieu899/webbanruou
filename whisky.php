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
        </style>
    </head>
    <body>
        <div class="row-product-section">
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/ballantinesfinest-2024-1.jpg" width="216px" height="216p"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Ballantine's Finest</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>550.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/ballantinesfinest18-1%20(1)%20(1).jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Ballantine's 18 năm</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>3.400.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/jw-goldlabel2024-1.jpg" alt="hilelelel" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Johnnie Walker Gold Label </a>
                    </div>
                    <div class="text-attribute">
                        <span>1000</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>2.990.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/jw-doubleblack2024-1.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Johnnie Walker Double Black</a>
                    </div>
                    <div class="text-attribute">
                        <span>100</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.150.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/glenfiddich12-2024-1.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Glenfiddich 12 năm</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.400.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/bowmore-18-1%20(1).jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Bowmore 18 năm</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>3.590.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/bowmore-no1-2%20(1)%20(1).jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Browmore No.1</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.650.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/royalsalute24-2024-1.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Chivas 24 năm</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>5.500.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/chivas12-2024-1%20(1).jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Chivas 12 năm</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>42.5%</span>
                    </div>
                    <p>2.650.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/chivas15-2024-1%20(1).jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Chivas 15 năm</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>3.550.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/singleton12-2024-1.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Singleton 12 năm</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.350.000</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/files/SP%20NEN%20TRANG%20TU%20CHUP/Bowmore-12-2023.png" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Browmore 12 năm</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>35%</span>
                    </div>
                    <p>2.450.000</p>
                </div>
            </div>
        </div>
    </body>
</html>

<?php include 'lienhe.php'; ?>