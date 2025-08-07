// Load cart from localStorage
let cart = JSON.parse(localStorage.getItem('cart')) || [];

function renderCart() {
    const container = document.getElementById('cart-items');
    container.innerHTML = '';
    let total = 0;

    if (cart.length === 0) {
        container.innerHTML = '<p class="text-center text-gray-500">Your cart is empty.</p>';
        document.getElementById('cart-total').textContent = '';
        document.getElementById('cartDataInput').value = '';
        return;
    }

    cart.forEach((item, idx) => {
        total += item.price;
        const div = document.createElement('div');
        div.className = 'flex items-center justify-between border-b py-3';
        div.innerHTML = `
      <div class="flex items-center gap-4">
        <img src="${item.image}" alt="${item.name}" class="w-16 h-16 rounded-xl object-cover">
        <div>
          <h3 class="font-semibold text-lg">${item.name}</h3>
          <p class="text-sm text-gray-500">${item.price}</p>
        </div>
      </div>
      <button class="delete-item bg-red-500 text-white px-3 py-1 rounded" data-idx="${idx}">Delete</button>
    `;
        container.appendChild(div);
    });

    document.getElementById('cart-total').textContent = `Total: ৳${total}`;
    document.getElementById('cartDataInput').value = JSON.stringify(cart);

    // Delete item
    document.querySelectorAll('.delete-item').forEach(btn => {
        btn.onclick = function () {
            const idx = parseInt(this.getAttribute('data-idx'));
            cart.splice(idx, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            renderCart();
        };
    });

    // Intercept checkout form submit
    const checkoutForm = document.querySelector('form[action="checkout.php"]');
    if (checkoutForm) {
        checkoutForm.onsubmit = function (e) {
            e.preventDefault();
            fetch('checkout.php', {
                method: 'POST',
                body: new FormData(checkoutForm)
            })
                .then(res => res.text())
                .then(msg => {
                    // Clear cart and update UI
                    cart = [];
                    localStorage.setItem('cart', JSON.stringify(cart));
                    renderCart();
                    alert('Order placed successfully!');
                });
        };
    }
}

renderCart();