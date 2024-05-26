<?php

define('TITLE', "Login");
include 'assets/layouts/header.php';

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
                <option>All Categories</option>
                <option>Business</option>                     
                <option>Digital Marketing</option>
                <option>Graphics Design</option>
                <option>Music and Audio</option>
                <option>Lifestyle</option>
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
        <div class="products-row">
            <a href="index.php" class="cell-more-button">
              <span class="button-text">View Details</span>
            </a>
            <div class="product-cell image">
              <img src="ProdImg/p1.png" alt="product">
              <span>Ocean</span>
            </div>
          <div class="product-cell category"><span class="cell-label">Category:</span>Furniture</div>
          <div class="product-cell sales"><span class="cell-label">Sales:</span>11</div>
          <div class="product-cell price"><span class="cell-label">Price:</span>$560</div>
        </div>
        <div class="products-row">
            <a href="index.php" class="cell-more-button">
              <span class="button-text">View Details</span>
            </a>
            <div class="product-cell image">
              <img src="https://images.unsplash.com/photo-1484154218962-a197022b5858?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8a2l0Y2hlbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="product">
              <span>Lou</span>
            </div>
            <div class="product-cell category"><span class="cell-label">Category:</span>Furniture</div>
          <div class="product-cell sales"><span class="cell-label">Sales:</span>11</div>
          <div class="product-cell price"><span class="cell-label">Price:</span>$560</div>
        </div>
        <div class="products-row">
            <a href="index.php" class="cell-more-button">
              <span class="button-text">View Details</span>
            </a>
            <div class="product-cell image">
              <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=900&q=60" alt="product">
              <span>Yellow</span>
            </div>
            <div class="product-cell category"><span class="cell-label">Category:</span>Furniture</div>
          <div class="product-cell sales"><span class="cell-label">Sales:</span>11</div>
          <div class="product-cell price"><span class="cell-label">Price:</span>$560</div>
        </div>
        <div class="products-row">
            <a href="index.php" class="cell-more-button">
              <span class="button-text">View Details</span>
            </a>
            <div class="product-cell image">
              <img src="https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YmVkcm9vbXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="product">
              <span>Dreamy</span>
            </div>
            <div class="product-cell category"><span class="cell-label">Category:</span>Furniture</div>
          <div class="product-cell sales"><span class="cell-label">Sales:</span>11</div>
          <div class="product-cell price"><span class="cell-label">Price:</span>$560</div>
        </div>
        <div class="products-row">
            <a href="index.php" class="cell-more-button">
              <span class="button-text">View Details</span>
            </a>
            <div class="product-cell image">
              <img src="https://images.unsplash.com/photo-1554995207-c18c203602cb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aW50ZXJpb3J8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="product">
              <span>Boheme</span>
            </div>
            <div class="product-cell category"><span class="cell-label">Category:</span>Furniture</div>
          <div class="product-cell sales"><span class="cell-label">Sales:</span>11</div>
          <div class="product-cell price"><span class="cell-label">Price:</span>$560</div>
        </div>
        <div class="products-row">
            <a href="index.php" class="cell-more-button">
              <span class="button-text">View Details</span>
            </a>
            <div class="product-cell image">
              <img src="https://images.unsplash.com/photo-1507652313519-d4e9174996dd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="product">
              <span>Sky</span>
            </div>
            <div class="product-cell category"><span class="cell-label">Category:</span>Furniture</div>
          <div class="product-cell sales"><span class="cell-label">Sales:</span>11</div>
          <div class="product-cell price"><span class="cell-label">Price:</span>$560</div>
        </div>
        <div class="products-row">
            <a href="index.php" class="cell-more-button">
              <span class="button-text">View Details</span>
            </a>
            <div class="product-cell image">
              <img src="https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="product">
              <span>Midnight</span>
            </div>
            <div class="product-cell category"><span class="cell-label">Category:</span>Furniture</div>
          <div class="product-cell sales"><span class="cell-label">Sales:</span>11</div>
          <div class="product-cell price"><span class="cell-label">Price:</span>$560</div>
        </div>
        <div class="products-row">
            <a href="index.php" class="cell-more-button">
              <span class="button-text">View Details</span>
            </a>
            <div class="product-cell image">
              <img src="https://images.unsplash.com/photo-1554995207-c18c203602cb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aW50ZXJpb3J8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="product">
              <span>Boheme</span>
            </div>
            <div class="product-cell category"><span class="cell-label">Category:</span>Furniture</div>
          <div class="product-cell sales"><span class="cell-label">Sales:</span>11</div>
          <div class="product-cell price"><span class="cell-label">Price:</span>$560</div>
        </div>
      </div>
    </div>
  </div>



<?php
include 'assets/layouts/footer.php';
?>
