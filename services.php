<?php
// services.php
session_start();
define('TITLE', "Products");
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
                    <a href="#">Services</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<div class="app-container">
    <div class="app-content">
        <div class="app-content-actions">
            <form method="GET" action="">
                <input class="search-bar" name="search" placeholder="Search..." type="text">
                <button type="submit">Search</button>
            </form>
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
                            <button class="filter-button reset">Reset</button>
                            <button class="filter-button apply">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Area -->
        <div class="products-area-wrapper gridView">
            <div class="products-header">
                <div class="product-cell image">Items</div>
                <div class="product-cell category">Category</div>
                <div class="product-cell sales">Sales</div>
                <div class="product-cell price">Price</div>
            </div>

            <!-- Product Rows -->
            <div class="products-row digital-marketing">
                <a href="details.php?image=6300b8c8c883ab32b858e299_craft%20design.jpg&product_name=Product%20Marketing&category=Digital%20Marketing&creator=Arshane%20Lee&price=700" class="cell-more-button">
                    <span class="button-text">View Details</span>
                </a>
                <div class="product-cell image">
                    <img src="img/ProdImg/6300b8c8c883ab32b858e299_craft design.jpg" alt="product">
                    <span>Product Marketing</span>
                </div>
                <div class="product-cell category">Digital Marketing</div>
                <div class="product-cell sales">16</div>
                <div class="product-cell price">₱700</div>
            </div>
            <!-- Add more product rows as needed -->

        </div>

        <!-- Cart Section -->
        <div class="cart-section">
            <h2>Cart</h2>
            <?php
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                echo '<table>';
                echo '<tr><th>Product Name</th><th>Price</th><th>Quantity</th></tr>';
                foreach ($_SESSION['cart'] as $item) {
                    echo '<tr>';
                    echo '<td>' . $item['product_name'] . '</td>';
                    echo '<td>₱' . $item['price'] . '</td>';
                    echo '<td>' . $item['quantity'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo '<p>Your cart is empty.</p>';
            }
            ?>
        </div>

    </div>
</div>

<?php
include 'assets/layouts/footer.php';
?>
