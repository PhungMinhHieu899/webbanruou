<?php include 'menu.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Trangchu</title>
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
                <a href=""><img src="https://cdn-images.kiotviet.vn/ctydailoi/ea02acbec66346358849d903c0ad4651.jpg" width="216px" height="216p"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Vang M Merlot Salento </a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>14.5%</span>
                    </div>
                    <p>4.250.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/baglietti-no10-2420.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Baglietti No. 10</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>10%</span>
                    </div>
                    <p>750.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/bottega-gold-1829.jpg" alt="hilelelel" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Bottega Gold</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>11%</span>
                    </div>
                    <p>990.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/jacobs-creek-double-barrel-shiraz-2214.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Botte Moscato (Hoa Hồng)</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>6.5%</span>
                    </div>
                    <p>890.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/bottega-rose-gold-1612.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Bottega Rose Gold</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>11%</span>
                    </div>
                    <p>1.200.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/bottega-rose-gold-mini-1990.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Bottega Rose Gold mini</a>
                    </div>
                    <div class="text-attribute">
                        <span>200</span>
                        <span>ml</span>
                        <span>11.5%</span>
                    </div>
                    <p>350.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/bottega-stardust-2486.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Bottega Stardust</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>11%</span>
                    </div>
                    <p>3.650.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://cdn-images.kiotviet.vn/ctydailoi/cd6799e0daba4fdfb5e2381f4b3c3c55.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Bottega Stella Rose</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>11.5%</span>
                    </div>
                    <p>1.400.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/brancott-estate-pinot-noir-do-109.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Brancott Estate Pinot (Đỏ)</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>12.5%</span>
                    </div>
                    <p>650.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://cdn-images.kiotviet.vn/ctydailoi/5bf8c5d2f79f4b44aa6eeb99095a56b8.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Bottega Stella Blue (Phát Sáng)</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>11%</span>
                    </div>
                    <p>3.250.000đ</p>
                </div>
            </div>
            <div class="col-item">
                <a href=""><img src="https://ruoutaychinhhang.com/userfiles/images/SAN%20PHAM/bottega-white-gold-2487.jpg" width="216px" height="216px"></a>
                <div class="product-attribute">
                    <div class="text-product">
                        <a href="" class="product-title" style="text-decoration: none;">Bottega White Gold</a>
                    </div>
                    <div class="text-attribute">
                        <span>750</span>
                        <span>ml</span>
                        <span>12.5%</span>
                    </div>
                    <p>950.000đ</p>
                </div>
            </div>
        </div>
    </body>
</html>
<?php include 'lienhe.php'; ?>