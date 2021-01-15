var listOfInput = document.getElementsByClassName('input');
var listOfInputlogin = document.getElementsByClassName('login-in');
document.getElementById("signUp").addEventListener("click", function(event){
    event.preventDefault()
  });
function validateUsername(element) {

    
  if (/[^a-zA-Z0-9]/.test(element)) {

    alert("Username mund te permbaje vetem shkronja dhe numra!");
    return false;
  }
  return true;
}

function validateName(element) {

  if (/[^a-zA-Z]/.test(element)) {

    alert("Emri mund te permbaje vetem shkronja");
    return false;

  }

  return true;

}

function isEmail(email) {
	return /^\S+@\S+\.\S+$/.test(email);
}

var elementList= document.getElementsByClassName('input-field');

  for(var i=0; i<elementList.length;i++){
      elementList[i].addEventListener('keyup',function(event){
        event.preventDefault();

        loginObj={
          ...loginObj,
          [event.target.name]:event.target.value
        }
        console.log(loginObj)
      })
    }
var nameValue1 = '';
var lastNameValue1 = '';
var emailValue1 = '';
var passwordValue1 = '';

var loginObj = {
  name:"",
  lastName:"",
  email:"",
  password:""
}


function validate(number) {
    
    if (number == 0) {
  
      if (listOfInput[0].value == "") {
  
        alert("Plotesoni username-in");
        return false;
      }
      else if (listOfInput[1].value == "" ){
  
        alert("Plotesoni lastname-in!");
        return false;
      }
      else if (listOfInput[2].value == "" ){
  
        alert("Plotesoni email-in!");
        return false;
      }
      if (!isEmail(listOfInput[2].value)){
        alert("Emaili jo valid");
        return false;
        }
      else if (listOfInput[3].value == "" ){
  
        alert("Plotesoni password-in!");
        return false;
      }
      else {
  
            if (validateUsername(listOfInput[0].value) == false) {
  
          return;
  
        };
        alert("Login successful");
  
      }
  
    }
  
    else if (number == 1) {
  
      if (listOfInputlogin[0].value == "") {
  
        alert("Plotesoni username-in!");
        return false;
      }
      else if (listOfInputlogin[1].value == "" ){
  
        alert("Plotesoni paswordin!");
        return false;
      }
      else {
  
        if(validateName(listOfInput[0].value) == false) {
  
          return;
  
        };
  
        alert("Registered successfully!");
      }
  
    }
  
  }
