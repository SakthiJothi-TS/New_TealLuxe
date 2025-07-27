<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "tealluxe";

$connect = mysqli_connect($host, $user, $pass, $dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch products
$sql = "SELECT * FROM products";
$result = mysqli_query($connect, $sql);
?>

<style>
.products {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.product {
  width: 250px;
}

.card {
  border: 1px solid #ccc;
  border-radius: 8px;
  overflow: hidden;
  padding: 15px;
  text-align: center;
  background: #fff;
}

.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.card-footer {
  margin-top: 10px;
  display: flex;
  justify-content: space-around;
}

.card-footer button {
  padding: 5px 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn-info {
  background-color: #17a2b8;
  color: #fff;
}

.btn-warning {
  background-color: #ffc107;
  color: #000;
}

.btn-danger {
  background-color: #dc3545;
  color: #fff;
}

.add-product-card .card {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 300px;
  border: 2px dashed #ccc;
  cursor: pointer;
}
</style>

<div id="products" class="tab-pane">
  <h2>Products</h2><br>
  <div class="products">

    <!-- Add Product Card -->
    <div class="product add-product-card">
      <div class="card" onclick="location.href='add_product.php'">
        <div style="text-align: center;">
          <img src="./src/images/plus_icon.png" alt="Add Product" style="width: 60px; height: 60px; margin-bottom: 10px;">
          <h3>Add Product</h3>
        </div>
      </div>
    </div>

    <!-- Dynamic Products from DB -->
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <div class="product" data-price="<?= $row['price'] ?>" data-skin="<?= $row['skin_type'] ?>">
        <div class="card">
          <img src="uploads/<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
          <h3><?= $row['name'] ?></h3>
          <p>Skin Type: <?= $row['skin_type'] ?></p>
          <div class="rate">
            <h4>₹ <?= $row['price'] ?></h4>
            <p><a>&#9733;</a> <?= $row['rating'] ?> (<?= $row['rating_count'] ?> Ratings)</p>
          </div>
          <button class="quick-view">Quick View</button>
        </div>
        <div class="card-footer">
          <a href="view.php?img=<?= $row['image'] ?>&name=<?= urlencode($row['name']) ?>&skin=<?= $row['skin_type'] ?>&price=<?= $row['price'] ?>" class="btn-info"><button>View</button></a>
          <button class="btn-warning">Edit</button>
          <button class="btn-danger">Delete</button>
        </div>
      </div>
    <?php endwhile; ?>

  </div>
</div>

<?php mysqli_close($connect); ?>




