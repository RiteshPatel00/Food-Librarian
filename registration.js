function formValidation(e){
  // Creating a regex expression to perform email validation 
  var re = /\S+@\S+\.\S+/;

  // Selecting the appropriate text input fields
  var userName = document.getElementById("userName").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirmPassword").value;

  // Performing form validation on the user name
  if (userName.length >= 50 || userName.length <= 5){
    // Using preventDefault() to not refresh the page
    e.preventDefault();
    // Clearing the input field
    document.getElementById("userName").value = '';
    // Sending the user an alert on the field that is not passing the form validation and the reason why
    alert("Username must be between 5-50 characters");
    return false;
  }

  // Performing form validation on the email by testing to see if the string matches the email
  if (!re.test(email)){
    // Using preventDefault() to not refresh the page
    e.preventDefault();
    // Clearing the input field
    document.getElementById("email").value = '';
    // Sending the user an alert on the field that is not passing the form validation and the reason why
    alert("Invalid email format");
    return false
  }

  // Performing form validation on the password
  if (password.length >= 100 || password.length <= 8){
    // Using preventDefault() to not refresh the page
    e.preventDefault();
    // Clearing the input field
    document.getElementById("password").value = '';
    // Sending the user an alert on the field that is not passing the form validation and the reason why
    alert("Password must be between 8-100 characters");
    return false
  }
  
  // Performing form validation on the second password to see if it matches the vaue of the first password
  if (password !== confirmPassword){
    e.preventDefault();
    document.getElementById("confirmPassword").value = '';
    alert("Passwords do not match, please try again");
    return false
  }

}