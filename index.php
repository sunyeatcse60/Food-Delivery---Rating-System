<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>QuickDish</title>

  <!-- icon -->
  <link rel="icon" href="./Images/icon.png" type="image/x-icon" />

  <!-- DaisyUI -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/YOUR_KIT.js" crossorigin="anonymous"></script>

  <!-- Smooth Scrolling -->
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body class="font-sans">
  <!-- Navbar -->
  <header class="fixed top-0 w-full z-50 bg-white shadow-md">
    <nav class="max-w-screen-xl mx-auto px-6 lg:px-16">
      <div class="flex justify-between items-center py-4">
        <!-- Logo -->
        <div class="flex items-center gap-2">
          <img src="./Images/logo.png" alt="logo" class="w-10 h-10 rounded-lg" />
          <h1 class="text-2xl font-bold text-gray-800">QuickDish</h1>
        </div>

        <!-- Large Device Nav -->
        <div class="hidden lg:flex gap-6 text-gray-700 font-medium">
          <a href="#home" class="hover:text-yellow-500">Home</a>
          <a href="#menu" class="hover:text-yellow-500">Menu</a>
          <a href="#service" class="hover:text-yellow-500">Service</a>
          <a href="#reviews" class="hover:text-yellow-500">Reviews</a>
          <a href="#about" class="hover:text-yellow-500">About Us</a>
          <a href="./feedback.html" class="hover:text-yellow-500">Feedback</a>
        </div>

        <!-- Cart + Login -->
        <div class="flex items-center gap-4">
          <div class="relative hidden sm:block">
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M6 6h15l-1.5 9h-13z"></path>
              <path d="M6 6L4 2H2"></path>
              <circle cx="9" cy="20" r="1"></circle>
              <circle cx="18" cy="20" r="1"></circle>
            </svg>
            <span class="absolute -top-2 -right-2 bg-yellow-400 text-xs px-1 rounded-full text-white">0</span>
          </div>

         
          <button onclick="loadModal('signup.html')"
            class="bg-yellow-400 hover:bg-[#471396] text-black hover:text-white px-4 py-1 rounded font-semibold">
            Signup
          </button>




          <!-- Mobile Dropdown -->
          <div class="lg:hidden dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost shadow rounded-full p-2">
              <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-white rounded-box w-52">
              <li>
                <a href="#home" class="font-medium text-gray-700">Home</a>
              </li>
              <li>
                <a href="#menu" class="font-medium text-gray-700">Menu</a>
              </li>
              <li>
                <a href="#service" class="font-medium text-gray-700">Service</a>
              </li>
              <li>
                <a href="#reviews" class="font-medium text-gray-700">Reviews</a>
              </li>
              <li>
                <a href="#about" class="font-medium text-gray-700">About Us</a>
              </li>
              <li>
                <a href="./feedback.html" class="font-medium text-gray-700">Feedback</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id="modal-overlay" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
    <div id="modal-content" class="bg-white p-6 rounded-md shadow-md max-w-md w-full relative flex flex-col items-center justify-center">
      <!-- Dynamic content will be inserted here -->
    </div>
  </div>


 
  <main class="pt-24">
    <!-- Hero Section -->
    <section id="home"
      class="w-10/12 mx-auto rounded-lg bg-gray-100 h-full flex flex-col lg:flex-row items-center justify-between px-10 py-14 relative">
      <div class="max-w-xl text-left">
        <h2 class="text-5xl font-bold leading-snug text-gray-900 mb-6">
          Enjoy Your<br />
          <span class="text-6xl font-extrabold text-black inline-flex items-center gap-2">Delicious</span><br />
          Food
        </h2>
        <div class="flex shadow-md rounded overflow-hidden w-full max-w-md mb-10">
          <input type="text" placeholder="Enter your meal" class="flex-grow px-4 py-3 text-gray-700 outline-none" />
          <button class="bg-yellow-400 hover:bg-[#471396] text-black hover:text-white px-6 font-semibold">
            Search
          </button>
        </div>
      </div>
      <div class="lg:absolute right-10 bottom-0 w-full lg:w-1/2">
        <img src="./Images/hero-Photo.png" alt="Delivery Woman" class="w-full" />
      </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="w-10/12 mx-auto mt-20 py-20 text-center bg-gray-100 rounded-lg">
      <h2 class="text-3xl font-bold mb-6">Our Menu</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Delicious meals curated just for you. Explore our selection of freshly
        prepared dishes made with love and care.
      </p>

      <!-- API food section -->



    </section>

    <!-- Service Section -->

    <section class="w-10/12 mx-auto bg-white py-14 px-6 lg:px-24">
      <h2 class="text-4xl font-bold text-center mb-10">🚚 Our Services</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="p-6 border rounded-xl shadow hover:shadow-md transition bg-gray-50">
          <h3 class="text-xl font-bold mb-2">⚡ Fast Delivery</h3>
          <p class="text-gray-600 text-sm">
            Delivered in 30 minutes or less, hot and fresh.
          </p>
        </div>

        <div class="p-6 border rounded-xl shadow hover:shadow-md transition bg-gray-50">
          <h3 class="text-xl font-bold mb-2">📍 Live Order Tracking</h3>
          <p class="text-gray-600 text-sm">
            Track your food from the kitchen to your door.
          </p>
        </div>

        <div class="p-6 border rounded-xl shadow hover:shadow-md transition bg-gray-50">
          <h3 class="text-xl font-bold mb-2">🌟 Verified Reviews</h3>
          <p class="text-gray-600 text-sm">
            Real reviews from real customers only.
          </p>
        </div>

        <div class="p-6 border rounded-xl shadow hover:shadow-md transition bg-gray-50">
          <h3 class="text-xl font-bold mb-2">🧼 Hygiene Guaranteed</h3>
          <p class="text-gray-600 text-sm">
            We partner with FSSAI-approved kitchens only.
          </p>
        </div>

        <div class="p-6 border rounded-xl shadow hover:shadow-md transition bg-gray-50">
          <h3 class="text-xl font-bold mb-2">🎁 Loyalty Rewards</h3>
          <p class="text-gray-600 text-sm">
            Earn points on every order. Redeem for discounts!
          </p>
        </div>

        <div class="p-6 border rounded-xl shadow hover:shadow-md transition bg-gray-50">
          <h3 class="text-xl font-bold mb-2">💬 24/7 Customer Support</h3>
          <p class="text-gray-600 text-sm">
            Help is always available via live chat or call.
          </p>
        </div>
      </div>
    </section>

    <!-- Customer Reviews Section -->
    <section id="reviews" class="w-10/12 mx-auto mt-20 rounded-lg bg-gray-100 px-6 py-14">
      <div class="text-center mb-6">
        <h1 class="text-3xl font-bold mb-4">Customer Reviews</h1>
        <p class="max-w-2xl mx-auto text-gray-600">
          Our customers love our fast service, fresh meals, and reliable
          delivery. Here's what they have to say!
        </p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-10">
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <img src="./Images/emon.png" class="w-20 h-20 rounded-full mx-auto mb-4" alt="Customer 1" />
          <h3 class="text-lg font-semibold mb-2">Sunyeat Islam</h3>
          <p class="text-sm text-gray-600 mb-4">
            Amazing food quality and delivery was on time. I'm impressed!
          </p>
          <button class="bg-yellow-400 hover:bg-[#471396] text-black hover:text-white px-4 py-2 rounded">
            More Details
          </button>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <img src="https://i.pravatar.cc/100?img=2" class="w-20 h-20 rounded-full mx-auto mb-4" alt="Customer 2" />
          <h3 class="text-lg font-semibold mb-2">Rafiul Islam</h3>
          <p class="text-sm text-gray-600 mb-4">
            QuickDish never disappoints. Tasty food and always fresh.
          </p>
          <button class="bg-yellow-400 hover:bg-[#471396] text-black hover:text-white px-4 py-2 rounded">
            More Details
          </button>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <img src="./Images/akrur.jpg" class="w-20 h-20 rounded-full mx-auto mb-4" alt="Customer 3" />
          <h3 class="text-lg font-semibold mb-2">Akrur Ghosh</h3>
          <p class="text-sm text-gray-600 mb-4">
            Very reliable service. I always order from them when I’m busy.
          </p>
          <button class="bg-yellow-400 hover:bg-[#471396] text-black hover:text-white px-4 py-2 rounded">
            More Details
          </button>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <img src="https://i.pravatar.cc/100?img=4" class="w-20 h-20 rounded-full mx-auto mb-4" alt="Customer 4" />
          <h3 class="text-lg font-semibold mb-2">Tareq Hossain</h3>
          <p class="text-sm text-gray-600 mb-4">
            The packaging was neat and the food was still hot. Loved it!
          </p>
          <button class="bg-yellow-400 hover:bg-[#471396] text-black hover:text-white px-4 py-2 rounded">
            More Details
          </button>
        </div>
      </div>
    </section>

    <!-- About Us Section -->

    <!-- Delivery Process Section -->
  </main>

  <!-- Footer -->
  <footer class="footer w-10/12 mx-auto mt-10 sm:footer-horizontal text-base-content p-10">
    <aside>
      <img src="./Images/logo.png" alt="logo" class="w-10 h-10 rounded-lg" />
      <p>
        <span class="font-bold text-xl text-yellow-500">QuickDish</span><br />
        Providing reliable food delivery since 2025
      </p>
    </aside>
    <nav>
      <h6 class="footer-title">Services</h6>
      <a class="link link-hover">Fast food delivery</a>
      <a class="link link-hover">24/7 support</a>
      <a class="link link-hover">Online payment</a>
      <a class="link link-hover">Real-time order tracking</a>
    </nav>
    <nav>
      <h6 class="footer-title">Company</h6>
      <a class="link link-hover">About us</a>
      <a class="link link-hover">Contact</a>
      <a class="link link-hover">Our food Reviews</a>
      <a class="link link-hover">Our team</a>
    </nav>
    <nav>
      <h6 class="footer-title">Legal</h6>
      <a class="link link-hover">Terms & Conditions</a>
      <a class="link link-hover">Privacy policy</a>
      <a class="link link-hover">Refund Policy</a>
      <a class="link link-hover">Cookie policy</a>
    </nav>
  </footer>



  <!-- js file  link -->
  <script src="./signlog.js"></script>
  <script src="./signup.js"></script>
  <script src="./food.js"></script>
</body>

</html>