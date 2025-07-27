<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TealLuxe</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/contact.css">
 <link rel="shortcut icon" href="./src/images/java-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <!--header start-->

<header>
  <nav class="navbar">
    <div class="logo_img">
      <a href="./index.php"><img src="./src/images/java-logo.png" alt="logo_img">
      <h4 class="logo">TealLuxe</h4></a>
    </div>

    <input type="checkbox" id="nav-btn">
    
    <label for="nav-btn" class="nav-icon">
      <i class="bi bi-list open-icon"></i>
      <i class="bi bi-x close-icon"></i>
    </label>

    <ul class="nav-links">
      <li><a class="blink" href="./index.php">Home</a></li>
      <li><a class="blink" href="./shop.php">Shop</a></li>
      <li><a class="blink" href="#">About Us</a></li>
      <li><a class="blink" href="#">Offers</a></li>
      <li><a class="active" href="./contact.php">Contact Us</a></li>
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


<main>

<!--banner starts-->

  <div class="sticky-banner">
    <p>&#127873;<span>Buy 3 at ₹999</span> on all Moisturizers this week! <span><a href="./shop.html">Shop now</a></span></span></p>
  </div>

  <section class="contact-section">
    <div class="overlay">
      <h1>Contact Us</h1>
      <p>Reach out anytime – your beauty journey matters to us!</p>
      <button>Get Started</button>
    </div>
  </section>

<!--banner ends-->

<!--support text starts-->


<section class="support-text">
  <h2>Glow with Confidence—We’re Always Here for You</h2>
  <p>Your beauty journey starts with our support.</p>
</section>


<!--support text ends-->

<!--form starts-->

<section class="contact-section-form">
<form class="form-box">
  <label>Name</label>
  <input type="text" placeholder="Enter your name">

  <label>Email</label>
  <input type="email" placeholder="Enter your email">

  <label>Message</label>
  <textarea placeholder="Type your message here..."></textarea>

  <button type="submit">Send Message</button>
</form>
</section>

<!--form ends-->

<!-- Contact Info starts -->

<section class="contact-info">
  <div class="info-box">
    <p><a href="https://www.google.com/maps/place/IMAGE+CREATIVE+EDUCATION-2D%263D+Animation%7CVFX%7CDigital+Video+Production+Course+in+Madurai+%7C+UI+UX+Course+%7C+Fullstack+Course/@9.9328378,78.1488145,21z/data=!4m14!1m7!3m6!1s0x3b00c553a9fb384d:0xcc60d2791e24607e!2sIMAGE+CREATIVE+EDUCATION-2D%263D+Animation%7CVFX%7CDigital+Video+Production+Course+in+Madurai+%7C+UI+UX+Course+%7C+Fullstack+Course!8m2!3d9.9328576!4d78.1488547!16s%2Fg%2F11nfvmsg2h!3m5!1s0x3b00c553a9fb384d:0xcc60d2791e24607e!8m2!3d9.9328576!4d78.1488547!16s%2Fg%2F11nfvmsg2h?entry=ttu&g_ep=EgoyMDI1MDYzMC4wIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="bi bi-geo-alt-fill"></i></p>
    <h4>Address</h4>
    <p>kk Nagar , Madurai</p></a>
  </div>
  <div class="info-box">
    <p><a href="tel:+6380070672" target="_blank"><i class="bi bi-telephone-fill"></i></p>
    <h4>Phone</h4>
    <p>+91-67432-64892</p></a>
  </div>
  <div class="info-box">
    <p><a href="https://mail.google.com/mail/u/0/#inbox?compose=new"  target="_blank" ><i class="bi bi-envelope-fill"></i></a></p>
    <h4>Email</h4>
    <p>tealluxe@gmail.com</p>
  </div>
</section>

</main>

<!-- Contact Info ends -->


<!--footer starts-->


<footer class="footer">
  <div class="footer-container">
    <div class="footer-column">
      <!-- <h3>TealLuxe</h3> -->
           <div class="lo-go">
      <a href="./index.html"><img src="./src/images/java-logo.png" alt="logo_img">
      <h4 class="logo">TealLuxe</h4></a>
    </div>
      <p>Your trusted partner in skincare excellence.</p>
    </div>

    <div class="footer-column">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="./index.html">Home</a></li>
        <li><a href="./shop.html">Shop</a></li>
        <li><a href="./index.html#story-sec">About Us</a></li>
        <li><a href="./index.html#skincare-tips-section">Skincare Tips</a></li>
        <li><a href="./contact.html">Offers</a></li>
        <li><a href="./contact.html">Contact Us</a></li>
      </ul>
    </div>

    <div class="footer-column">
      <h3>Connect</h3>
      <p><a href="https://mail.google.com/mail/u/0/#inbox?compose=new"  target="_blank" ><i class="bi bi-envelope-fill"> </i>tealluxe@gmail.com</a></p>  
      <p><a href="tel:+6380070672"><i class="bi bi-telephone-fill"> </i>+91-63789-73467</a> </p> 
            
      <div class="social-icons">
        <span><a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i class="fa-brands fa-square-instagram"></i></a></span>  
        <span><a href="https://www.facebook.com/login/" target="_blank"><i class="fa-brands fa-square-facebook"></i>
</a></span>  
        <span><a href="https://www.youtube.com/account" target="_blank"><i class="fa-brands fa-square-youtube"></i></a></span>    
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
      <a href="https://play.google.com/store/games?device=windows&amp;pli=1" target="_blank"><img src="./src/images/google_play.png" alt="Google Play" class="store-badge"></a>
      <a href="https://appstoreconnect.apple.com/login" target="_blank"><img src="./src/images/app_store.png" alt="App Store" class="store-badge"></a>
    </div>
  </div>

  <div class="footer-bottom">
    <p><a href="#">&copy; 2025 TealLuxe Beauty. All rights reserved.</a></p>
    <p><a href="#">Terms & Service</a> | <a href="#">Privacy Policy</a></p>
    <p>Design & Developed by <a href="https://www.behance.net/sakthijothi" target="_blank">Sakthi Jothi</a></p>
  </div>
</footer>

<!--footer ends-->


  <script src="./js/script.js"></script>

<script>
  document.querySelector('.form-box').addEventListener('submit', function (e) {
    e.preventDefault(); // Stop form submit

    // Remove all old error messages
    const oldErrors = document.querySelectorAll('.error-msg');
    oldErrors.forEach(err => err.remove());

    const nameInput = this.querySelector('input[type="text"]');
    const emailInput = this.querySelector('input[type="email"]');
    const messageInput = this.querySelector('textarea');
    let isValid = true;

    // Name validation - only letters and spaces allowed
    const namePattern = /^[A-Za-z\s]+$/;
    if (nameInput.value.trim() === '') {
      showError(nameInput, "Please enter your name");
      isValid = false;
    } else if (!namePattern.test(nameInput.value.trim())) {
      showError(nameInput, "Name must contain only letters");
      isValid = false;
    }

    // Email validation
    const emailPattern = /^[^]+@[^]+\.[a-z]{2,3}$/;
    if (emailInput.value.trim() === '') {
      showError(emailInput, "Please enter your email");
      isValid = false;
    } else if (!emailPattern.test(emailInput.value.trim())) {
      showError(emailInput, "Please enter a valid email");
      isValid = false;
    }

    // Message validation
    if (messageInput.value.trim() === '') {
      showError(messageInput, "Please enter your message");
      isValid = false;
    }

    if (isValid) {
      this.submit(); 
    }
  });

  function showError(inputElement, message) {
    const error = document.createElement('div');
    error.className = 'error-msg';
    error.style.color = 'red';
    error.style.fontSize = '16px';
    error.style.marginTop = '4px';
    error.textContent = message;
    inputElement.insertAdjacentElement('afterend', error);
  }
</script>





</body>
</html>