<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Arasu Chicken Center - Premium quality fresh chicken, eggs, and masalas.">
    <title>Arasu Chicken Center | Fresh & Premium</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">Arasu <span>Chicken Center</span></a>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#products">Products</a>
                <a href="#contact">Contact Us</a>
            </div>
            <button class="mobile-toggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>
    <header id="home" class="hero">
        <div class="hero-content">
            <h1>Freshness You Can <span class="highlight">Taste</span></h1>
            <p>Premium quality chicken, farm-fresh eggs, and authentic masalas delivered straight from our farm to your table.</p>
            <a href="#products" class="btn btn-primary">Explore Products</a>
        </div>
        <div class="hero-image">
            <img src="images/hero_chicken.png" alt="Fresh premium chicken">
        </div>
    </header>
    <section id="products" class="products">
        <div class="section-header">
            <h2>Our Premium Offerings</h2>
            <p>Sourced locally, prepared freshly.</p>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="card-img">
                    <img src="images/hero_chicken.png" alt="Fresh Chicken">
                </div>
                <div class="card-content">
                    <h3>Fresh Chicken Cuts</h3>
                    <p>Tender, juicy, and perfectly portioned cuts for your daily needs.</p>
                    <span class="price">Daily Market Price</span>
                </div>
            </div>
            <div class="product-card">
                <div class="card-img">
                    <img src="images/product_eggs.png" alt="Farm Eggs">
                </div>
                <div class="card-content">
                    <h3>Farm Fresh Eggs</h3>
                    <p>Nutrient-rich, organic eggs sourced directly from local farms.</p>
                    <span class="price">Daily Market Price</span>
                </div>
            </div>
            <div class="product-card">
                <div class="card-img">
                    <!-- Placeholder color for masalas, as we only generated 2 images -->
                    <div style="width: 100%; height: 100%; background: linear-gradient(135deg, #d35400, #c0392b);"></div>
                </div>
                <div class="card-content">
                    <h3>Authentic Masalas</h3>
                    <p>Our secret blend of traditional spices to elevate your chicken curries.</p>
                    <span class="price">From ₹50</span>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <p>Have a bulk order or just a question? Reach out to us!</p>
                <ul class="info-list">
                    <li>📍 123 Main Street, Local Town, City</li>
                    <li>📞 +91 98765 43210</li>
                    <li>✉️ hello@arasuchicken.com</li>
                </ul>
            </div>
            <div class="contact-form">
                <form action="process_contact.php" method="POST" id="inquiryForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required placeholder="9876543210">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="4" required placeholder="I'd like to inquire about a bulk order..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Send Inquiry</button>
                    <div id="form-response" class="form-response"></div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Arasu Chicken Center. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
