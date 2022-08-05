var firstName = document.getElementById("name");
var email = document.getElementById("email");
var tel = document.getElementById("tel");

var nameError = document.getElementById("errorName");
var emailError = document.getElementById("errorEmail");
var telError = document.getElementById("errorTel");

function validateForm() {
  var valid = true;
  if (firstName.value == "" || firstName.value.length <= 3) {
    nameError.innerHTML = "*Nome inválido";
    valid = false;
  } else {
    nameError.innerHTML = "";
  }
  if (email.value == "") {
    emailError.innerHTML = "*Digite um email valido";
    valid = false;
  } else {
    emailError.innerHTML = "";
  }
  if (tel.value == "") {
    telError.innerHTML = "*Digite um telefone valido";
    valid = false;
  } else {
    telError.innerHTML = "";
  }
  return valid;
}
