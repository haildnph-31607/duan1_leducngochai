<style>
    html {
      font-family: sans-serif;
    }

    body {
      width: 100%;
      min-height: 100vh;
      background-color: #fff;
    }

    .container1 {
      width: 80%;
      margin: 0 auto;
      margin-bottom: 30px;
    }

    .heading {
      text-align: center;
      margin-top: 20px;
    }

    .order-details {
      margin-top: 20px;
    }

    .order-item {
      margin-bottom: 10px;
    }

    .order-item__name {
      font-weight: bold;
    }

    .order-item__quantity {
      font-size: 12px;
    }

    .order-item__price {
      font-size: 14px;
      color: #f00;
    }

    .cta {
      text-align: center;
      margin-top: 20px;
    }

    .cta__button {
      background-color: #f00;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
     
    }
  </style>
</head>
<body>
  <div class="container1">
    <div class="heading">
      <h1>Cảm ơn bạn đã mua hàng!</h1>
    </div>

    <div class="order-details">
      <h2>Chi tiết đơn hàng của bạn</h2>

      <ul>
        <li class="order-item">
          <div class="order-item__name">Ma Hoa Don VNPAY Của Bạn</div>
          <div class="order-item__price"><?php if(isset($_GET['vnp_BankTranNo'])){
            echo $_GET['vnp_BankTranNo'];
          } ?></div>
         

        </li>

        <li class="order-item">
          <div class="order-item__name">Tổng Tiền </div>
        
          <div class="order-item__price"><?php if(isset($_GET['vnp_Amount'])){
            $sotien = $_GET['vnp_Amount'] / 100;
            echo number_format($sotien,0,',','.');
          }
           ?> VNĐ</div>
        </li>

        <li class="order-item">
          <div class="order-item__name">Thời Gian Mua</div>
          
          <div class="order-item__price"><?php echo date('Y-m-d') ?></div>
          <div class="order-item__price"><?php echo date('H:i:s') ?></div>
        </li>
      </ul>
    </div>

    <div class="cta">
      <a href="index.php?act=home" class="cta__button">Tiếp tục mua sắm</a>
    </div>
  </div>
</body>