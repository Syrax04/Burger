<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger Hut</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<header class="header">
    <a href="#home" class="logo">Burger Hut</a>

    <i class="bx bx-menu" id="menu-icon"></i>

    <nav class="nav">
        <a href="#home" class="active">Home</a>
        <a href="#menu">Menu</a>
        <a href="#about">About Us</a>
        <a href="#locations">Locations</a>
        <a href="#contact">Contact</a>

        <!-- User Authentication Links -->
        <?php if (isset($_COOKIE['user'])): ?>
            <div class="user-dropdown">
                <a href="#profile" class="user-link">Profile</a>
                <a href="#cart" class="user-link">Cart</a>
                <a href="login/logout.php" class="user-link">Logout</a>
                <div class="tooltip">
                    <?= htmlspecialchars($_COOKIE['user']); ?>
                </div>
            </div>
        <?php else: ?>
            <a href="login/index.php" class="login-link">Login</a>
        <?php endif; ?>
    </nav>
</header>

    <section class="hero" id="home">
       <div class="hero-overlay"></div>
       <div class="hero-content">
           <h1>Welcome to Burger Hut</h1>
           <p>Bite Into Happiness With Our Juicy, Delicious Burgers</p>
           <div class="cta-buttons">
               <a href="#menu" class="cta">View Menu</a>
               <a href="#order" class="cta cta-secondary">Order Now</a>
           </div>
       </div>
   </section>

   <section class="menu-section" id = "menu">
       <h2>Our Menu</h2>
       <div class="menu-items">
           <div class="menu-item">
               <img src="https://via.placeholder.com/300" alt="Classic Burger">
               <h3>Classic Burger</h3>
               <p>A timeless favorite with fresh lettuce, tomatoes, and our secret sauce.</p>
               <p class="price">$8.99</p>
               <a href="#order" class="order-btn">Order Now</a>
           </div>
           <div class="menu-item">
               <img src="https://via.placeholder.com/300" alt="Cheese Explosion Burger">
               <h3>Cheese Explosion</h3>
               <p>Loaded with cheddar, mozzarella, and a crispy cheese crust.</p>
               <p class="price">$10.99</p>
               <a href="#order" class="order-btn">Order Now</a>
           </div>
           <div class="menu-item">
               <img src="https://via.placeholder.com/300" alt="BBQ Bacon Burger">
               <h3>BBQ Bacon Burger</h3>
               <p>Smoky BBQ sauce, crispy bacon, and melted cheese.</p>
               <p class="price">$11.99</p>
               <a href="#order" class="order-btn">Order Now</a>
           </div>
           <div class="menu-item">
               <img src="https://via.placeholder.com/300" alt="Veggie Delight Burger">
               <h3>Veggie Delight</h3>
               <p>A delicious patty made from fresh veggies, topped with avocado.</p>
               <p class="price">$9.99</p>
               <a href="#order" class="order-btn">Order Now</a>
           </div>
       </div>
   </section>

   <section class="about-section" id="about">
       <h2>About Us</h2>
       <p>
           Welcome to Burger Hut, where we believe every bite should be an unforgettable experience. 
           Since our humble beginnings, we've been committed to crafting the juiciest, most flavorful burgers 
           using only the freshest ingredients. From our secret sauce to our perfectly grilled patties, 
           we bring passion and dedication to every meal we serve. Whether you're dining in or taking out, 
           your satisfaction is our top priority.
       </p>
       <div class="about-image">
           <img src="https://via.placeholder.com/600x400" alt="Burger Hut Team">
       </div>
   </section>

   <section class="location-section" id="locations">
       <h2>Our Locations</h2>
       <p>Find a Burger Hut near you and enjoy the best burgers in town!</p>
       <div class="locations">
           <div class="location-card">
               <h3>Downtown Food City</h3>
               <p>123 Main Street, Food City, FC 12345</p>
               <p>Phone: <a href="tel:+123456789">+1 (234) 567-89</a></p>
               <p>Hours: Mon-Sun, 10:00 AM - 10:00 PM</p>
           </div>
           <div class="location-card">
               <h3>Uptown Food City</h3>
               <p>456 High Street, Food City, FC 67890</p>
               <p>Phone: <a href="tel:+123456789">+1 (234) 567-89</a></p>
               <p>Hours: Mon-Sun, 11:00 AM - 11:00 PM</p>
           </div>
           <div class="location-card">
               <h3>Suburban Food City</h3>
               <p>789 Suburb Lane, Food City, FC 11223</p>
               <p>Phone: <a href="tel:+123456789">+1 (234) 567-89</a></p>
               <p>Hours: Mon-Sun, 9:00 AM - 9:00 PM</p>
           </div>
       </div>
   </section>

   <section class="contact-section" id="contact">
       <h2>Contact Us</h2>
       <p>Have questions or need assistance? Drop us a message and we'll get back to you soon!</p>
       <form class="contact-form">
           <input type="text" name="name" placeholder="Your Name" required>
           <input type="email" name="email" placeholder="Your Email" required>
           <textarea name="message" placeholder="Your Message" required></textarea>
           <button type="submit">Send Message</button>
       </form>
       <div class="contact-info">
           <p>Email: <a href="mailto:info@burgerhut.com">info@burgerhut.com</a></p>
           <p>Phone: <a href="tel:+123456789">+1 (234) 567-89</a></p>
           <p>Address: 123 Burger Lane, Food City, FC 12345</p>
       </div>
   </section>


   <footer class="footer">
       <p>&copy; 2024 Burger Hut. All Rights Reserved.</p>
       <p>
           Follow us: 
           <a href="#">Facebook</a> | 
           <a href="#">Instagram</a> | 
           <a href="#">Twitter</a>
       </p>
   </footer>


   <script src="script.js"></script>
</body>
</html>
