<?php
define('TITLE', "Login");
include 'assets/layouts/header.php';

?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Products Pages</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Products</span></a>
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
                <option value="digital-products">Digital Products</option>                     
                <option value="physical-products">Physical Products</option>
                <option value="webwise-products">Made with WebWise</option>
              </select>
              <div class="filter-menu-buttons">
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
            <div class="product-cell creator">Creator<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
          <div class="product-cell sales">Sales<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
          <div class="product-cell price">Price<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
            </button></div>
        </div>
        <div class="products-row digital-products">
    <a href="details.php?image=Graduation%20Template.png&product_name=Graduation%20Template&category=Digital%20Product&creator=Arshane%20Lee&price=150" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/Graduation Template.png" alt="product">
        <span>Graduation Template</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Digital Product</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Arshane Lee</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>30</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱150</div>
</div>

<div class="products-row physical-products">
    <a href="details.php?image=TikVideo.app_7358812542086515974_6.jpeg&product_name=Key%20Chain%20(Mushroom)&category=Physical%20Product&creator=Baby%20Lyka%20Cinco&price=70" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/TikVideo.app_7358812542086515974_6.jpeg" alt="product">
        <span>Key Chain (Mushroom)</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Physical Product</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Baby Lyka Cinco</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>50</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱70</div>
</div>

<div class="products-row webwise-products">
    <a href="details.php?image=New%20Project%2013%20%5B94EA189%5D.png&product_name=White%20Tshirt&category=Made%20with%20WebWise&creator=Renz%20Castro&price=159" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/New Project 13 [94EA189].png" alt="product">
        <span>White Tshirt</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Made with WebWise</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Renz Castro</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>25</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱159</div>
</div>

<div class="products-row digital-products">
    <a href="details.php?image=p5.png&product_name=Java%20Online%20Course&category=Digital%20Product&creator=Arman%20James%20S.%20Dela%20Peña&price=399" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/p5.png" alt="product">
        <span>Java Online Course</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Digital Product</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Arman James S. Dela Peña</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>19</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱399</div>
</div>

<div class="products-row physical-products">
    <a href="details.php?image=TikVideo.app_7358812542086515974_1.jpeg&product_name=Key%20Chain%20(Octopus)&category=Physical%20Product&creator=Christine%20Tuga-on&price=50" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/TikVideo.app_7358812542086515974_1.jpeg" alt="product">
        <span>Key Chain (Octopus)</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Physical Product</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Christine Tuga-on</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>31</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱50</div>
</div>

<div class="products-row webwise-products">
    <a href="details.php?image=New%20Project%2013%20%5BC340707%5D.png&product_name=Black%20Tshirt&category=Made%20with%20WebWise&creator=Renz%20Castro&price=250" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/New Project 13 [C340707].png" alt="product">
        <span>Black Tshirt</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Made with WebWise</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Renz Castro</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>13</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱250</div>
</div>

<div class="products-row digital-products">
    <a href="details.php?image=New%20Project%2016%20%5BB84CC55%5D.png&product_name=C++%20Online%20Course&category=Digital%20Product&creator=Arman%20James%20Dela%20Peña&price=299" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/New Project 16 [B84CC55].png" alt="product">
        <span>C++ Online Course</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Digital Product</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Arman James Dela Peña</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>15</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱299</div>
</div>

<div class="products-row physical-products">
    <a href="details.php?image=TikVideo.app_7358812542086515974_5.jpeg&product_name=Key%20Chain%20(Frog)&category=Physical%20Products&creator=Baby%20Lyka%20Cinco&price=70" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/TikVideo.app_7358812542086515974_5.jpeg" alt="product">
        <span>Key Chain (Frog)</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Physical Products</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Baby Lyka Cinco</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>11</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱70</div>
</div>

<div class="products-row physical-products">
    <a href="details.php?image=p16.png&product_name=Tumbler&category=Made%20with%20WebWise&creator=Christine%20Tuga-on&price=100" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/p16.png" alt="product">
        <span>Tumbler</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Made with WebWise</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Christine Tuga-on</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>25</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱100</div>
</div>

<div class="products-row digital-products">
    <a href="details.php?image=p4.png&product_name=SQL%20Online%20Course&category=Digital%20Product&creator=Arman%20James%20Dela%20Peña&price=250" class="cell-more-button">
        <span class="button-text">View Details</span>
    </a>
    <div class="product-cell image">
        <img src="img/ProdImg/p4.png" alt="product">
        <span>SQL Online Course</span>
    </div>
    <div class="product-cell category"><span class="cell-label">Category:</span>Digital Product</div>
    <div class="product-cell creator"><span class="cell-label">Creator:</span>Arman James Dela Peña</div>
    <div class="product-cell sales"><span class="cell-label">Sales:</span>7</div>
    <div class="product-cell price"><span class="cell-label">Price:</span>₱250</div>
</div>

      </div>
    </div>
  </div>



<?php
include 'assets/layouts/footer.php';
?>
