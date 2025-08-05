document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault();

  const username = document.getElementById("username").value.trim();
  const email = document.getElementById("email").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirmPassword").value;

  let isValid = true;
  let message = "";

  if (username === "") {
    isValid = false;
    message += "Username is required.\n";
  }

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    isValid = false;
    message += "Invalid email format.\n";
  }

  const phonePattern = /^01[3-9]\d{8}$/;
  if (!phonePattern.test(phone)) {
    isValid = false;
    message += "Phone must be a valid Bangladeshi number.\n";
  }

  const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,}$/;
  if (!passwordPattern.test(password)) {
    isValid = false;
    message +=
      "Password must contain at least:\n- one uppercase letter\n- one lowercase letter\n- one number\n- one special character\n- and be at least 6 characters long.\n";
  }

  if (password !== confirmPassword) {
    isValid = false;
    message += "Passwords do not match.\n";
  }

  if (isValid) {
    this.submit();
  } 
  else {
    alert(message);
  }
});
