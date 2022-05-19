$(document).ready(function() {
    let totalPrice = window.sessionStorage.getItem("session_checkout");
    $(".total_price").append(`$${totalPrice}`);
});