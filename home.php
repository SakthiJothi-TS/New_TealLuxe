<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TealLuxe</title>
  <!-- <link rel="stylesheet" href="./css/style.css"> -->
  <!-- <link rel="stylesheet" href="./css/home.css"> -->
  <link rel="shortcut icon" href="./src/images/java-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

  <main>

    <!--header start-->

    <!-- Popup Modal -->
    <div id="offerModal" class="modal">
      <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h2>Special Skincare Offer!</h2>
        <p>Get <strong>3 at ₹799 and 30% OFF</strong> on your first beauty purchase.</p>
        <div class="modal-image">
          <img src="./src/images/card1_imgge.png" alt="offer">
        </div>
        <a href="./shop.php">
          <button class="shop-now-btn">Shop Now</button>
        </a>
      </div>
    </div>


    <header>
      <nav class="navbar">
        <div class="logo_img">
          <a href="./index.html"><img src="./src/images/java-logo.png" alt="logo_img">
            <h4 class="logo">TealLuxe</h4>
          </a>
        </div>

        <input type="checkbox" id="nav-btn">

        <label for="nav-btn" class="nav-icon">
          <i class="bi bi-list open-icon"></i>
          <i class="bi bi-x close-icon"></i>
        </label>

        <ul class="nav-links">
          <li><a class="active" href="#">Home</a></li>
          <li><a class="blink" href="./shop.php">Shop</a></li>
          <li><a class="blink" href="#">About Us</a></li>
          <li><a class="blink" href="#">Offers</a></li>
          <li><a class="blink" href="./contact.php">Contact Us</a></li>
        </ul>

        <div class="search-cart">
          <form class="search-box" onsubmit="return validateSearch()">
            <input type="text" id="search-input" placeholder=" " autocomplete="off" required>
            <button type="submit"><i class="bi bi-search"></i></button>
          </form>
          <a href="#"><i class="bi bi-heart"></i></a>
          <a href="#"><i class="bi bi-cart3"></i></a>
        </div>

      </nav>
    </header>

    <!--header ends-->

    <!--dropdown section starts-->

    <nav class="category-nav">

      <input type="checkbox" id="nav-toggle" hidden>
      <label for="nav-toggle" class="hamburger">
        <span class="open-icon">&#9776;</span>
        <span class="close-icon">&times;</span>
      </label>


      <ul class="category-menu">
        <li class="dropdown">
          <a href="#">Skin <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu">
            <li><a href="#">Cleansers</a></li>
            <li><a href="#">Moisturizers</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#">Body <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu">
            <li><a href="#">Lotions</a></li>
            <li><a href="#">Scrubs</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#">Hair <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu">
            <li><a href="#">Shampoo</a></li>
            <li><a href="#">Conditioner</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#">Makeup <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu">
            <li><a href="#">Lipstick</a></li>
            <li><a href="#">Foundation</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#">Fragrances <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu">
            <li><a href="#">Perfume</a></li>
            <li><a href="#">Mist</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#">Beauty Advice <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu">
            <li><a href="#">Tips to Glow</a></li>
            <li><a href="#">Makeup Tips</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#">Skincare Tips <i class="bi bi-chevron-down"></i></a>
          <ul class="submenu">
            <li><a href="#">Face Care</a></li>
            <li><a href="#">Body Care</a></li>
          </ul>
        </li>
        <!-- <li class="dropdown">
      <a href="#">blogs <i class="bi bi-chevron-down"></i></a>
      <ul class="submenu">
        <li><a href="#">Latest</a></li>
        <li><a href="#">Popular</a></li>
      </ul>
    </li> -->
      </ul>
    </nav>

    <!--dropdown section ends-->


    <!--banner section starts-->


    <div class="auto-carousel">
      <div class="slides">
        <img src="./src/images/banner_one.png" alt="Banner 1">
        <img src="./src/images/banner_two.png" alt="Banner 3">
        <img src="./src/images/banner_three.png" alt="Banner 2">
        <img src="./src/images/banner_one.png" alt="Banner 3">

      </div>
    </div>



    <!-- <div class="carousel-container">
  <div class="carousel" id="carousel">
    <img src="./src/images/Js_banner.png" class="slide" alt="Slide 1">
    <img src="./src/images/car_3.png" class="slide" alt="Slide 2">
    <img src="./src/images/car_2.png" class="slide" alt="Slide 3">
  </div>
</div>

<button class="arrow left" onclick="prevSlide()">&#10094;</button>
<button class="arrow right" onclick="nextSlide()">&#10095;</button>

<div class="indicators" id="indicators">
  <span class="dot active" onclick="goToSlide(0)"></span>
  <span class="dot" onclick="goToSlide(1)"></span>
  <span class="dot" onclick="goToSlide(2)"></span>
</div><br><br>  -->

    <!-- <div class="auto-carousel">
  <div class="slides">
    <img src="./src/images/auto_1_img.png" alt="Banner 1">
    <img src="./src/images/auto_img_3 (1).png" alt="Banner 2">
    <img src="./src/images/auto_img_2.png" alt="Banner 3">
  </div> -->

    <!-- <button class="arrow left">&#10094;</button>
  <button class="arrow right">&#10095;</button>

  <div class="indicators">
    <span class="dot active"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div> -->


    <!--banner section ends-->

    <!--Card section starts-->


    <section class="product-section">
      <h2 class="section-title">Bestsellers</h2><br><br>
      <!-- <button class="product-arrow left" onclick="prevSlide()">&#10094;</button> -->
      <div class="product-carousel-wrapper">

        <div class="product-carousel" id="productCarousel">
          <!-- Card 1 -->
          <div class="product-card">
            <img src="./src/images/card1_imgge.png" alt="Product 1"><br><br>
            <h2>Simple Skin Facial Wash</h2><br>
            <p>Gently cleanses and hydrates your skin, leaving it feeling fresh, soft, and naturally glowing.</p><br>
            <h3>₹ 450</h3>
            <button>Add to Cart</button>
            <button>Buy Now</button>
          </div>

          <!-- Card 2 -->
          <div class="product-card">
            <img src="./src/images/card2_img (1).png" alt="Product 2"><br><br>
            <h2>Himalaya Neem FaceWash</h2><br>
            <p>Infused with neem and turmeric to fight acne, cleanse deeply, and keep your skin healthy.</p><br>
            <h3>₹ 350</h3>
            <button>Add to Cart</button>
            <button>Buy Now</button>
          </div>

          <!-- Card 3 -->
          <div class="product-card" class="product3">
            <img src="./src/images/card3_img.png" alt="Product 3"><br><br>
            <h2>NIVEA Soft Moisturizer</h2><br>
            <p>Perfect for everyday use, it leaves your skin soft, smooth, and moisturized without feeling greasy.</p>
            <br>
            <h3>₹ 299</h3>
            <button>Add to Cart</button>
            <button>Buy Now</button>
          </div>
        </div>
      </div>
      <!-- <button class="product-arrow right" onclick="nextSlide()">&#10095;</button> -->
    </section>


    <!--card section ends-->

    <!--brand section starts-->

    <section class="top-brands-section">
      <h2 class="top-brands-title">&#10022; Top Brands &#10022;</h2>

      <marquee behavior="marquee" direction="left">
        <div class="brand-logos-one">
          <img src="./src/images/lakme_img.png" alt="Lakme">
          <img src="./src/images/nykaa_img (1).png" alt="Nykaa">
          <img src="./src/images/biotioque_img.png" alt="Biotique">
          <img src="./src/images/lotus_img.png" alt="Lotus">
          <img src="./src/images/loreal_img.png" alt="Loreal">
          <img src="./src/images/huda-beauty_img.png" alt="Huda Beauty">
          <img src="./src/images/lakme_img.png" alt="Lakme">
          <img src="./src/images/nykaa_img (1).png" alt="Nykaa">
          <img src="./src/images/biotioque_img.png" alt="Biotique">
          <img src="./src/images/lotus_img.png" alt="Lotus">
          <img src="./src/images/loreal_img.png" alt="Loreal">
          <img src="./src/images/huda-beauty_img.png" alt="Huda Beauty">
        </div>
      </marquee>

      <marquee behavior="marquee" direction="right">
        <div class="brand-logos-two">
          <img src="./src/images/mac_img.png" alt="MAC">
          <img src="./src/images/nivea_img.png" alt="Nivea">
          <img src="./src/images/colorbar_img.png" alt="Colorbar">
          <img src="./src/images/himalaya_img.png" alt="Himalaya">
          <img src="./src/images/nyx_img.png" alt="NYX">
          <img src="./src/images/maybeline_img.png" alt="Maybelline">
          <img src="./src/images/mac_img.png" alt="MAC">
          <img src="./src/images/nivea_img.png" alt="Nivea">
          <img src="./src/images/colorbar_img.png" alt="Colorbar">
          <img src="./src/images/himalaya_img.png" alt="Himalaya">
          <img src="./src/images/nyx_img.png" alt="NYX">
          <img src="./src/images/maybeline_img.png" alt="Maybelline">

        </div>
      </marquee>

      <div class="view-all-wrapper">
        <button class="view-all-btn">view all &#10095;</button>
      </div>
    </section>

    <!--brand section endss-->


    <!--accordian section starts-->


    <section id="skincare-tips-section">
      <div class="tips-content">
        <h2>Daily Skincare Tips</h2><br>
        <p>Expert advice to keep your skin glowing</p>

        <div class="accordion">
          <div class="accordion-item active">
            <button class="accordion-header">What makes TealLuxe skincare products
              different?<span>&times;</span></button>
            <div class="accordion-body">
              <p>
                1. We use clean, dermatologically tested ingredients that are gentle on all skin types. <br>
                2. Our formulas are enriched with natural botanicals like aloe vera, green tea, and rose extracts. <br>
                3. TealLuxe products are cruelty-free and free from parabens, sulfates, and artificial fragrances. <br>
                4. We blend science and nature to deliver visible results without harsh chemicals.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <button class="accordion-header">Are TealLuxe products suitable for sensitive skin? <span>+</span></button>
            <div class="accordion-body">
              <p>
                1. Yes, TealLuxe products are crafted with sensitive skin and dermatologist-tested for safety. <br>
                2. We strictly avoid chemicals, artificials, and parabens that are cause to allergic reactions. <br>
                3. Each formulation undergoes testing on sensitive skin types to ensure it remains gentle. <br>
                4. Our calming skincare range, enriched with smoothing ingredients that helps to reduce redness.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <button class="accordion-header">How should I build a basic skincare routine using
              TealLuxe?<span>+</span></button>
            <div class="accordion-body">
              <p>
                1. Begin with our Foaming Cleanser to remove impurities and makeup without drying out our skin. <br>
                2. Follow up with Hydrating Toner, helps to prepares skin for better absorption of treatments. <br>
                3. Apply the Brightening Serum—rich in Vitamin C and extracts—to uneven skin tone, dullness.<br>
                4. Complete your routine with the Daily Moisturizer followed by our SPF 30+ Sunscreens.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <button class="accordion-header">Can I use TealLuxe products during pregnancy? <span>+</span></button>
            <div class="accordion-body">
              <p>
                1. Yes,TealLuxe products are thoughtfully formulated to be safe for use during pregnancy. <br>
                2. Ensure our pregnancy-safe excludes ingredients like retinol,strong acids. <br>
                3. Check the label for ingredients or consult with healthcare provider before starting new product. <br>
                4. Our Mild Glow and Soothing Botanicals collections are specially recommended.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--accordian section ends-->


    <!--our story section starts-->

    <section id="story-sec">
      <div class="our-story">
        <div class="story-image">
          <img src="./src/images/our_story_img.png" alt="Makeup products">
        </div>
        <div class="story-content">
          <h2>Our Story</h2>
          <p>
            TealLuxe was founded with a passion for creating luxury skincare products
            that combine nature’s finest ingredients with cutting-edge science.
          </p>
          <p>
            Our mission is to empower individuals to feel confident in their skin
            through high-quality, effective, and beautifully crafted formulations.
          </p>
          <p>
            Every product is thoughtfully developed to nourish, restore, and enhance
            natural beauty while offering a touch of indulgence. At TealLuxe, skincare
            is more than a routine — it’s a daily act of self-love.
          </p>
          <p>
            We are committed to sustainability, using eco-friendly packaging and cruelty-free ingredients to care for
            both your skin and the planet.
          </p>
        </div>

      </div>
    </section>


    <!--our story section ends-->

    <!--auto carousel starts-->

    <div class="auto-carousel">
      <div class="slides">
        <img src="./src/images/auto_1_img.png" alt="Banner 1">
        <img src="./src/images/car_ban_1.png" alt="Banner 3">
        <img src="./src/images/auto_img_2.png" alt="Banner 2">
        <img src="./src/images/auto_1_img.png" alt="Banner 3">

      </div>
    </div>

    <!--auto carousel ends-->


    <!--testimonial section starts-->


    <section class="testimonials">
      <h2>What Our Customers Say</h2>
      <div class="testimonial-cards">
        <div class="card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>"The Rose Glow Serum transformed my skin in just two weeks. My complexion is brighter and more even-toned
            than ever before!"</p>
          <p><strong>- Emma S.</strong></p>
        </div>
        <div class="card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>"I love that TealLuxe products are cruelty-free and still deliver amazing results. The Hydra Bloom Cream is
            now my holy grail moisturizer!"</p>
          <p><strong>- Jessica T.</strong></p>
        </div>
        <div class="card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>"As someone with sensitive skin, finding TealLuxe was a game-changer. Their products are gentle yet
            effective, and my skin has never looked better!"</p>
          <p><strong>- Michelle K.</strong></p>
        </div>
      </div>
    </section>


    <!--testimonial section ends-->


    <!--footer starts-->


    <footer class="footer">
      <div class="footer-container">
        <div class="footer-column">
          <!-- <h3>TealLuxe</h3> -->
          <div class="lo-go">
            <a href="./index.html"><img src="./src/images/java-logo.png" alt="logo_img">
              <h4 class="logo">TealLuxe</h4>
            </a>
          </div>
          <p>Your trusted partner in skincare excellence.</p>
        </div>

        <div class="footer-column">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="./shop.html">Shop</a></li>
            <li><a href="./index.html#story-sec">About Us</a></li>
            <li><a href="./index.html#skincare-tips-section">Skincare Tips</a></li>
            <li><a href="./contact.html">Offers</a></li>
            <li><a href="./contact.html">Contact Us</a></li>
          </ul>
        </div>

        <div class="footer-column">
          <h3>Connect</h3>
          <p><a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank"><i
                class="bi bi-envelope-fill"> </i>tealluxe@gmail.com</a></p>
          <p><a href="tel:+6380070672"><i class="bi bi-telephone-fill"> </i>+91-63789-73467</a> </p>

          <div class="social-icons">
            <span><a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i
                  class="fa-brands fa-square-instagram"></i></a></span>
            <span><a href="https://www.facebook.com/login/" target="_blank"><i class="fa-brands fa-square-facebook"></i>
              </a></span>
            <span><a href="https://www.youtube.com/account" target="_blank"><i
                  class="fa-brands fa-square-youtube"></i></a></span>
            <span><a href="https://in.pinterest.com/" target="_blank"><i class="fa-brands fa-square-pinterest"></i>
              </a></span>
          </div>
        </div>

        <div class="footer-column">
          <h3>Newsletter</h3>
          <div class="newsletter">
            <form>
              <input type="email" placeholder="Enter your email" required>
              <button type="submit">Subscribe</button>
            </form>
          </div>
          <a href="https://play.google.com/store/games?device=windows&amp;pli=1" target="_blank"><img
              src="./src/images/google_play.png" alt="Google Play" class="store-badge"></a>
          <a href="https://appstoreconnect.apple.com/login" target="_blank"><img src="./src/images/app_store.png"
              alt="App Store" class="store-badge"></a>
        </div>
      </div>

      <div class="footer-bottom">
        <p><a href="#">&copy; 2025 TealLuxe Beauty. All rights reserved.</a></p>
        <p><a href="#">Terms & Service</a> | <a href="#">Privacy Policy</a></p>
        <p>Design & Developed by <a href="https://www.behance.net/sakthijothi" target="_blank">Sakthi Jothi</a></p>
      </div>
    </footer>

    <!--footer ends-->

    <script>
      window.addEventListener("scroll", function () {
        const image = document.querySelector(".story-image img");
        const scrolled = window.scrollY;
        image.style.transform = `translatex(${scrolled * 0.1}px)`;
      });





      window.onload = function () {
        setTimeout(() => {
          document.getElementById('offerModal').style.display = 'block';
        }, 1000);
      };

      document.querySelector('.close-btn').onclick = function () {
        document.getElementById('offerModal').style.display = 'none';
      };

      document.querySelector('.shop-now-btn').onclick = function () {
        document.getElementById('offerModal').style.display = 'none';
      };

      window.onclick = function (e) {
        const modal = document.getElementById('offerModal');
        if (e.target === modal) {
          modal.style.display = 'none';
        }
      };

    </script>

  </main>


  <script src="./js/script.js"></script>

</body>

</html>



<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
}
?>












<!--     
    <div class="product add-product-card">
      <div class="card" style="display: flex; align-items: center; justify-content: center; height: 300px; border: 2px dashed #ccc; cursor: pointer;">
        <div style="text-align: center;">
          <img src="./src/images/plus_icon.png" alt="Add Product" style="width: 60px; height: 60px; margin-bottom: 10px;">
          <h3>Add Product</h3>
        </div>
      </div>
    </div> -->

    <!-- Product Card -->
    <!-- <div class="product" data-price="600" data-makeup="Eyes" data-skin="Normal" data-color="Red">
      <div class="card">
        <img src="./src/images/red_eyeshadow.png" alt="Eyeshadow">
        <h3>Colorpop Eyeshadow</h3>
        <p>Skin Type: Normal</p>
        <div class="rate">
          <h4>₹ 600</h4>
          <p><a>&#9733;</a>1.1 (114 Ratings)</p>
        </div>
        <button class="quick-view">Quick View</button>
      </div>
      <div class="card-footer">
        <a href="view.php?img=red_eyeshadow.png&name=Colorpop%20Eyeshadow&skin=Normal&price=600" class="btn-info"><button>View</button></a>
        <button class="btn-warning">Edit</button>
        <button class="btn-danger">Delete</button>
      </div>
    </div> -->

    <!-- <div class="product" data-price="600" data-makeup="Eyes" data-skin="Normal" data-color="Red">
      <div class="card">
        <img src="./src/images/red_eyeshadow.png" alt="Sunscreen">
        <h3>Colorpop Eyeshadow</h3>
        <p>Skin Type: Normal</p>
        <div class="rate">
          <h4>₹ 600</h4>
          <p><a>&#9733;</a>1.1 (114 Ratings)</p>
        </div>
        <button class="quick-view">Quick View</button>
      </div>
      <div class="card-footer">
        <button class="btn-info">View</button>
        <button class="btn-warning">Edit</button>
        <button class="btn-danger">Delete</button>
      </div>
    </div>

    <div class="product" data-price="600" data-makeup="Eyes" data-skin="Normal" data-color="Red">
      <div class="card">
        <img src="./src/images/red_eyeshadow.png" alt="Sunscreen">
        <h3>Colorpop Eyeshadow</h3>
        <p>Skin Type: Normal</p>
        <div class="rate">
          <h4>₹ 600</h4>
          <p><a>&#9733;</a>1.1 (114 Ratings)</p>
        </div>
        <button class="quick-view">Quick View</button>
      </div>
      <div class="card-footer">
        <button class="btn-info">View</button>
        <button class="btn-warning">Edit</button>
        <button class="btn-danger">Delete</button>
      </div>
    </div>

    <div class="product" data-price="600" data-makeup="Eyes" data-skin="Normal" data-color="Red">
      <div class="card">
        <img src="./src/images/red_eyeshadow.png" alt="Sunscreen">
        <h3>Colorpop Eyeshadow</h3>
        <p>Skin Type: Normal</p>
        <div class="rate">
          <h4>₹ 600</h4>
          <p><a>&#9733;</a>1.1 (114 Ratings)</p>
        </div>
        <button class="quick-view">Quick View</button>
      </div>
      <div class="card-footer">
        <button class="btn-info">View</button>
        <button class="btn-warning">Edit</button>
        <button class="btn-danger">Delete</button>
      </div>
    </div>

  </div>
</div> -->


  <!-- <div id="orders" class="tab-pane">
    <h2>Orders</h2>
    <p>Track all recent and past customer orders here.</p>
  </div>

  <div id="customers" class="tab-pane">
    <h2>Customers</h2>
    <p>View and manage registered customers.</p>
  </div>

  <div id="settings" class="tab-pane">
    <h2>Settings</h2>
    <p>Update profile, website info, or admin preferences.</p>
  </div> -->







