


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
        var price = parseFloat(shopItem.getElementsByClassName('shop-item-price')[0].innerText.replace('$', '').replace('/lb', ''));
        console.log(price);
        var imageSrc = shopItem.parentElement.getElementsByClassName('shop-item-image')[0].src;
        console.log(imageSrc);
        addItemToCart(title, price, imageSrc);
        updateCartTotal()
    }

    function addItemToCart(title, price, imageSrc) {
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
        }}


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
        //window.sessionStorage.setItem("s",subTotal.toFixed(2));
        window.sessionStorage.setItem("taxesQST",taxesQST .toFixed(2));
        window.sessionStorage.setItem("taxesGST",taxesGST.toFixed(2));
        window.sessionStorage.setItem("shipping",shipping.toFixed(2));
        window.sessionStorage.setItem("total",total.toFixed(2));
      
       //document.getElementsByClassName('cart-subtotal-price')[0].innerHTML = '$' + window.sessionStorage.getItem("subtotal");
        document.getElementsByClassName('cart-taxesQST-price')[0].innerHTML = '$' + window.sessionStorage.getItem("taxesQST");
        document.getElementsByClassName('cart-taxesGST-price')[0].innerHTML = '$' + window.sessionStorage.getItem("taxesGST");
        document.getElementsByClassName('cart-shipping-price')[0].innerHTML = '$' + window.sessionStorage.getItem("shipping");
        
        document.getElementsByClassName('cart-total-price')[0].innerHTML = '$' + window.sessionStorage.getItem("total");
       
        console.log(sessionStorage);
      
    }
    