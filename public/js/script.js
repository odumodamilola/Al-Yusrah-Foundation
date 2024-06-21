let checkbox = document.getElementById('showPasswordCheckbox');
let password = document.getElementById('password');
let confirmpassword = document.getElementById('password-confirm');

checkbox.addEventListener('change', function() {
    if (this.checked) {
        password.type = "text";
        confirmpassword.type = "text";
    } else {
        password.type = "password";
        confirmpassword.type = "password";
    }
});




//mypasswordvalidation
const input = document.querySelector("input"),
indicator = document.querySelector(".indicator"),
iconText = document.querySelector(".icon-text"),
text = document.querySelector(".text");




let alphabet = /[a-zA-Z]/,
     numbers = /[0-9]/,
     scharacter =/[!,@,#,$,%,^,&,(,),-,+,=,~]/;

input.addEventListener("keyup", ()=>{
    indicator.classList.add("active");

    let val = input.value;
    if(val.match(alphabet) || val.match(numbers) || val.match(scharacter)){
        text.textContent = "password is weak";
        input.style.outlineColor = "red";
        input.style.borderColor = "red";
        showHide.style.color = "red";
        iconText.style.color = "red";
    }
    if(val.match(alphabet) && val.match(numbers) && val.length >= 6){
        text.textContent = "password is medium";
        input.style.outlineColor = "#cc8500";
        input.style.borderColor = "#cc8500";
        showHide.style.color = "#cc8500";
        iconText.style.color = "#cc8500";
    }


    if(val.match(alphabet) && val.match(numbers) && val.match(scharacter) && val.length >= 6){
        text.textContent = "password is strong";
        input.style.outlineColor = "#22C32A";
        input.style.borderColor = "#22C32A";
        showHide.style.color = "#22C32A";
        iconText.style.color = "#22C32A";

    }


    if(val == ""){
        indicator.classList.remove("active");
        input.style.outlineColor = "#A6A6A6";
        input.style.borderColor = "#A6A6A6";
        showHide.style.color = "#A6A6A6";
        iconText.style.color = "#A6A6A6";
    }
});