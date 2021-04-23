if (document.readyState== 'loading'){
    document.addEventListener('DOMContentLoaded', ready)

} else {

    ready()
}

function ready() {

    var removeItemButtons = document.getElementsByClassName('btn-danger')

      for (var i = 0; i < removeItemButtons.length; i++) {
          var button = removeItemButtons[i];
          button.addEventListener('click', removeCartItem)
        }

        var quantityInputs = document.getElementsByClassName('cart-quantity-input')
        for (var i = 0; i < quantityInputs.length; i++) {
            var input = quantityInputs[i]
            input.addEventListener('change', quantityChanged)
        }

        var addToCartButtons = document.getElementsByClassName('cart-btn')
        for (var i = 0; i < addToCartButtons.length; i++) {
            var button = addToCartButtons[i]
            button.addEventListener('click', addToCartClicked)
        }

        var placeOrderButtons = document.getElementsByClassName('place-order')
        for (var i = 0; i < placeOrderButtons.length; i++) {
            var button = placeOrderButtons[i]
            button.addEventListener('click', placeOrderClicked)
        }


         


}

            var cartArray  = [];
            console.log(cartArray);

            function Item(name, price, count, img) {
            this.name = name;
            this.price = price;
            this.count = count;
            this.imgFile = img
            }

            cartArray = obj;
            console.log(cartArray);
            saveCart()
            console.log(sessionStorage);
            loadCart();

            console.log(cartArray);
            if (sessionStorage.getItem("sessionArray") != null) {
            loadCart();
            }

            function saveCart() {
            sessionStorage.setItem('cartArray', JSON.stringify(cartArray));
            console.log(JSON.stringify(cartArray));

            /* var cart  = []
            for(var i in cartArray) {
            $id = cartArray[i].id;
            $id =[id = cartArray[i].id, name = cartArray[i].name, price = cartArray[i].price, quantity = cartArray[i].quantity, image = cartArray[i].image];
            cart.push($id);
            console.log($id);

            }
            console.log(cart);*/
            $.ajax({ 
            type: "POST", 
            url: "../My Cart.php",
            data: { 'cart' : JSON.stringify(cartArray)},
            });
            }

            function loadCart() {
                cartArray = JSON.parse(sessionStorage.getItem('cartArray'));
            }

            displayCart()
            function displayCart() {

            var cart = JSON.parse(sessionStorage.getItem('cartArray'));
            console.log(cart);
            
                
        /*var cartItems = document.getElementsByClassName('cart-items')[0];
        console.log(cartItems);
        var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
        for (var i = 0; i < cartItemNames.length; i++) {
            if (cartItemNames[i].innerText == title) {
                alert('This item is already added to the cart')
                return
            }
        }*/
                var result = "";
                console.log(cart);
               

                var cartRow = document.createElement('tr')
                cartRow.classList.add('cart-row')
                
                var cartItems = document.getElementsByClassName('cart-items')[0];
                console.log(cartItems);
                var cartItemNames = cartItems.getElementsByClassName('cart-item-title')


                for(var i in cart) {
                
                
                    result += `
                    
                        <td>
                            <div class="cart-info">
                                <img src="${cart[i].imgFile}" >
                                <div>
                                    <p class="cart-item-title">${cart[i].name}</p>
                                    <small><b>Price:</b> $${cart[i].price}</small></br>

                                    <button class="btn btn-danger"> REMOVE </button>
                                </div>
                            </div>
                        </td>
                        <td> <input class="cart-quantity-input" type="number" value="${cart[i].count}"></td>
                        <td class="cart-price">$${cart[i].price}</td>
                    
                    </td> `;

                    console.log(result);

                

                };

                cartRow.innerHTML = result;
                cartItems.append(cartRow)
                cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
                cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)


  updateCartTotal()
}

function removeCartItem() {
    var buttonClicked = event.target
        var removeID = buttonClicked.parentElement.parentElement.parentElement.parentElement.id;
        console.log(removeID);

        for (var i = 0; i < cartArray.length; i++) {
            console.log(i);
            if (cartArray[i].name == removeID){
                 cartArray.splice(i, 1);
                 break;
             }
         }
        buttonClicked.parentElement.parentElement.parentElement.parentElement.remove();
        console.log(cartArray);
        saveCart();
        updateCartTotal();
    }

    /*$('.minus-btn').on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
      
         // Don't allow decrementing below 1
          if (oldValue > 1) {
            var newVal = parseFloat(oldValue) - 1;
          } else {
            newVal = 1;
          }
        
        $button.parent().find('input').val(newVal);
        saveQuantity()
        saveCart()
        updateCartTotal()
      
      });
      
      $('.plus-btn').on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
      
            var newVal = parseFloat(oldValue) + 1;

            //Don't allow incrementing above 10
            if (oldValue < 10) {
                var newVal = parseFloat(oldValue) + 1;
              } else {
                newVal = 10;
              }
        
        $button.parent().find('input').val(newVal);
        saveQuantity()
        saveCart()
        updateCartTotal()
      
      });*/

    function saveQuantity() {
        var cartItemContainer = document.getElementsByClassName('cart-items')[0]
        var cartRows = cartItemContainer.getElementsByClassName('cart-row')
        for (var i = 0; i < cartRows.length; i++) {
          var cartRow = cartRows[i]
          var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
          console.log( quantityElement.value);
            cartArray[i].quantity = quantityElement.value}
            console.log(cartArray);
        saveCart();
    }
   

    function quantityChanged(event) {
        var input = event.target
        if (isNaN(input.value) || input.value <= 0) {
            input.value = 1
        }
        if (input.value >= 10) {
            input.value = 10
        }
        
        updateCartTotal();
        saveQuantity();
    }

    function addToCartClicked(event) {
        var button = event.target
        var shopItem = button.parentElement.parentElement.parentElement;
        console.log(shopItem);
        var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
        console.log(title);
        var price = parseFloat(shopItem.getElementsByClassName('shop-item-price')[0].innerText.replace('$', '').replace('/lb', '').replace('/pack', ''));
        console.log(price);
        var imageSrc = shopItem.parentElement.getElementsByClassName('shop-item-image')[0].src;
        console.log(imageSrc);
        var quantity = shopItem.getElementsByClassName('qty')[0].value;
        console.log(quantity);
        var obj = new Item(title, price, quantity, imageSrc);
        console.log(obj);
        cartArray.push(obj);
        console.log(cartArray[0]); 
        sessionStorage.setItem('cartArray', JSON.stringify(cartArray));
        console.log(sessionStorage);
        addItemToCart(title, price, imageSrc, quantity);
        updateCartTotal();
    }

    function addItemToCart(title, price, imageSrc, quantity) {
        var cartRow = document.createElement('tr')
        cartRow.classList.add('cart-row')
        
        var cartItems = document.getElementsByClassName('cart-items')[0];
        console.log(cartItems);
        var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
        for (var i = 0; i < cartItemNames.length; i++) {
            if (cartItemNames[i].innerText == title) {
                alert('This item is already added to the cart')
                return
            }
        }

        var cartRowContents = `
                    
                        <td>
                            <div class="cart-info">
                                <img src="${imageSrc}" >
                                <div>
                                    <p class="cart-item-title">${title}</p>
                                    <small><b>Price:</b> $${price}</small></br>

                                    <button class="btn btn-danger"> REMOVE </button>
                                </div>
                            </div>
                        </td>
                        <td> <input class="cart-quantity-input" type="number" value="${quantity}"></td>
                        <td class="cart-price">$${price}</td>
                    
                    </td> `

        cartRow.innerHTML = cartRowContents;
        cartItems.append(cartRow)
        cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
        cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
    
    
    }

    function placeOrderClicked(){
        alert('Order placed!');
        return

    }


    function updateCartTotal()  {
        var cartItemContainer = document.getElementsByClassName('cart-items')[0]
        var cartRows = cartItemContainer.getElementsByClassName('cart-row')
          
        var subTotal = 0;
        var totalQuantity = 0
        for (var i = 0; i < cartRows.length; i++) {
            var cartRow = cartRows[i]
            var priceElement = cartRow.getElementsByClassName('cart-price')[0]
            var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
            console.log(priceElement, quantityElement);
            var price = parseFloat(priceElement.innerHTML.replace('$', ''));
            var quantity = parseFloat(quantityElement.value);
            console.log(quantity);
            subTotal = subTotal + (price * quantity);
            totalQuantity +=  quantity;
            console.log(subTotal);
        }

        subTotal = Math.round(subTotal * 100) / 100
        document.getElementsByClassName('cart-subtotal-price')[0].innerHTML = '$' + subTotal;
        document.getElementsByClassName("cart-item-num")[0].innerHTML = totalQuantity;
        //document.getElementsByClassName('qty').value = totalQuantity;
        //console.log(document.getElementsByClassName('qty').value);
        //document.getElementById('qtyCoke').value = totalQuantity;
        //console.log(document.getElementById('qtyCoke').value);

        var taxesQST = Math.round(subTotal*0.09975 * 100) / 100;
        var taxesGST = Math.round(subTotal*0.05 * 100) / 100;
        var shipping;
        if (subTotal==0)
            shipping = 0;
        else
            shipping = 4.50;
        var total = Math.round((subTotal + taxesQST + taxesGST + shipping) * 100) / 100;
        document.getElementsByClassName('cart-taxesQST-price')[0].innerHTML = '$' + taxesQST;
        document.getElementsByClassName('cart-taxesGST-price')[0].innerHTML = '$' +taxesGST;
        document.getElementsByClassName('cart-shipping-price')[0].innerHTML = '$' + shipping;
        document.getElementsByClassName('cart-total-price')[0].innerHTML = '$' + total;
      
    }