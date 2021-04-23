<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crush</title>
    <link rel="stylesheet" href="../../../css/style.css">
    <script src="../../../javascript/script.js" defer></script>
    <script src="../../../javascript/mycart.js" defer></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
    <div id="nav-placeholder"></div>
    <script>
    $(function(){
    $("#nav-placeholder").load("../../navbar.html");
    });
    </script>
    <main class="container">
 
        <!-- Left Column / Image -->
        <div class="left-column">
          <img class="shop-item-image" src="../../../Images/crush.jpeg" alt="">
        </div>

        <!-- Right Column -->
        <div class="right-column">
 
         <!-- Product Description -->
        <div class="product-description">
          <h1 class="shop-item-title">Crush</h1>
          <p>
              <h3></br>Description: Made in the United States.</h3>
              <h3></br>Nutritional Information</h3>
                <li>Calories: 160</li>
                <li>Total Fat: 0g</li>
                <li>Saturated fat: 0g</li>
                <li>Cholestorol: mg</li>
                <li>Sodium: 70mg</li>
                <li>Potassium: 0g</li>
                <li>Total Carbohydrate: 43g</li>
                <li>Sugar: 43g</li>
                <li>Protein: 0g</li>
            
          </p>
        </div>
 
 
    <!-- Product Pricing + Add to cart -->
    <div class="product-price">
      <span class="shop-item-price">$1.49/can</span>
      <div>

        <label for="amount">Quantity</label>
        <select id='qty' class="qty" name="amount">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
    </div>
    <button class="shop-item-button"><span class="cart-btn">Add to cart</span></button>
    </div>
  </div>
</main>

<div class="container cart-page">
  <table class="cart-items">

      <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price per can</th>
      </tr>
  </table>
</div>

<div class = "container cart-page" div class="total-price">
  <table>
      <tr>
          <td><b>Subtotal</b></td>
          <td class='cart-subtotal-price'> $0.00 </td>
      </tr>
      <tr>
          <td>Number of items</td>
          <td class="cart-item-num">0</td>
      </tr>
      <tr>
          <td>QST (9.975%)</td>
          <td class="cart-taxesQST-price">$0.00</td>
      </tr>
      <tr>
          <td>GST (5%)</td>
          <td class="cart-taxesGST-price">$0.00</td>
      </tr>
      <tr>
          <td>Shipping price</td>
          <td class="cart-shipping-price">$0.00</td>
      </tr>
      <tr>
          <td><b>Total</b></td>
          <td class="cart-total-price">$0.00</td>
      </tr>
      <tr>
          <td><a href="../../Products.php">Continue shopping</a></td>
      </tr>
  </table>
</div>



    <div id="footer" class="footer"></div>
    <script>
    $(function(){
      $("#footer").load("../../footer.html");
    });
    </script>
</body>
</html>
