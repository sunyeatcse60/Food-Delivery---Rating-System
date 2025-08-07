let foods = [];
let cart = [];
let activeCategory = 'All';




// JSON ডাটা লোড করা (✅ ঠিক করে দেওয়া হয়েছে)
fetch('data.json')
  .then(res => res.json())
  .then(data => {
    foods = data.foods;

    cart = JSON.parse(localStorage.getItem('cart')) || [];

    renderCategoryButtons();
    renderFoodCards('All');
    updateCartCount();
  })
  .catch(error => {
    console.error('JSON Load Error:', error);
  });



// ক্যাটেগরি বাটন রেন্ডার
function renderCategoryButtons() {
  const categories = ['All', ...new Set(foods.map(f => f.category))];
  const container = document.getElementById('category-buttons');
  container.innerHTML = '';

  categories.forEach(category => {
    const btn = document.createElement('button');
    btn.textContent = category;
    btn.className = `
      px-4 py-2 rounded font-medium transition-all
      ${activeCategory === category
        ? 'bg-yellow-400 text-white shadow'
        : 'bg-gray-200 text-gray-700 hover:bg-yellow-400 hover:text-white'}
    `;
    btn.addEventListener('click', () => {
      activeCategory = category;
      renderCategoryButtons();
      renderFoodCards(category);
    });
    container.appendChild(btn);
  });
}



// ফুড কার্ড রেন্ডার
function renderFoodCards(category) {
  const container = document.getElementById('food-grid');
  container.innerHTML = '';

  const filtered = category === 'All'
    ? foods
    : foods.filter(f => f.category === category);

  filtered.forEach(food => {
    const card = document.createElement('div');
    card.className = `
      bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow 
      flex flex-col mx-auto w-64 px-3 py-3 my-2
    `;

    card.innerHTML = `
      <img src="${food.image}" alt="${food.name}" class="w-full h-36 object-cover rounded-2xl mb-2">
      <div class="p-4 flex-1 flex flex-col justify-between">
        <div>
          <h3 class="text-base font-semibold mb-1">${food.name}</h3>
          <p class="text-xs text-gray-600 mb-1" id="stock-${food.id}">Available: ${food.stock}</p>
          <p class="text-gray-500 text-sm mb-2">${food.short_description}</p>
          <p class="text-green-600 font-bold text-sm">৳${food.price} 
            ${food.discount > 0 ? `<span class="text-red-500 text-xs">(-${food.discount}%)</span>` : ''}
          </p>
        </div>
        <div class="mt-4 flex justify-between">
          <button 
            class="add-cart bg-green-600 text-white py-1 px-2 rounded hover:bg-green-700 transition text-xs" 
            data-id="${food.id}">
            Add
          </button>
          <button 
            class="order-now bg-blue-600 text-white py-1 px-2 rounded hover:bg-blue-700 transition text-xs" 
            data-id="${food.id}">
            Order
          </button>
        </div>
      </div>
    `;
    container.appendChild(card);
  });

  // Add to Cart
  document.querySelectorAll('.add-cart').forEach(btn => {
    btn.addEventListener('click', e => {
      const id = parseInt(e.target.getAttribute('data-id'));
      const food = foods.find(f => f.id === id);

      if (food.stock > 0) {
        cart.push(food);
        food.stock--;
        updateCartCount();
        updateStockDisplay(food.id, food.stock);
        localStorage.setItem('cart', JSON.stringify(cart));
        alert(`${food.name} added to cart!`);
      } else {
        alert('Out of stock!');
      }
    });
  });

  // Order Now
  document.querySelectorAll('.order-now').forEach(btn => {
    btn.addEventListener('click', e => {
      const id = parseInt(e.target.getAttribute('data-id'));
      const food = foods.find(f => f.id === id);

      if (food.stock > 0) {
        food.stock--;
        updateStockDisplay(food.id, food.stock);
        alert(`Ordering now: ${food.name}`);
      } else {
        alert('Out of stock!');
      }
    });
  });
}

// কার্ট কাউন্ট আপডেট
function updateCartCount() {
  const countSpan = document.getElementById('cart-count');
  countSpan.textContent = cart.length;
}

// স্টক সংখ্যা আপডেট
function updateStockDisplay(id, stock) {
  const stockElement = document.getElementById(`stock-${id}`);
  if (stockElement) {
    stockElement.textContent = `Available: ${stock}`;
  }
}
