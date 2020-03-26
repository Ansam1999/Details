
if(document.readyState=='loading'){
    document.addEventListener('DOMContentLoaded',ready)
}else{
    ready();
}
function ready() {
    var  removeCartItemButtons=document.getElementsByClassName("btn");
    for(var i=0; i<removeCartItemButtons.length;i++)
    {
        var button= removeCartItemButtons[i] ;

        button.addEventListener('click',removeCartItem);
    }
    var quantityinputs=document.getElementsByClassName('quan');
    for(var i=0;i<quantityinputs.length;i++) {
var input=quantityinputs[i];
input.addEventListener('change',quantityChanged)
    }
    var addToCartButtons=document.getElementsByClassName('add-card');
    for(var i=0;i<addToCartButtons.length;i++){
        var button=addToCartButtons[i];
        button.addEventListener('click',addToCartClicked)
    }
}
function removeCartItem(event) {
  var buttonClicked=event.target;
  buttonClicked.parentElement.parentElement.remove();
  updateCartTotal();
}
function quantityChanged(event) {
    var input=event.target;
    updateCartTotal();
}
function addToCartClicked(event) {
    var button = event.target;
var shopItem=button.parentElement.parentElement.parentElement.parentElement
var title=shopItem.getElementsByClassName('pi-text')[0].getElementsByClassName('shop-item-title')[0].innerText
var price=shopItem.getElementsByClassName('pi-text')[0].getElementsByClassName('shop-item-price')[0].innerText
var imageSrc=shopItem.getElementsByClassName('shop-item-image')[0].innerText.src;
addItemToCart(title,price,imageSrc);
updateCartTotal();
}

function addItemToCart(title,price,imageSrc) {
    var cartRow=document.createElement('tr');
cartRow.classList.add('cart-item')
    var cartItems=document.getElementsByClassName('cart-items')[0];

    var cartRowContent=
        '   <tr class="cart-item">\n' +
        '                                    <td class="product-col">\n' +
        '                                        <img src="$(imageSrc)" style="width: 100px;height: 100px" alt="">\n' +
        '                                        <div class="pc-title">\n' +
        '                                            <h4> $(title)</h4>\n' +
        '                                            <p>$(price)</p>\n' +
        '                                        </div>\n' +
        '                                    </td>\n' +
        '                                    <td class="quy-col">\n' +
        '                                        <div class="quantity" >\n' +
        '                                            <div class="pro-qty">\n' +
        '                                                <input type="text"  class="quan"  value="1">\n' +
        '                                            </div>\n' +
        '                                        </div>\n' +
        '                                    </td>\n' +
        '                                    <td class="size-col"><h4>Size M</h4></td>\n' +
        '                                    <td class="total-col"><h4>$(price)</h4></td>\n' +
        '                                    <td class="btn "style="margin-top: -100px;margin-left: 50px;background-color: purple;border-radius: 10%"> <button> Delete</button> </td>\n' +
        '                                </tr>'




    cartRow.innerHTML=cartRowContent;

    cartItems.append(cartRow);
cartRow.getElementsByClassName('btn')[0].addEventListener('click',removeCartItem);
cartRow.getElementsByClassName('quan')[0].addEventListener('change',quantityChanged);
}


function updateCartTotal() {
    var cartItemContainer=document.getElementsByClassName('cart-items')[0];
    var cartRows=cartItemContainer.getElementsByClassName('cart-item');
    var total=0;
    for(var i=0;i<cartRows.length;i++){
        var cartRow=cartRows[i];
        var priceElement=cartRow.getElementsByClassName('cart-price');
        var quantityElement=cartRow.getElementsByClassName('quan');
        var price=parseFloat(priceElement[0].innerText.replace('$',''));
        var quantity=quantityElement[0].value;
        total=total+(price*quantity);

    }
    total=Math.round(total*100)/100;

    document.getElementsByClassName('cart-total-price')[0].innerText='$'+total;
}
