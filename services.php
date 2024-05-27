<?php

define('TITLE', "Products");
include 'assets/layouts/header.php';

// Sample products array (this would typically come from a database)
$products = [
    ['name' => 'Ocean', 'category' => 'Business', 'creator' => 'Arshane Lee', 'sales' => 11, 'price' => 560, 'image' => 'ProdImg/p1.png'],
    ['name' => 'Lou', 'category' => 'Digital Marketing', 'creator' => 'Arshane Lee', 'sales' => 11, 'price' => 560, 'image' => 'https://images.unsplash.com/photo-1484154218962-a197022b5858'],
    ['name' => 'Yellow', 'category' => 'Graphics Design', 'creator' => 'Arshane Lee', 'sales' => 11, 'price' => 560, 'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7'],
    ['name' => 'Yellow', 'category' => 'Music and Audio', 'creator' => 'Arshane Lee', 'sales' => 11, 'price' => 560, 'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7'],
    ['name' => 'Yellow', 'category' => 'Lifestyle', 'creator' => 'Arshane Lee', 'sales' => 11, 'price' => 560, 'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7'],  
];

// Filter products based on search query
$searchQuery = isset($_GET['search']) ? trim($_GET['search']) : '';
$filteredProducts = [];

if ($searchQuery) {
    foreach ($products as $product) {
        if (stripos($product['name'], $searchQuery) !== false || stripos($product['category'], $searchQuery) !== false || stripos($product['creator'], $searchQuery) !== false) {
            $filteredProducts[] = $product;
        }
    }
} else {
    $filteredProducts = $products;
}

?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Services Pages</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Services</span></a>
					</nav>
				</div>
			</div>
		</div>
	</section>
    <!-- End Banner Area -->

<div class="app-container">
    <div class="app-content">
      <div class="app-content-actions">
        <input class="search-bar" placeholder="Search..." type="text">
        <div class="app-content-actions-wrapper">
          <div class="filter-button-wrapper">
            <button class="action-button filter jsFilter"><span>Filter</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/></svg></button>
            <div class="filter-menu">
              <label>Category</label>
              <select>
                <option value="all-categories">All Categories</option>
                <option value="business">Business</option>                     
                <option value="digital-marketing">Digital Marketing</option>
                <option value="graphics-design">Graphics Design</option>
                <option value="music-and-audio">Music and Audio</option>
                <option value="lifestyle">Lifestyle</option>
              </select>
              <div class="filter-menu-buttons">
                <button class="filter-button reset">
                  Reset
                </button>
                <button class="filter-button apply">
                  Apply
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="products-area-wrapper gridView">
        <div class="products-header">
          <div class="product-cell image">
            Items
            <button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button>
          </div>
          <div class="product-cell category">Category<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
          <div class="product-cell sales">Sales<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
          <div class="product-cell price">Price<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
        </div>

        <?php if ($filteredProducts): ?>
            <?php foreach ($filteredProducts as $product): ?>

        <div class="products-row digital-products">
            <a href="details.php" class="cell-more-button">
              <span class="button-text">View Details</span>
            </a>
            <div class="product-cell image">
            <img src="<?= $product['image'] ?>" alt="product">
            <span><?= htmlspecialchars($product['name']) ?></span>
            </div>
          <div class="product-cell category"><span class="cell-label">Category:</span><?= htmlspecialchars($product['category']) ?></div>
          <div class="product-cell creator"><span class="cell-label">Creator:</span><?= htmlspecialchars($product['creator']) ?></div>
          <div class="product-cell sales"><span class="cell-label">Sales:</span><?= htmlspecialchars($product['sales']) ?></div>
          <div class="product-cell price"><span class="cell-label">Price:</span>$<?= htmlspecialchars($product['price']) ?></div>
        </div>
        <?php endforeach; ?>
            <?php else: ?>
                <p>No services found.</p>
            <?php endif; ?>
      </div>
    </div>
  </div>



<?php
include 'assets/layouts/footer.php';
?>
