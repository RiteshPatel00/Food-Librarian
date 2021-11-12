function formValidation(e){
  var re = /\S+@\S+\.\S+/;
  var userName = document.getElementById("userName").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirmPassword").value;
  console.log("Im called");
  if (userName.length >= 50 || userName.length <= 5){
    e.preventDefault();
    document.getElementById("userName").value = '';
    alert("Username must be between 5-50 characters");
    return false;
  }

  if (!re.test(email)){
    e.preventDefault();
    document.getElementById("email").value = '';
    alert("Invalid email format");
    return false
  }

  if (password.length >= 100 || password.length <= 8){
    e.preventDefault();
    document.getElementById("password").value = '';
    alert("Password must be between 8-100 characters");
    return false
  }
  
  if (password !== confirmPassword){
    e.preventDefault();
    document.getElementById("confirmPassword").value = '';
    alert("Passwords do not match, please try again");
    return false
  }

}