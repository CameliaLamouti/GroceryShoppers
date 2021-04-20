


if (document.readyState== 'loading'){
    document.addEventListener('DOMContentLoaded', ready)

} else {

    ready()
}

function ready(){

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

function removeCartItem() {
    var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.parentElement.parentElement.remove()
        updateCartTotal();
    }

   

    function quantityChanged(event) {
        var input = event.target
        if (isNaN(input.value) || input.value <= 0) {
            input.value = 1
        }
        updateCartTotal()
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
                        <td class="cart-price">$${price}
                    
                    </td> `

        cartRow.innerHTML = cartRowContents;
        cartItems.append(cartRow)
        cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
        cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
    
    
    }

    function placeOrderClicked(){
        alert('Order placed!');
        console.log('it is working');
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
    