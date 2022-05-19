function checkCompleted() {
    const first_name = document.getElementById("user_first_name").value;
    const last_name = document.getElementById("user_last_name").value;
    const email = document.getElementById("user_email").value;
    const address = document.getElementById("user_address1").value;
    const city = document.getElementById("user_city").value;
    const state = document.getElementById("user_state").value;
    const postcode = document.getElementById("user_postcode").value;
    const payment_type = document.getElementById("user_payment").value;
    
    /* Check if any blanks are missing */
    if(first_name == "") {
        alert("First Name cannot be blank!");
        return false;
    }
    
    else if(last_name == "") {
        alert("Last Name cannot be blank!");
        return false;
    }
    
    else if(email == "") {
        alert("Email cannot be blank!");
        return false;
    } 
    
    else if(!isValid(email)) {
        alert("You have entered an invalid email address!");
        return false;
    }
    
    else if(address == "") {
        alert("Address cannot be blank!");
        return false;
    }
    
    else if(city == "") {
        alert("City cannot be blank!");
        return false;
    }
    
    else if(state == "") {
        alert("State cannot be blank!");
        return false;
    }
    
    else if(postcode == "") {
        alert("Postcode cannot be blank!");
        return false;
    }
    
    else if(payment_type == "") {
        alert("Payment type cannot be blank!");
        return false;
    }
    
    /* Move to the details page if no issues found */
}

function isValid(input) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(input);
}