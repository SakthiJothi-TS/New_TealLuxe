<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TealLuxe</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/shop.css">
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
          <h4 class="logo">TealLuxe</h4>
        </a>
      </div>

      <input type="checkbox" id="nav-btn">

      <label for="nav-btn" class="nav-icon">
        <i class="bi bi-list open-icon"></i>
        <i class="bi bi-x close-icon"></i>
      </label>

      <ul class="nav-links">
        <li><a class="blink" href="./index.php">Home</a></li>
        <li><a class="active" href="./shop.php">Shop</a></li>
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

  <main>

  <!--category section starts-->

  <section id="product-circle-section">
    <div class="circle-column">

      <div class="circle-item">
        <div class="circle"><img src="./src/images/underarm_cream.png" alt="Under Arm Creams"></div>
        <p>Under Arm <br> Creams</p>
      </div>

      <div class="circle-item">
        <div class="circle"><img src="./src/images/face_makeup.png" alt="Face Makeup Combo"></div>
        <p>Face <br> Makeup</p>
      </div>

      <div class="circle-item">
        <div class="circle"><img src="./src/images/body_lotion.png" alt="Body Lotions & Creams"></div>
        <p>Body <br> Lotions </p>
      </div>

      <div class="circle-item">
        <div class="circle">
          <div class="text-circle">Under ₹ 99</div>
        </div>
        <p>Under <br> ₹99</p>
      </div>

      <div class="circle-item">
        <div class="circle"><img src="./src/images/makeup_combo.png" alt="Makeup Combo"></div>
        <p>Makeup <br> Combo</p>
      </div>

      <div class="circle-item">
        <div class="circle star-circle">⭐</div>
        <p>Top <br> Rated</p>
      </div>

      <div class="circle-item">
        <div class="circle"><img src="./src/images/face_wash.png" alt="Face Wash"></div>
        <p>Face <br> Wash</p>
      </div>

      <div class="circle-item">
        <div class="circle"><img src="./src/images/makeup_kit.png" alt="Makeup Kits"></div>
        <p>Makeup <br>Kits</p>
      </div>
  </section>

  <!--category section ends-->






  <!--filter section starts-->
  <!-- <div class="filter-section">
    <h3>Filter Products</h3>

    <div  iv class="filter-group">
      <strong>Skin Type</strong>
      <label><input type="checkbox" class="skin-type" value="Normal"> Normal</label>
      <label><input type="checkbox" class="skin-type" value="Oily"> Oily</label>
      <label><input type="checkbox" class="skin-type" value="Dry"> Dry</label>
    </div>

    <div class="filter-group">
      <strong>Price Range</strong>
      <input type="range" min="100" max="1000" step="50" value="1000" class="range-input" id="priceRange">
      <p>Up to ₹<span id="priceValue">1000</span></p>
    </div>

    <div class="filter-group">
      <strong>Product Type</strong>
      <label><input type="checkbox" class="skin-type" value="Normal"> Cleanser</label>
      <label><input type="checkbox" class="skin-type" value="Oily"> Toner</label>
      <label><input type="checkbox" class="skin-type" value="Dry"> Serums</label>
    </div>

<div class="filter-group">
  <h3>Makeup Type</h3>
  <label><input type="checkbox" class="filter-checkbox" value="Brown"> <span class="color brown"></span> Brown</label>
  <label><input type="checkbox" class="filter-checkbox" value="Rose Gold"> <span class="color rosegold"></span> Rose Gold</label>
  <label><input type="checkbox" class="filter-checkbox" value="Pink"> <span class="color pink"></span> Pink</label>
  <label><input type="checkbox" class="filter-checkbox" value="Coral"> <span class="color coral"></span> Coral</label>
  <label><input type="checkbox" class="filter-checkbox" value="Red"> <span class="color red"></span> Red</label>
</div>

 <div class="filter-group apply-buttons">
      <button class="apply" onclick="applyFilters()">Apply</button>
      <button class="reset" onclick="resetFilters()">Reset</button>
    </div>
    
  </div> -->
  <!-- <div class="filter-section">

      <h3>Filter Products</h3>


      <div class="filter-group">
        <strong>Skin Type</strong>
        <label><input type="checkbox" class="skin-type" value="Normal"> Normal</label>
        <label><input type="checkbox" class="skin-type" value="Oily"> Oily</label>
        <label><input type="checkbox" class="skin-type" value="Dry"> Dry</label>
      </div>

      <div class="filter-group">
        <strong>Price Range</strong>
        <input type="range" min="100" max="1000" step="50" value="1000" class="range-input" id="priceRange">
        <p>Up to ₹<span id="priceValue">1000</span></p>
      </div>

      <div class="filter-group dropdown">
        <div class="dropdown-header">Makeup Type</div>
        <div class="dropdown-content">
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Eyes"> Eyes</label>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Face"> Face</label>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Nails"> Nails</label>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Lips"> Lips</label>
        </div>
      </div>

      <div class="filter-group dropdown">
        <div class="dropdown-header">Lipstick Colors</div>
        <div class="dropdown-content">
          <label><input type="checkbox" class="filter-input" data-type="color" value="Red"> <span
              class="color red"></span> Red</label>
          <label><input type="checkbox" class="filter-input" data-type="color" value="Pink"> <span
              class="color pink"></span> Pink</label>
          <label><input type="checkbox" class="filter-input" data-type="color" value="Brown"> <span
              class="color brown"></span> Brown</label>
          <label><input type="checkbox" class="filter-input" value="Rose Gold"> <span class="color rosegold"></span>
            Rose Gold</label>
          <label><input type="checkbox" class="filter-input" value="Coral"> <span class="color coral"></span>
            Coral</label>
        </div>
      </div>

      <div class="filter-group apply-buttons">
        <button class="apply" onclick="applyFilters()">Apply</button>
        <button class="reset" onclick="resetFilters()">Reset</button>
      </div>

    </div> -->
  <!-- <section id="productList"> -->
  <!-- <div class="products">
      <div class="product" data-skin="Normal" data-makeup="Lips" data-color="Red">
        <div class="card">
          <img src="./src/images/shop_card_9.png" alt="Face Wash">
          <h3>Red lipbom</h3>
          <p> Skin Type: Dry Skin</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Oily" data-makeup="Face" data-color="Pink">
        <div class="card">
          <img src="./src/images/shop_card_10.png" alt="Face Wash">
          <h3>Pink Foundation</h3>
          <p> Skin Type: Oily</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Brown">
        <div class="card">
          <img src="./src/images/shop_card_11.png" alt="Face Wash">
          <h3>Brown Lipstick</h3>
          <p> Skin Type: Dry Skin</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Normal" data-makeup="Nails" data-color="Pink">
        <div class="card">
          <img src="./src/images/shop_card_12.png" alt="Face Wash">
          <h3>Pink Nail Polish</h3>
          <p> Nail Type: Normal</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Normal" data-makeup="Lips" data-color="Red">
        <div class="card">
          <img src="./src/images/shop_card_9.png" alt="Face Wash">
          <h3>Red lipbom</h3>
          <p> Skin Type: Dry Skin</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Oily" data-makeup="Face" data-color="Pink">
        <div class="card">
          <img src="./src/images/shop_card_10.png" alt="Face Wash">
          <h3>Pink Foundation</h3>
          <p> Skin Type: Oily</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Brown">
        <div class="card">
          <img src="./src/images/shop_card_11.png" alt="Face Wash">
          <h3>Brown Lipstick</h3>
          <p> Skin Type: Dry Skin</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Normal" data-makeup="Nails" data-color="Pink">
        <div class="card">
          <img src="./src/images/shop_card_12.png" alt="Face Wash">
          <h3>Pink Nail Polish</h3>
          <p> Nail Type: Normal</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-price="299" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_1.png" alt="Face Wash">
          <h3>Face Wash</h3>
          <p>Skin Type: Normal</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-price="450" data-skin="Oily">
        <div class="card">
          <img src="./src/images/shop_card_2.png" alt="Moisturizer">
          <h3>Moisturizer</h3>
          <p>Skin Type: Oily</p>
          <span class="price">₹450</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="150" data-skin="Dry">
        <div class="card">
          <img src="./src/images/shop_card_3.png" alt="Cleanser">
          <h3>Cleanser</h3>
          <p>Skin Type: Dry</p>
          <span class="price">₹150</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_4.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_5.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_6.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_7.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_8.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="299" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_1.png" alt="Face Wash">
          <h3>Face Wash</h3>
          <p>Skin Type: Normal</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-price="450" data-skin="Oily">
        <div class="card">
          <img src="./src/images/shop_card_2.png" alt="Moisturizer">
          <h3>Moisturizer</h3>
          <p>Skin Type: Oily</p>
          <span class="price">₹450</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="150" data-skin="Dry">
        <div class="card">
          <img src="./src/images/shop_card_3.png" alt="Cleanser">
          <h3>Cleanser</h3>
          <p>Skin Type: Dry</p>
          <span class="price">₹150</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_4.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_5.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_6.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_7.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_8.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>
    </div> -->


  <!--filter section start-->


  <!-- <section id="banner">
    <div class="wrapper">
      <div class="banner_content">

        <h3>Filter Products</h3>

        <div iv class="filter-group">
          <strong>Skin Type</strong><br>
          <label><input type="checkbox" class="skin-type" value="Normal"> Normal</label><br>
          <label><input type="checkbox" class="skin-type" value="Oily"> Oily</label><br>
          <label><input type="checkbox" class="skin-type" value="Dry"> Dry</label><br>
        </div>

        <div class="filter-group">
          <strong>Price Range</strong>
          <input type="range" min="100" max="1000" step="50" value="1000" class="range-input" id="priceRange">
          <p>Up to ₹<span id="priceValue">1000</span></p>
        </div>

        <div class="filter-group">
          <strong>Product Type</strong><br>
          <label><input type="checkbox" class="skin-type" value="Normal"> Cleanser</label><br>
          <label><input type="checkbox" class="skin-type" value="Oily"> Toner</label><br>
          <label><input type="checkbox" class="skin-type" value="Dry"> Serums</label><br>
        </div>

        <div class="filter-group">
          <strong>Makeup Type</strong><br>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Eyes"> Eyes</label>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Face"> Face</label>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Nails"> Nails</label>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Lips"> Lips</label>
        </div>
      

        <div class="filter-group">
          <h2>Makeup Type</h2><br>
          <label><input type="checkbox" class="filter-checkbox" value="Brown"> <span class="color brown"></span>
            Brown</label><br>
          <label><input type="checkbox" class="filter-checkbox" value="Rose Gold"> <span class="color rosegold"></span>
            Rose Gold</label><br>
          <label><input type="checkbox" class="filter-checkbox" value="Pink"> <span class="color pink"></span>
            Pink</label><br>
          <label><input type="checkbox" class="filter-checkbox" value="Coral"> <span class="color coral"></span>
            Coral</label><br>
          <label><input type="checkbox" class="filter-checkbox" value="Red"> <span class="color red"></span> Red</label>
        </div>

        <div class="filter-group apply-buttons">
          <button class="apply" onclick="applyFilters()">Apply</button>
          <button class="reset" onclick="resetFilters()">Reset</button>
        </div>

      </div>

    </div>

    <div class="banner_img">

      <div class="products">

      <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Red">
        <div class="card">
          <img src="./src/images/shop_card_9.png" alt="Face Wash">
          <h3>Red lipbom</h3>
          <p> Skin Type: Dry Skin</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Oily" data-makeup="Face" data-color="Pink">
        <div class="card">
          <img src="./src/images/shop_card_10.png" alt="Face Wash">
          <h3>Pink Foundation</h3>
          <p> Skin Type: Oily</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Brown">
        <div class="card">
          <img src="./src/images/shop_card_11.png" alt="Face Wash">
          <h3>Brown Lipstick</h3>
          <p> Skin Type: Dry Skin</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Normal" data-makeup="Nails" data-color="Pink">
        <div class="card">
          <img src="./src/images/shop_card_12.png" alt="Face Wash">
          <h3>Pink Nail Polish</h3>
          <p> Nail Type: Normal</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Red">
        <div class="card">
          <img src="./src/images/shop_card_9.png" alt="Face Wash">
          <h3>Red lipbom</h3>
          <p> Skin Type: Dry Skin</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Oily" data-makeup="Face" data-color="Pink">
        <div class="card">
          <img src="./src/images/shop_card_10.png" alt="Face Wash">
          <h3>Pink Foundation</h3>
          <p> Skin Type: Oily</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Brown">
        <div class="card">
          <img src="./src/images/shop_card_11.png" alt="Face Wash">
          <h3>Brown Lipstick</h3>
          <p> Skin Type: Dry Skin</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-skin="Normal" data-makeup="Nails" data-color="Pink">
        <div class="card">
          <img src="./src/images/shop_card_12.png" alt="Face Wash">
          <h3>Pink Nail Polish</h3>
          <p> Nail Type: Normal</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-price="299" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_1.png" alt="Face Wash">
          <h3>Face Wash</h3>
          <p>Skin Type: Normal</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-price="450" data-skin="Oily">
        <div class="card">
          <img src="./src/images/shop_card_2.png" alt="Moisturizer">
          <h3>Moisturizer</h3>
          <p>Skin Type: Oily</p>
          <span class="price">₹450</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="150" data-skin="Dry">
        <div class="card">
          <img src="./src/images/shop_card_3.png" alt="Cleanser">
          <h3>Cleanser</h3>
          <p>Skin Type: Dry</p>
          <span class="price">₹150</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_4.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_5.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_6.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_7.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_8.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="299" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_1.png" alt="Face Wash">
          <h3>Face Wash</h3>
          <p>Skin Type: Normal</p>
          <span>₹299</span>
          <button>Quick View</button>
        </div>
      </div>

      <div class="product" data-price="450" data-skin="Oily">
        <div class="card">
          <img src="./src/images/shop_card_2.png" alt="Moisturizer">
          <h3>Moisturizer</h3>
          <p>Skin Type: Oily</p>
          <span class="price">₹450</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

        <div class="product" data-price="450" data-skin="Oily">
        <div class="card">
          <img src="./src/images/shop_card_2.png" alt="Moisturizer">
          <h3>Moisturizer</h3>
          <p>Skin Type: Oily</p>
          <span class="price">₹450</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="150" data-skin="Dry">
        <div class="card">
          <img src="./src/images/shop_card_3.png" alt="Cleanser">
          <h3>Cleanser</h3>
          <p>Skin Type: Dry</p>
          <span class="price">₹150</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_4.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_5.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_6.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_7.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>

      <div class="product" data-price="600" data-skin="Normal">
        <div class="card">
          <img src="./src/images/shop_card_8.png" alt="Sunscreen">
          <h3>Sunscreen</h3>
          <p>Skin Type: Normal</p>
          <span class="price">₹600</span>
          <button class="quick-view">Quick View</button>
        </div>
      </div>
    </div>


    </div>
    </div>
  </section> -->



  <section id="banner">
    <div class="wrapper">
      <div class="banner_content">
        <h3>Filter Products</h3>

        <div class="filter-group">
          <p><strong>Skin Type</strong></p>
          <label><input type="checkbox" class="skin-type" value="Normal"> Normal</label><br>
          <label><input type="checkbox" class="skin-type" value="Oily"> Oily</label><br>
          <label><input type="checkbox" class="skin-type" value="Dry"> Dry</label><br>
        </div>

        <div class="filter-group">
          <a><strong>Price Range</strong></a>
          <input type="range" min="50" max="1000" step="50" value="1000" class="range-input" id="priceRange">
          <p>Up to ₹<span id="priceValue">1000</span></p>
        </div>

        <!-- <div class="filter-group">
          <a><strong>Product Type</strong></a><br>
          <label><input type="checkbox" class="skin-type" value="Normal"> Cleanser</label><br>
          <label><input type="checkbox" class="skin-type" value="Oily"> Toner</label><br>
          <label><input type="checkbox" class="skin-type" value="Dry"> Serums</label><br>
        </div> -->

        <div class="filter-group">
          <a><strong>Makeup Type</strong></a><br>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Eyes"> Eyes</label><br>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Face"> Face</label><br>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Nails"> Nails</label><br>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Lips"> Lips</label><br>
          <label><input type="checkbox" class="filter-input" data-type="makeup" value="Hair"> Hair</label><br>
        </div>

        <div class="filter-group">
          <a><strong>Makeup Color</strong></a><br>
          <label><input type="checkbox" class="filter-input" data-type="color" value="Red"> <span
              class="color red"></span> Red</label><br>
          <label><input type="checkbox" class="filter-input" data-type="color" value="Pink"> <span
              class="color pink"></span> Pink</label><br>
          <label><input type="checkbox" class="filter-input" data-type="color" value="Brown"> <span
              class="color brown"></span> Brown</label><br>
          <label><input type="checkbox" class="filter-input" data-type="color" value="Purple"> <span
              class="color purple"></span> Purple</label><br>
          <label><input type="checkbox" class="filter-input" data-type="color" value="Coral"> <span
              class="color coral"></span>
            Coral</label><br>
          <label><input type="checkbox" class="filter-input" data-type="color" value="Black"> <span
              class="color black"></span> Black</label><br>
        </div>

        <div class="filter-group apply-buttons">
          <button class="apply" onclick="applyFilters()">Apply</button>
          <button class="reset" onclick="resetFilters()">Reset</button>
        </div>
        
      </div>
    </div>

    

    <!-- <div class="banner_img"> -->
      <div class="products">

        <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Red">
          <div class="card">
            <img src="./src/images/shop_card_9.png" alt="Face Wash">
            <h3>Mantra lipbalm</h3>
            <p> Skin Type: Dry Skin</p>
            <div class="rate">
              <h4>₹ 190</h4><p><a>&#9733;</a>5.5 (122 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

        <div class="product" data-skin="Oily" data-makeup="Face" data-color="Pink">
          <div class="card">
            <img src="./src/images/shop_card_10.png" alt="Face Wash">
            <h3>Lameila Foundation</h3>
            <p> Skin Type: Oily</p>
             <div class="rate">
              <h4>₹ 299</h4><p><a>&#9733;</a>4.9 (244 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

        <div class="product" data-skin="Oily" data-makeup="Face" data-color="Pink">
          <div class="card">
            <img src="./src/images/rose_water.png" alt="Face Wash">
            <h3>Organic Rose Water</h3>
            <p> Skin Type: oily Skin</p>
              <div class="rate">
              <h4>₹ 130</h4><p><a>&#9733;</a>3.9 (314 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

        <div class="product" data-skin="Normal" data-makeup="Nails" data-color="Pink">
          <div class="card">
            <img src="./src/images/shop_card_12.png" alt="Face Wash">
            <h3>LTK Pink Nail Polish</h3>
            <p> Nail Type: Normal</p>
              <div class="rate">
              <h4>₹ 125</h4><p><a>&#9733;</a>2.9 (294 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>
        <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Red">
          <div class="card">
            <img src="./src/images/red_lipstick_1.png" alt="Face Wash">
            <h3>TF Red Lipstick</h3>
            <p> Skin Type: Dry Skin</p>
              <div class="rate">
              <h4>₹ 299</h4><p><a>&#9733;</a>5.5 (264 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

        <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Red">
          <div class="card">
            <img src="./src/images/red_lipbalm_1.png" alt="Face Wash">
            <h3>e.l.f Red lipbalm</h3>
            <p> Skin Type: Dry Skin</p>
              <div class="rate">
              <h4>₹ 190</h4><p><a>&#9733;</a>7.9 (714 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>
        <div class="product" data-skin="Dry" data-makeup="Eyes" data-color="Black">
          <div class="card">
            <img src="./src/images/eyeliner.png" alt="Face Wash">
            <h3>Carslan Eyeliner</h3>
            <p> Skin Type: Dry Skin</p>
              <div class="rate">
              <h4>₹ 220</h4><p><a>&#9733;</a>5.8 (514 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>
        <div class="product" data-skin="Dry" data-makeup="Nails" data-color="Red">
          <div class="card">
            <img src="./src/images/red_nailpolish_1.png" alt="Face Wash">
            <h3>ZOYA Red Nail Polish</h3>
            <p> Skin Type: Dry Skin</p>
              <div class="rate">
              <h4>₹ 189</h4><p><a>&#9733;</a>5.4 (614 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>
        <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Coral">
          <div class="card">
            <img src="./src/images/rosegold_1.png" alt="Face Wash">
            <h3>Colorbar Lipstick</h3>
            <p> Skin Type: Dry Skin</p>
              <div class="rate">
              <h4>₹ 249</h4><p><a>&#9733;</a>4.9 (654 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

        <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Pink">
          <div class="card">
            <img src="./src/images/pink_lipstick_1.png" alt="Face Wash">
            <h3>Colorpop Lipstick</h3>
            <p> Skin Type: Dry Skin</p>
              <div class="rate">
              <h4>₹ 123</h4><p><a>&#9733;</a>5.0 (200 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>
        <div class="product" data-skin="Dry" data-makeup="Eyes" data-color="Coral">
          <div class="card">
            <img src="./src/images/coral_eyeshadow.png" alt="Face Wash">
            <h3>Shedella Eyeshadow</h3>
            <p> Skin Type: Dry Skin</p>
              <div class="rate">
              <h4>₹ 499</h4><p><a>&#9733;</a>9.3 (794 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

        <div class="product" data-skin="Oily" data-makeup="Eyes" data-color="Pink">
          <div class="card">
            <img src="./src/images/pink_eyeShadow.png" alt="Face Wash">
            <h3>Rose Blush Eyeshadow</h3>
            <p> Skin Type: Oily</p>
              <div class="rate">
              <h4>₹ 450</h4><p><a>&#9733;</a>3.8 (424 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

            <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Coral">
          <div class="card">
            <img src="./src/images/rosegold_2.png" alt="Face Wash">
            <h3>Mac Lipstick</h3>
            <p> Skin Type: Dry Skin</p>
              <div class="rate">
              <h4>₹ 199</h4><p><a>&#9733;</a>3.9 (218 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

        <div class="product" data-skin="Dry" data-makeup="Lips" data-color="Brown">
          <div class="card">
            <img src="./src/images/shop_card_11.png" alt="Face Wash">
            <h3>Plum Lipstick</h3>
            <p> Skin Type: Dry Skin</p>
              <div class="rate">
              <h4>₹ 289</h4><p><a>&#9733;</a>9.9 (414 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

        <div class="product" data-skin="Normal" data-makeup="Eyes" data-color="Black">
          <div class="card">
            <img src="./src/images/eyeliner_2.png" alt="Face Wash">
            <h3>Farmasi Eye pencil</h3>
            <p> Nail Type: Normal</p>
              <div class="rate">
              <h4>₹ 199</h4><p><a>&#9733;</a>3.9 (234 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

        <div class="product" data-price="299" data-makeup="Face" data-skin="Normal">
          <div class="card">
            <img src="./src/images/shop_card_1.png" alt="Face Wash">
            <h3>NYX Face Wash</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 310</h4><p><a>&#9733;</a>6.9 (514 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

        <div class="product" data-price="450" data-makeup="Face" data-skin="Oily">
          <div class="card">
            <img src="./src/images/shop_card_2.png" alt="Moisturizer">
            <h3>Vilvah Moisturizer</h3>
            <p>Skin Type: Oily</p>
              <div class="rate">
             <h4>₹ 450</h4><p><a>&#9733;</a>4.9 (144 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="150" data-makeup="Face" data-skin="Dry">
          <div class="card">
            <img src="./src/images/shop_card_3.png" alt="Cleanser">
            <h3>Pure Cleanser</h3>
            <p>Skin Type: Dry</p>
              <div class="rate">
              <h4>₹ 150</h4><p><a>&#9733;</a>2.9 (224 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

            <div class="product" data-price="600" data-makeup="Face" data-skin="Normal">
          <div class="card">
            <img src="./src/images/shop_card_7.png" alt="Sunscreen">
            <h3>Nivea Sunscreen</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 600</h4><p><a>&#9733;</a>3.9 (314 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Hair" data-skin="Normal" data-color="Brown">
          <div class="card">
            <img src="./src/images/brown_haircolor.png" alt="Sunscreen">
            <h3>Nisha Hair Color</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 600</h4><p><a>&#9733;</a>5.9 (514 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Face" data-skin="Normal">
          <div class="card">
            <img src="./src/images/shop_card_5.png" alt="Sunscreen">
            <h3>Organic Sunscreen</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 650</h4><p><a>&#9733;</a>3.9 (314 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="299" data-makeup="Nails" data-skin="Normal">
          <div class="card">
            <img src="./src/images/Nail_Art_set.png" alt="Face Wash">
            <h3>Nail Art Kit</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 499</h4><p><a>&#9733;</a>7.0 (514 Ratings)</p>
            </div>
            <button>Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Face" data-skin="Normal">
          <div class="card">
            <img src="./src/images/shop_card_8.png" alt="Sunscreen">
            <h3>Lorel Sunscreen</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 666</h4><p><a>&#9733;</a>6.3 (844 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="450" data-makeup="Nails" data-skin="Oily">
          <div class="card">
            <img src="./src/images/Nail_Set.png" alt="Moisturizer">
            <h3>Nail Sets</h3>
            <p>Skin Type: Oily</p>
              <div class="rate">
              <h4>₹ 450</h4><p><a>&#9733;</a>4.9 (314 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        
        <div class="product" data-price="600" data-makeup="Face" data-skin="Normal">
          <div class="card">
            <img src="./src/images/shop_card_6.png" alt="Sunscreen">
            <h3>Lotus Sunscreen</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 433</h4><p><a>&#9733;</a>3.3 (344 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="450" data-makeup="Nails" data-skin="Oily" data-color="Black">
          <div class="card">
            <img src="./src/images/black_nailpolish.png" alt="Moisturizer">
            <h3>Maybeline Nailpolish</h3>
            <p>Skin Type: Oily</p>
              <div class="rate">
              <h4>₹ 243</h4><p><a>&#9733;</a>2.3 (244 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Eyes" data-skin="Normal" data-color="Black">
          <div class="card">
            <img src="./src/images/eyeconic_kajal.png" alt="Sunscreen">
            <h3>Lakme EyeConic Kajal</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 299</h4><p><a>&#9733;</a>6.9 (614 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="150" data-makeup="Nails" data-skin="Dry">
          <div class="card">
            <img src="./src/images/nail_remover.png" alt="Cleanser">
            <h3>Latex Nail Remover</h3>
            <p>Skin Type: Dry</p>
              <div class="rate">
              <h4>₹ 180</h4><p><a>&#9733;</a>3.0 (140 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Eyes" data-skin="Normal" data-color="Black">
          <div class="card">
            <img src="./src/images/eyelash_kit.png" alt="Sunscreen">
            <h3>EyeLash kit</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 899</h4><p><a>&#9733;</a>6.9 (684 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

            <div class="product" data-price="600" data-makeup="Face" data-skin="Normal" data-color="Coral">
          <div class="card">
            <img src="./src/images/facial_scrub.png" alt="Sunscreen">
            <h3>VitaminC Facial Scrub</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 500</h4><p><a>&#9733;</a>6.9 (219 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Eyes" data-skin="Normal" data-color="Black">
          <div class="card">
            <img src="./src/images/eyebrow_pencil.png" alt="Sunscreen">
            <h3>Eyebrow Pencil</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 454</h4><p><a>&#9733;</a>4.3 (844 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

         <div class="product" data-price="600" data-makeup="Lips" data-skin="Normal" data-color="Coral">
          <div class="card">
            <img src="./src/images/lip_liner.png" alt="Sunscreen">
            <h3>NYX Lip Liner</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 450</h4><p><a>&#9733;</a>5.1 (314 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Eyes" data-skin="Normal" data-color="Black">
          <div class="card">
            <img src="./src/images/Maskara.png" alt="Sunscreen">
            <h3>Maybeline Maskara</h3>
            <p>Skin Type: Normal</p>
              <div class="rate">
              <h4>₹ 600</h4><p><a>&#9733;</a>5.9 (274 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

           <div class="product" data-price="600" data-makeup="Face" data-skin="Normal" data-color="Coral">
          <div class="card">
            <img src="./src/images/coral_cream.png" alt="Sunscreen">
            <h3>Medicube Jelly Cream</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 600</h4><p><a>&#9733;</a>4.4 (414 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Eyes" data-skin="Normal" data-color="Red">
          <div class="card">
            <img src="./src/images/red_eyeshadow.png" alt="Sunscreen">
            <h3>Colorpop Eyeshadow</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 600</h4><p><a>&#9733;</a>1.1 (114 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

              <div class="product" data-price="600" data-makeup="Nails" data-skin="Normal" data-color="Coral">
          <div class="card">
            <img src="./src/images/coral_NailPolish.png" alt="Sunscreen">
            <h3>ORLY Nailpolish</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 129</h4><p><a>&#9733;</a>6.9 (314 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Face" data-skin="Normal" data-color="Red">
          <div class="card">
            <img src="./src/images/red_cheek.png" alt="Sunscreen">
            <h3>Sheglam Cheek Blush</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 290</h4><p><a>&#9733;</a>2.8 (114 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

          <div class="product" data-price="600" data-makeup="Eyes" data-skin="Normal" data-color="Purple">
          <div class="card">
            <img src="./src/images/purple_eyeshadow.png" alt="Sunscreen">
            <h3>Lilac Eyeshadow</h3>
            <p>Skin Type: Normal</p>
            <div class="rate">
              <h4>₹ 666</h4><p><a>&#9733;</a>5.3 (444 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Lips" data-skin="Normal" data-color="Pink">
          <div class="card">
            <img src="./src/images/rose_lipbalm.png" alt="Sunscreen">
            <h3>Homemade Lip Balm</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 200</h4><p><a>&#9733;</a>4.9 (124 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Eyes" data-skin="Normal" data-color="Brown">
          <div class="card">
            <img src="./src/images/brown_eyeshadow.png" alt="Sunscreen">
            <h3>Nykka Eyeshadow</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 666</h4><p><a>&#9733;</a>4.3 (324 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        
        <div class="product" data-price="600" data-makeup="Hair" data-skin="Normal" data-color="Purple">
          <div class="card">
            <img src="./src/images/Hair_Seruml.png" alt="Sunscreen">
            <h3>Wepink Hair Serum</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 600</h4><p><a>&#9733;</a>4.9 (414 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Hair" data-skin="Normal" data-color="Brown">
          <div class="card">
            <img src="./src/images/indhulekka_oil.png" alt="Sunscreen">
            <h3>indhulekka Hair Oil</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 999</h4><p><a>&#9733;</a>9.9 (894 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Nails" data-skin="Normal" data-color="Purple">
          <div class="card">
            <img src="./src/images/purple_nailpolish.png" alt="Sunscreen">
            <h3>RISQUE Nailpolish</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 199</h4><p><a>&#9733;</a>4.9 (264 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Face" data-skin="Normal" data-color="Brown">
          <div class="card">
            <img src="./src/images/brown_foundation.png" alt="Sunscreen">
            <h3>MAC Foundation</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 666</h4><p><a>&#9733;</a>6.3 (244 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

           <div class="product" data-price="600" data-makeup="Hair" data-skin="Normal" data-color="Purple">
          <div class="card">
            <img src="./src/images/Hair_Oil.png" alt="Sunscreen">
            <h3>Moroccan Hair Oil</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 630</h4><p><a>&#9733;</a>9.9 (814 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Nails" data-skin="Normal" data-color="Brown">
          <div class="card">
            <img src="./src/images/brown_nailpolish.png" alt="Sunscreen">
            <h3>Sienna Nail Polish</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 190</h4><p><a>&#9733;</a>3.9 (294 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Hair" data-skin="Normal" data-color="Purple">
          <div class="card">
            <img src="./src/images/shampoo.png" alt="Sunscreen">
            <h3>Elvive Hair Shampoo</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 666</h4><p><a>&#9733;</a>6.3 (844 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Face" data-skin="Normal" data-color="Brown">
          <div class="card">
            <img src="./src/images/powder_foundation.png" alt="Sunscreen">
            <h3>Powder Foundation</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 966</h4><p><a>&#9733;</a>3.3 (344 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

        <div class="product" data-price="600" data-makeup="Hair" data-skin="Normal" data-color="Purple">
          <div class="card">
            <img src="./src/images/Rosemary_Water.png" alt="Sunscreen">
            <h3>RoseMary Water</h3>
            <p>Skin Type: Normal</p>
             <div class="rate">
              <h4>₹ 566</h4><p><a>&#9733;</a>6.3 (644 Ratings)</p>
            </div>
            <button class="quick-view">Quick View</button>
          </div>
        </div>

       
        
        <div class="no-stock-message"> <br>
          <br>
          <img src="./src/images/java-logo.png" alt="No products" width="100" height="100" style="opacity: 0.5;" />
          <h3>Sorry! We couldn't find no more products here.</h3><br>
          <p>Try one of these categories</p>
        </div>
        
        
      </div>
    </div>
  <!-- </div> -->
</section>

</main>

<!--filter section ends-->

<!--footer section starts-->


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
        <p><a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank"><i class="bi bi-envelope-fill">
            </i>tealluxe@gmail.com</a></p>
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


<!--footer section ends-->

  <script src="./js/script.js"></script>


</body>

</html>


