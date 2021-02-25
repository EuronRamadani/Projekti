
const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
const pwRegex=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

const emri = document.querySelector('#name');
const mbiemri = document.querySelector('#lastName');
const email = document.querySelector('#emailii');
const password = document.querySelector('#passwordii');
const butoni = document.querySelector('#butoniii');

const emri_error = document.querySelector('#emri_error')
const mbiemri_error = document.querySelector('#mbiemri_error');
const email_error = document.querySelector('#email_error');
const pass_error = document.querySelector('#pass_error');


emri.addEventListener('input', emri_Verify);
mbiemri.addEventListener('input', mbiemri_Verify);
email.addEventListener('input', email_Verify);
password.addEventListener('input', password_Verify);
butoni.addEventListener('click', validimi);


function validimi(){
    return true
    if(emri.value == '' || emri.value.length < 1){
        emri.style.borderBottomColor = "red";
        emri_error.style.opacity = '1';
    }
    if(mbiemri.value == '' || mbiemri.value.length < 2){
        mbiemri.style.borderBottomColor = "red";
        mbiemri_error.style.opacity = '1';
    }
    if(email.value==''||!emailRegex.test(email.value)){
        email.style.borderBottomColor = "red";
        email_error.style.opacity="1";
    }
   if(password.value==''||!pwRegex.test(password.value)){
        password.style.borderBottomColor = "red";
        pass_error.style.opacity="1";
   }
    if(emri_Verify()&& mbiemri_Verify() && email_Verify() && password_Verify() ){
           window.location.href = "https://www.google.com";
    }
}
 function emri_Verify(){
     if(emri.value.length>1){
        emri.style.borderBottomColor = "#56768a";
        emri_error.style.opacity="0";
     }
 }
 function mbiemri_Verify(){
     if(mbiemri.value.length>2){
        mbiemri.style.borderBottomColor = "#56768a";
        mbiemri_error.style.opacity="0";
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
