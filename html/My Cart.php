<?php
session_start();
if (empty($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['id']);
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../javascript/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="../javascript/mycart.js" defer></script>
</head>
<body>
    <div id="nav-placeholder"></div>
        <script>
        $(function(){
        $("#nav-placeholder").load("navbar.html");
        });
        </script>

  
    <script>
        console.log(sessionStorage);
        </script>
    <main>
<!--Products in cart details-->
<button class='show_cart' onclick="displayCart()"><span>display cart</span></button>
    <div class="container cart-page">
        <table class="cart-items">

            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price per unit</th>
                
            </tr>

            

        </table>
    </div>
    <button class='place-order' class="shop-item-button" onclick="placeOrderClicked()"><span  class="cart-btn">Place order</span></button>
        <div class = "container cart-page" div class="total-price">
            <table>
                <tr>
                    <td><b>Subtotal</b></td>
                    <td class='cart-subtotal-price'> $67.54 </td>
                </tr>
                <tr>
                    <td>Number of items</td>
                    <td class="cart-item-num">5</td>
                </tr>
                <tr>
                    <td>QST (9.975%)</td>
                    <td class="cart-taxesQST-price">$6.74</td>
                </tr>
                <tr>
                    <td>GST (5%)</td>
                    <td class="cart-taxesGST-price">$3.38</td>
                </tr>
                <tr>
                    <td>Shipping price</td>
                    <td class="cart-shipping-price">$4.50</td>
                </tr>
                <tr>
                    <td><b>Total</b></td>
                    <td class="cart-total-price">$82.16</td>
                </tr>
                <tr>
                    <td><a href="Products.html">Continue shopping</a></td>
                </tr>
            </table>
        </div>
    </div>
       
    </div>

    </main>

    <!--Footer-->
    <div id="footer" class="footer"></div>
    <script>
        $(function(){
          $("#footer").load("footer.html");
        });
        </script>
    
</body>
</html>