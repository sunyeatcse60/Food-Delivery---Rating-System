function loadModal(page) {
  fetch(page)
    .then(res => res.text())
    .then(html => {
      document.getElementById("modal-content").innerHTML =
        `<button onclick="closeModal()" class="absolute top-2 right-3 text-xl text-gray-600 hover:text-red-500">&times;</button>` +
        html;
      document.getElementById("modal-overlay").classList.remove("hidden");
    })
    .catch(err => {
      alert("Failed to load content.");
      console.error(err);
    });
}

function closeModal() {
  document.getElementById("modal-overlay").classList.add("hidden");
  document.getElementById("modal-content").innerHTML = '';
}

function switchToLogin() {
  closeModal();
  setTimeout(() => loadModal('login.html'), 300);
}

function switchToSignup() {
  closeModal();
  setTimeout(() => loadModal('signup.html'), 300);
}

