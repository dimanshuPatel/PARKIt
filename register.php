<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
      <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap");

:root {
  --error-clr: #b02546;
  --success-clr: #2ecc71;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Nunito", sans-serif;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  background-size: cover;
  background-repeat: no-repeat;
  min-height: 100vh;
  color: white;
  background-image:
  url('https://static.vecteezy.com/system/resources/thumbnails/004/495/548/small/light-soft-color-blue-low-poly-crystal-background-polygon-design-pattern-low-poly-illustration-low-polygon-background-free-vector.jpg');
}

section {
  background-color: hsla(0, 0%, 10%, 0.1);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(20px);
  border-radius: 5px;
  overflow: hidden;
  width: min(420px, 95%);
  border-radius: 1rem;
}

h1 {
  font-size: 1.6rem;
  color: var(--text-clr);
  text-align: center;
  padding: 20px 40px 0;
}

/* FORM  */

form {
  padding: 30px 40px;
}

label {
  display: inline-block;
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-clr);
  margin-bottom: 8px;
}

input {
  width: 100%;
  background: transparent;
  color: white;
  font-size: 0.8rem;
  font-weight: 500;
  background-color: hsla(0, 0%, 10%, 0.1);
  border: 2px solid var(--white-color);
  border: 0;
  padding: 10px;
  margin-bottom: 5px;
  transition: all 0.2s;
  backdrop-filter: blur(8px);
}

input:focus {
  outline: 3px dotted var(--text-clr);
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
  -webkit-background-clip: text;
  -webkit-text-fill-color: var(--text-clr);
}

.input-control.success input {
  outline: 3px dotted var(--success-clr);
}

.input-control.error input {
  outline: 3px dotted var(--error-clr);
}

.input-control {
  position: relative;
  margin-bottom: 20px;
}

.input-control i {
  position: absolute;
  top: 40px;
  right: 10px;
  visibility: hidden;
}

.input-control.success i.fa-check-circle {
  color: var(--success-clr);
  visibility: visible;
}

.input-control.error i.fa-exclamation-circle {
  color: var(--error-clr);
  visibility: visible;
}

.input-control small {
  position: absolute;
  bottom: 0;
  left: 0;
  font-weight: 800;
  visibility: hidden;
}

.input-control.error small {
  color: var(--error-clr);
  visibility: visible;
}

button {
  width: 100%;
  background: white;
  color: black;
  font-size: 1rem;
  font-weight: 700;
  letter-spacing: 2px;
  text-align: center;
  text-transform: uppercase;
  padding: 16px;
  margin-top: 10px;
  border-radius: 5px;
  border: 0;
  cursor: pointer;
  transition: all 0.4s linear;
}


      </style>
    <title>Registeration Form</title>
</head>
<body>
    <section>
      <h1 class="title">Registration Form</h1>

      <form id="form" action="_handle(r).php" method="post">
        <div class="modal-body">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" id="uname">User Name</label>
              <input type="text" class="form-control" id="uname" name="uname"
                  aria-describedby="emailHelp" require>
             <!-- <div>We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label" id="signupEmail">Email</label>
              <input type="text" class="form-control" id="signupEmail" name="signupEmail"
                  aria-describedby="emailHelp" require>
             <!-- <div>We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" id="signupPassword">Password</label>
              <input type="password" class="form-control" id="signupPassword" name="signupPassword" require> 
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label" id="signupCpassword">Confirm Password</label>
              <input type="password" class="form-control" id="signupCpassword" name="signupCpassword" require>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </section>
    <script>
      const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmpassword = document.getElementById("confirmpassword");
const title = document.querySelector(".title");
const button = document.querySelector("button");
const message = document.querySelector(".message");

//! Event listeners for real-time input validation
username.addEventListener("input", validateUsername);
email.addEventListener("input", validateEmail);
password.addEventListener("input", validatePassword);
confirmpassword.addEventListener("input", validateConfirmPassword);

//! Event listener for form submission
form.addEventListener("submit", (e) => {
  e.preventDefault();

  if (
    validateUsername() &&
    validateEmail() &&
    validatePassword() &&
    validateConfirmPassword()
  ) {
    submittedForm();
  }
});

//! Validation functions
function validateUsername() {
  const usernameValue = username.value.trim();
  if (usernameValue === "") {
    setErrorFor(username, "Username cannot be blank");
    return false;
  } else {
    setSuccessFor(username);
    return true;
  }
}

function validateEmail() {
  const emailValue = email.value.trim();
  if (emailValue === "") {
    setErrorFor(email, "Email cannot be blank");
    return false;
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "Email is not valid");
    return false;
  } else {
    setSuccessFor(email);
    return true;
  }
}

function validatePassword() {
  const passwordValue = password.value.trim();
  if (passwordValue === "") {
    setErrorFor(password, "Password cannot be blank");
    return false;
  } else {
    setSuccessFor(password);
    return true;
  }
}

function validateConfirmPassword() {
  const passwordValue = password.value.trim();
  const confirmpasswordValue = confirmpassword.value.trim();
  if (confirmpasswordValue === "") {
    setErrorFor(confirmpassword, "Confirm Password cannot be blank");
    return false;
  } else if (passwordValue !== confirmpasswordValue) {
    setErrorFor(confirmpassword, "Password does not match!");
    return false;
  } else {
    setSuccessFor(confirmpassword);
    return true;
  }
}

//! Helper functions
function setErrorFor(input, message) {
  const inputControl = input.parentElement;
  const small = inputControl.querySelector("small");

  small.innerText = message;
  inputControl.classList.remove("success");
  inputControl.classList.add("error");
  inputControl.style.paddingBottom = "20px";
  inputControl.style.marginBottom = "14px";
}

function setSuccessFor(input) {
  const inputControl = input.parentElement;

  inputControl.classList.remove("error");
  inputControl.classList.add("success");
  inputControl.style.paddingBottom = "0";
  inputControl.style.marginBottom = "20px";
}

//! Checking email
function isEmail(email) {
  return /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email);
}

// https://emaillistvalidation.com/blog/email-validation-in-javascript-using-regular-expressions-the-ultimate-guide/

//! Showing the 'submitted' message
function submittedForm() {
  title.classList.add("hidden");
  form.classList.add("hidden");
  message.classList.remove("hidden");
  setTimeout(() => location.reload(true), 2500);
}
    </script>
  </body>
  </html>