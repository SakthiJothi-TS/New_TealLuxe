<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "tealluxe";

$connect = mysqli_connect($host, $user, $pass, $dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Only fetch active products
$sql = "SELECT * FROM products WHERE status = 'active'";
$result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beauty Admin Dashboard</title>
  <link rel="stylesheet" href="./css/dashboard.css">
</head>

<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="#" class="nav-link active" data-tab="dashboard">Dashboard</a>
    <a href="#" class="nav-link" data-tab="products">Products</a>
    <a href="#" class="nav-link" data-tab="orders">Orders</a>
    <a href="#" class="nav-link" data-tab="customers">Customers</a>
    <a href="#" class="nav-link" data-tab="settings">Settings</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">

    <!-- Dashboard Tab -->
    <div id="dashboard" class="tab-pane active">
      <h2>Dashboard Overview</h2><br>
      <div class="row">
        <div class="box">
          <h5>Total Products</h5>
          <p>49</p>
        </div>
        <div class="box">
          <h5>Orders</h5>
          <p>22</p>
        </div>
        <div class="box">
          <h5>Revenue</h5>
          <p>₹20,000</p>
        </div>
      </div>
    </div>

    <!-- Products Tab -->
    <div id="products" class="tab-pane">
      <h2>Products</h2><br>
      <div class="products">

        <!-- Add Product Card -->
        <div class="product add-product-card">
          <div class="card" onclick="location.href='product.php'">
            <div style="text-align: center;">
              <img src="./src/images/TL_Logo.png" alt="Add Product" style="width: 60px; height: 60px; margin-bottom: 10px;">
              <h4 style="font-size: 20px; font-weight: bold; text-align: center">
                <span style="font-size: 80px; font-weight: bold; text-align: center">+</span> Add New Product
              </h4>
            </div>
          </div>
        </div>

        <!-- Dynamic Product Cards -->
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <div class="product" data-price="<?= $row['price'] ?>" data-skin="<?= $row['skin_type'] ?>">
            <div class="card">
              <img src="uploads/<?= $row['image'] ?>" alt="<?= $row['name'] ?>" width="240" height="240">
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
              <a href="edit.php?id=<?= $row['id'] ?>" class="btn-warning"><button>Edit</button></a>
              <a href="delete.php?id=<?= $row['id'] ?>" class="btn-danger"><button>Delete</button></a>
            </div>
          </div>
        <?php endwhile; ?>

      </div>
    </div>

    <?php mysqli_close($connect); ?>

  </div>

  <!-- Tab Navigation Script -->
  <script>
    const links = document.querySelectorAll('.nav-link');
    const tabs = document.querySelectorAll('.tab-pane');

    links.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        links.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
        tabs.forEach(tab => tab.classList.remove('active'));
        const target = this.getAttribute('data-tab');
        document.getElementById(target).classList.add('active');
      });
    });
  </script>

</body>

</html>
