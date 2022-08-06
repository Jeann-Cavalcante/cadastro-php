var firstName = document.getElementById("name");
var email = document.getElementById("email");
var tel = document.getElementById("tel");
var message = document.getElementById("message");

var nameError = document.getElementById("errorName");
var emailError = document.getElementById("errorEmail");
var telError = document.getElementById("errorTel");
var messageError = document.getElementById("errorMessage");

function validateForm() {
  var valid = true;
  if (firstName.value == "" || firstName.value.length <= 3) {
    nameError.innerHTML = "*Nome inválido";
    valid = false;
  } else {
    nameError.innerHTML = "";
  }
  if (email.value == "" || tel.value == "" || message.value == "") {
    emailError.innerHTML = "*Campo obrigatório";
    valid = false;
  } else {
    emailError.innerHTML = "";
  }

  if (tel.value == "") {
    telError.innerHTML = "*Campo obrigatório";
    valid = false;
  } else {
    telError.innerHTML = "";
  }

  if (message.value == "") {
    messageError.innerHTML = "*Campo obrigatório";
    valid = false;
    console.log("mensagem:", message.value);
  } else {
    messageError.innerHTML = "";
  }
  return valid;
}
