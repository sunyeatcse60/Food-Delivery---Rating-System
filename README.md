# QuickDish - Food Delivery & Rating System

A modern food delivery web application with customer feedback and rating system.

## Features

- Food menu loaded from `data.json`
- Category-wise food filtering and search (by name/category)
- Add to cart and order functionality
- User authentication (signup, login)
- Customer feedback form with star rating
- Responsive UI with Tailwind CSS & DaisyUI
- All orders and feedback stored in MySQL database

## Technologies Used

- PHP (Backend)
- MySQL (Database)
- HTML, CSS (Tailwind, DaisyUI)
- JavaScript (Frontend logic)
- JSON (Food data)

## Project Structure
Food-Delivery-&-Rating-System
│
├── index.php # Main landing page (was index.html)
├── data.json # Food items data
├── food.js # Menu/category/cart logic
├── search.js # Search logic for menu section
├── signup.php # Signup backend
├── login.php # Login backend
├── logindata.php # Login data handler
├── code.php # Feedback form handler
├── connect.php # Database connection
├── checkout.php # Order checkout logic
├── cart.php # Cart backend
├── feedback.html # Feedback form UI
├── Images/ # All images and icons
└── ... # Other supporting files



## Setup Instructions

1. **Clone the repository**

2. git clone https://github.com/yourusername/Food-Delivery---Rating-System.git

3. **Import the database**
- Create a MySQL database (e.g., `fooddb`).
- Create required tables (orders, feedback, users, etc.).
- Update `connect.php` with your DB credentials.

3. **Run the project**
- Place the folder in your XAMPP `htdocs` directory.
- Start Apache and MySQL from XAMPP control panel.
- Visit `http://localhost/Food-Delivery-&-Rating-System/index.php` in your browser.

4. **Default Admin/User**
- Signup as a new user or use your own admin logic.

## Usage

- Browse menu, search food by name/category.
- Add food to cart and place orders.
- Submit feedback with star rating.
- View customer reviews and about us section.

## Credits

- Developed by Sunyeat Islam and Akrur Ghosh.
- UI powered by Tailwind CSS and DaisyUI.

