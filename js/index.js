let cars = [];
let reservation = window.sessionStorage.getItem("session_reservation") ? JSON.parse(window.sessionStorage.getItem("session_reservation")) : [];
        
var output = '';
        
$(document).ready(function() {
    $.getJSON("cars.json", function(data) {
        cars = data;
        $.each(data, function(key, item) {
            output += `
                <div class="car_details">
                    <img src="images/${item.model}.jpg" alt="">
                    <h3>${item.model} (${item.model_year})</h3>
                    <table class="details">
                        <tr>
                            <td style="width:150px"><b>Category</b></td>
                            <td class="category">${item.category}</td>
                        </tr>
                        <tr>
                            <td><b>Availability</b></td>
                            <td class="availability">${item.availability}</td>
                        </tr>
                        <tr>
                            <td><b>Brand</b></td>
                            <td class="brand">${item.brand}</td>
                        </tr>
                        <tr>
                            <td><b>Mileage</b></td>
                            <td class="mileage">${item.mileage} km</td>
                        </tr>
                        <tr>
                            <td><b>Fuel Tyep</b></td>
                            <td class="fuel_type">${item.fuel_type}</td>
                        </tr>
                        <tr>
                            <td><b>Seats</b></td>
                            <td class="seats">${item.seats}</td>
                        </tr>
                        <tr>
                            <td><b>Price Per Day</b></td>
                            <td class="price_per_day">$${item.price_per_day}</td>
                        </tr>
                    </table>
                    <input type="submit" id="btn" value="Add to Cart" onClick="addToCart(${item.id})">
                </div>
            `;
        });
        $('#car_list').append(output);
    });
});
        
function addToCart(id) {
    let car = cars.find(car => car.id == id);
    let res = reservation.find(car => car.id == id);
    let message = `Sorry, the car is not available now. Please try other cars.`; 
    if(res){
        message = `You have already added this car.`;
    } else if(car.availability == "Y") {
        reservation.push(car);
        message = `Added to the cart successfully.`;
    }
    alert(message);
    return true;
}
        
function viewCart() {
    window.sessionStorage.setItem("session_reservation", JSON.stringify(reservation));
    window.location.href = "cart.html";
}