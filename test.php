<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Chia làm 4 cột */
            gap: 20px; /* Khoảng cách giữa các cột */
            margin: 20px; /* Khoảng cách xung quanh grid */
        }

        .product-item {
            background-color: #f5f5f5;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

    </style>
    <body>
        <div class="product-grid">
            <div class="product-item">Sản phẩm 1</div>
            <div class="product-item">Sản phẩm 2</div>
            <div class="product-item">Sản phẩm 3</div>
            <div class="product-item">Sản phẩm 4</div>
            <div class="product-item">Sản phẩm 5</div>
            <div class="product-item">Sản phẩm 5</div>
            <div class="product-item">Sản phẩm 5</div>
            <div class="product-item">Sản phẩm 5</div>
            <div class="product-item">Sản phẩm 5</div>
            <div class="product-item">Sản phẩm 5</div>
            <!-- Các sản phẩm khác -->
        </div>
    </body>
</html>