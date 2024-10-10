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
                    <p>1.250.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://cdn-download.kiotviet.vn/kiotvietimages/ctydailoi/cd48ebaba6e84ab8850719bb5a85d462.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Absolut Volka Oak</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>400.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/standard-gold-643.jpg" alt="hilelelel" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Standard Gold</a>
                    </div>
                    <div class="text-attribute">
                        <span>1000</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>990.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/standard-imperial-646.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Standard Imperial</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.350.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/standard-vodka-648.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Standard Volka</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>38%</span>
                    </div>
                    <p>400.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://cdn-images.kiotviet.vn/ctydailoi/d2b1c9dd78d14b28b81f4664fb07b670.png" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Absolut Apple</a>
                    </div>
                    <div class="text-attribute">
                        <span>1000</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>590.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/absolut-electrik-mau-xanh-mau-bac-6.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Absolut Electrik (Xanh, Bạc)</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>650.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/absolut-elyx-11.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Absolut Elyx</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.500.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/absolut-elyx-nite-magnum-1925.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Absolut Elyx Nite Magnum</a>
                    </div>
                    <div class="text-attribute">
                        <span>1750</span>
                        <span>ml</span>
                        <span>42.5%</span>
                    </div>
                    <p>2.650.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://cdn-images.kiotviet.vn/ctydailoi/d68bc3f2d9ba45809265829202e46d88.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Absolut Grapefruit 1L</a>
                    </div>
                    <div class="text-attribute">
                        <span>1000</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>550.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/absolut-vodka-blue-facet-24.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Absolut Volka Blue Facet</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>Liên hệ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/absolut-vodka-extrakt-25.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Absolut Volka Extrakt</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>35%</span>
                    </div>
                    <p>450.000</p>
                </div>
            </div>
        </div>
    </body>
</html>
<?php include 'lienhe.php'; ?>