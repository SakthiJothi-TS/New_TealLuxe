<!DOCTYPE html>
<html>
<head>
  <title>Product View</title>
  <link rel="stylesheet" href="./css/view.css">
</head>
<body>

<div class="product-container">
  
  <div class="product-image">
    <img id="main-img" src="./src/images/red_eyeshadow.png" alt="Main Image">
    
    <div class="side-images">
        
      <img src="./src/images/red_eyeshadow.png" alt="Red Eyeshadow"
           onclick="changeProduct(this)"
           data-title="Colorpop Eyeshadow"
           data-skin="Normal"
           data-price="600"
           data-rating="1.1"
           data-name="Eyeshadows">
           
      <img src="./src/images/purple_eyeshadow.png" alt="Purple Eyeshadow"
           onclick="changeProduct(this)"
           data-title="Lilac Eyeshadow"
           data-skin="Dry"
           data-price="666"
           data-rating="5.3"
           data-name="Glam Eyes">
           
      <img src="./src/images/pink_eyeShadow.png" alt="Pink Eyeshadow"
           onclick="changeProduct(this)"
           data-title="Rose Blush Eyeshadow"
           data-skin="Oily"
           data-price="450"
           data-rating="3.8"
           data-name="Blush Pop">
    </div>
  </div>

  <div class="product-details">
    <h1 id="product-name">Eyeshadows</h1>
    <h4 id="product-title">Colorpop Eyeshadow</h4>
    <p id="product-skin">Skin Type: Normal</p>
    <p class="price" id="product-price">₹ 600</p>
    <p id="product-rating">Rating: &#9733; 1.1 (114 Ratings)</p>
  </div>

</div>

<script>
  function changeProduct(el) {
    document.getElementById("main-img").src = el.src;
    document.getElementById("product-title").innerText = el.dataset.title;
    document.getElementById("product-skin").innerText = "Skin Type: " + el.dataset.skin;
    document.getElementById("product-price").innerText = "₹ " + el.dataset.price;
    document.getElementById("product-rating").innerHTML = "Rating: &#9733; " + el.dataset.rating + " (114 Ratings)";
    document.getElementById("product-name").innerText = el.dataset.name;
  }
</script>

</body>
</html>
