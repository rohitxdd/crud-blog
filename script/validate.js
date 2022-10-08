let form = document.registerForm;
var msg = document.querySelector(".passError");
let inputObj = {};

function validation() {
    let arr = Object.values(inputObj);
    if(arr.every(e => e) && arr.length === 5){
        console.log("validated")
        return true
    }else{
      alert("check your password")
      return false
    }
}

function checkSepChar(event) {
  inputObj[event.name] = /^[\w]+$/.test(event.value);
  if (!inputObj[event.name]) {
    alert("special characters are not allowed");
    event.focus();
  }
}

function validateEmail(event) {
  if (event.value) {
    inputObj[event.name] =
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
        event.value
      );
    if (!inputObj[event.name]) {
      alert("Please input a valid email");
      event.focus();
    }
  }
}

function validateMobile(event) {
  console.log(event.value);
  inputObj[event.name] = /^[0-9]/.test(event.value);
  if (!inputObj[event.name]) {
    alert("Please input a valid mobile number");
    event.focus();
    return;
  }
  event.value = event.value.slice(0, 10);
}

function validatePass(event) {
  inputObj[event.name] = /^[a-zA-Z0-9!@#\$%\^\&*\)\(+=._-]{6,}$/g.test(
    event.value
  );
  console.log()
  if (!inputObj[event.name]) {
    alert("Enter a valid password(minmum 6 character long and no whitespace are allowed)");
    event.focus();
  }
}

function confirmPass(event){
    let pass = form["pass"].value;
    if(pass.slice(0, event.value.length) === event.value){
        inputObj[event.name] = true
        msg.innerHTML = ""
    }else{
        inputObj[event.name] = false
        msg.innerHTML = "Password not matching"
    }
    console.log(event.value)
}


