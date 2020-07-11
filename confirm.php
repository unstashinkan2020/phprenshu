

<!DOCTYPE html>
<html>
<head>
<?php require_once('data.php') ?>
  <meta charset="utf-8">
  <title>Progate</title>
  <style id="applicationStylesheet" type="text/css">
/* 共通のCSS */
* {
    box-sizing: border-box;
  }
  
  html, body,
  ul, ol, li,
  h1, h2, h3, h4, h5, h6, p,
  form, input, div {
    margin: 0;
    padding: 0;
  }
  
  body {
    font-family: Lato, 'Hiragino Kaku Gothic Pro', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    font-size: 14px;
    letter-spacing: 0.05em;
    color: #89949e;
  }
  
  h2, h3, h4, h5, h6 {
    font-weight: 400;
  }
  
  a {
    text-decoration: none;
    color: #4ac0b9;
  }
  
  a:hover {
    text-decoration: underline;
  }
  
  a:visited {
    color: #4ac0b9;
  }
  
  img {
    width: 100%;
  }
  
  .container {
    width: 1170px;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
  
  /* メニュー一覧 */
  .logo {
    font-family: Pacifico, sans-serif;
    font-size: 40px;
    color: #4ac0b9;
    display: inline-block;
    padding: 20px 0;
    margin: 80px 0 30px;
    border-top: 5px solid #42c7c1;
    border-bottom: 5px solid #42c7c1;
  }
  
  .menu-wrapper {
    margin-bottom: 60px;
    text-align: center;
  }
  
  .menu-item-name {
    line-height: 1.7;
    font-size: 25px;
    margin-top: 15px;
    color: #4ac0b9;
  }
  
  .menu-item-type {
    font-size: 14px;
  }
  
  .price {
    margin: 15px 0;
    font-size: 18px;
    color: #322f33;
  }
  
  .menu-items {
    margin-bottom: 60px;
  }
  
  .menu-item {
    display: inline-block;
    width: 40%;
    padding: 20px;
    margin-top: 40px;
  }
  
  .menu-item-image {
    border-radius: 5px;
  }
  
  .icon-spiciness {
    width: 20px;
  }
  
  .menu-item span {
    font-size: 16px;
  }
  
  input {
    margin-left: 20px;
    margin-right: 10px;
    padding: 5px;
    text-align: center;
    width: 60px;
    font-size: 14px;
    margin-top: 10px;
  }
  
  input[type="submit"] {
    display: inline-block;
    width: 160px;
    height: 48px;
    line-height: 48px;
    padding: 0 20px;
    border-radius: 30px;
    border-style: none;
    color: white;
    background-color: #42c7c1;
    font-size: 15px;
    letter-spacing: 0.1em;
  }
  
  /* 注文確認 */
  .order-wrapper {
    text-align: center;
    background-color: #F8F8F8;
    line-height: 2;
    letter-spacing: 0.1em;
    width: 500px;
    margin: 60px auto;
    padding: 20px 0px 30px;
    border-radius: 5px;
    box-shadow: 0px 1px 4px #CCD7D4;
  }
  
  .order-wrapper h2 {
    font-size: 32px;
    margin: 30px 0;
    color: #322f33;
  }
  
  .order-wrapper p {
    display: inline-block;
    font-size: 22px;
  }
  
  .order-wrapper h3 {
    border-top: 1px solid #DAE1E7;
    margin-top: 30px;
    padding-top: 30px;
    font-size: 28px;
    color: #42c7c1;
  }
  
  .order-wrapper h4 {
    margin-top: 40px;
    font-size: 25px;
    color: #322f33;
  }
  
  .order-amount {
    width: 40%;
    text-align: left;
  }
  
  .order-price {
    width: 35%;
    text-align: right;
  }
  
  /* レビュー一覧 */
  .review-wrapper {
    text-align: center;
    width: 400px;
    margin: 60px auto;
  }
  
  .review-menu-item {
    border-radius: 5px;
    margin: 0 auto;
    padding-bottom: 20px;
    border: 1px solid #dadada;
  }
  
  .review-menu-item img {
    border-radius: 5px 5px 0 0;
  }
  
  .review-menu-item .menu-item-type {
    color: #c2c8ce;
    font-size: 16px;
  }
  
  .review-menu-item .price {
    font-size: 20px;
  }
  
  .review-list-wrapper {
    margin: 50px 0;
    text-align: left;
  }
  
  .review-list-title {
    padding-bottom: 10px;
    margin-bottom: 30px;
    border-bottom: 1px solid rgba(104, 107, 106, 0.15);
  }
  
  .review-list-title h4 {
    font-size: 22px;
  }
  
  .review-list-item {
    margin-bottom: 30px;
    background: #e5eef6;
    padding: 10px;
    border-radius: 5px;
  }
  
  .review-list-title img, .review-list-title h4, .review-list-item img {
    display: inline-block;
    vertical-align: middle;
  }
  
  .icon-review {
    width: 40px;
    margin-right: 10px;
    margin-top: -12px;
  }
  
  .icon-user {
    width: 30px;
  }
  
  .review-user {
    width: 60px;
    display: inline-block;
    border-right: 1px solid #c1ced7;
    padding-right: 8px;
    text-align: center;
  }
  
  .review-text {
    display: inline-block;
    vertical-align: top;
    margin-top: 16px;
    margin-left: 10px;
    font-size: 15px;
  }
  

</style>
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <?php $totalPayment = 0 ?>
    
    <?php foreach ($menus as $menu): ?>
      <?php 
        $orderCount = $_POST[$menu->getName()];
        $menu->setOrderCount($orderCount);
        $totalPayment += $menu->getTotalPrice();
      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
        個
      </p>
      <p class="order-price"><?php echo $menu->getTotalPrice() ?>円</p>
    <?php endforeach ?>
    <h3>合計金額: <?php echo $totalPayment ?>円</h3>
  </div>
</body>
</html>