document.getElementById("log-btn").addEventListener("click", function (event) {
  event.preventDefault();

  const userEmail = document.getElementById("user-email").value.trim();
  const userPassword = document.getElementById("user-password").value;

  const savedEmail = localStorage.getItem("userEmail");
  const savedPassword = localStorage.getItem("userPassword");

  if (userEmail === savedEmail && userPassword === savedPassword) {
    alert("Login successful!");
    window.location.href = "index.html";
  } else {
    alert("Wrong email or password! Try again.");
  }
});
