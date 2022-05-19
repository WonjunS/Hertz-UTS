let reservation;

$(document).ready(function() {
    reservation = JSON.parse(sessionStorage.getItem('session_reservation'));
    if(reservation.length > 0) 
    {
        $.each(reservation, function(index, car){
            let items = 
                `
                    <tr id="${car.id}">
                        <td><img width="150px" height="100px" src="images/${car.model}.jpg" alt=""></td>
                        <td>${car.model_year}-${car.brand}-${car.model}</td>
                        <td>$${car.price_per_day}</td>
                        <td><input id="car-${car.id}" class="rental_days" type="number" value="1"></input></td>
                        <td><input type="submit" value="Delete" onclick="deleteCar(${car.id})"></td>
                   </tr>
                `;
            $("#cart_list").append(items);
        });
    }
    else {
        let message = "<tr><td colspan=5>No cars have been reserved.</td></tr>";
        $("#cart_list").append(message);
    }
});
    
function deleteCar(id){
    reservation = reservation.filter(car => car.id != id);
    window.sessionStorage.setItem('session_reservation', JSON.stringify(reservation));
    document.getElementById(`${id}`).innerHTML = "";
        
    if(reservation.length < 1) {
        window.location.href="index.html";
    }
}
    
function checkout() {
    if(reservation.length <= 0) {
        alert("No car has been reserved.");
        window.location.href="index.html";
    } else {
        let days = document.getElementsByClassName('rental_days');
        let value = validateDays(days);
        if(value) {
            window.location.href="checkout.html";
            window.sessionStorage.setItem("session_checkout", value);
        }
    }
}
    
function validateDays(input) {
    let total = 0;
    for(var i=0; i < input.length; i++) {
        if(!input[i].value || input[i].value <= 0) {
            alert("Rental days must be greater than 0.");
            return false;
        } else {
            let car = reservation.find(car => input[i].id.split('-')[1] == car.id);
            total += input[i].value * car.price_per_day;
        }
    }
    return total;
}