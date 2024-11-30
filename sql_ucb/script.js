function validateForm(){
    const name = doucument.getElementById("username").value;
    const email = doucument.getElementById("email").value;
    const city = doucument.getElementById("city").value;
    const mobile = doucument.getElementById("mobile").value;

    const nameError = doucument.getElementById("name-error");
    const emailError = doucument.getElementById("email-error"); 
    const cityError = doucument.getElementById("city-error"); 
    const mobileError = doucument.getElementById("mobile-error"); 

    nameError.textContent ="";
    emailError.textContent ="";
    cityError.textContent ="";
    mobileError.textContent ="";

    let isValid = true;
    if(name === "" || /\d/.test(name)){
        nameError.textContent = "Please enter your name properly";
        isValid = false;
    }
    if(email === "" || !email.includes("@")){
        nameError.textContent = "Please enter a valid email";
        isValid = false;
    }
    if(city === ""){
        nameError.textContent = "Please enter your city name";
        isValid = false;
    }
    if(mobile === "" || mobile.length < 10){
        nameError.textContent = "Please enter your number properly";
        isValid = false;
    }
    return isValid;

}