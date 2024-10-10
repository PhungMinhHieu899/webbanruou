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
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/jagermeister-363.jpg" width="216px" height="216p"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Jagermeister</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>35%</span>
                    </div>
                    <p>550.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://cdn-download.kiotviet.vn/kiotvietimages/ctydailoi/5fb5cec8382e406cbb2f46954db73e4a.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Patron Anejo</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.800.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://cdn-download.kiotviet.vn/kiotvietimages/ctydailoi/3ff07433d2fa4df99a055efe73187067.jpg" alt="hilelelel" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Patron Silver</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>40%</span>
                    </div>
                    <p>1.990.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://cdn-images.kiotviet.vn/ctydailoi/4b3e07e6b41e4abcbde067aede559996.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Patron XO cafe</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>35%</span>
                    </div>
                    <p>1.150.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href="thanhtoan/Absin_Cheers_Green_Fairy.php"><img src="https://cdn2-retail-images.kiotviet.vn/ctydailoi/78343635f9854f34a0fa37f839b30fc3.png" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Absin Cheers Green Fairy</a>
                    </div>
                    <div class="text-attribute">
                        <span>700</span>
                        <span>ml</span>
                        <span>53%</span>
                    </div>
                    <p>1.000.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://cdn-images.kiotviet.vn/ctydailoi/311d0fae91bf4e389fc4e9645a3a74e8.png" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Absinthe Jacques Senaus Black</a>
                    </div>
                    <div class="text-attribute">
                        <span>720</span>
                        <span>ml</span>
                        <span>80%</span>
                    </div>
                    <p>3.590.000đ</p>
                </div>
            </div>
        </div>
    </body>
</html>
<?php include 'lienhe.php'; ?>