var cart_items = 0;
function alert_cart() {
    cart_items += 1;
    document.getElementById("no_items").innerHTML = cart_items;
    alert("Added to the cart");

    if (cart_items > 1)
        document.getElementById("item").innerHTML = "items";
    else
        document.getElementById("item").innerHTML = "item";
};
