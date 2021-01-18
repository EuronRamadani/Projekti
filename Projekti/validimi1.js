const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
const pwRegex=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

const email=document.querySelector('#emailii');
const password=document.querySelector('#passwordii');
const butoni=document.querySelector('#buttonii');

const email_error = document.querySelector('#email_error');
const pass_error = document.querySelector('#pass_error');

email.addEventListener('input',email_Verify);
password.addEventListener('input',password_Verify);
butoni.addEventListener('click',validimi);

function validimi(){
    if(email.value==''||!emailRegex.test(email.value)){
        email.style.borderBottomColor = "red";
        email_error.style.opacity="1";
    }
    if(password.value==''||!pwRegex.test(password.value)){
        password.style.borderBottomColor = "red";
        pass_error.style.opacity="1";
    } 
    if(email_Verify()&&password_Verify()){
           window.location.href = "https://www.google.com";
    }
    
}

function email_Verify(){
    if(emailRegex.test(email.value)){
        email.style.borderBottomColor = "#56768a";
        email_error.style.opacity="0";
    }
 
}
function password_Verify(){
    if(pwRegex.test(password.value)){
        password.style.borderBottomColor = "#56768a"    ;
        pass_error.style.opacity="0";
        return true;
    }
    return false;
}