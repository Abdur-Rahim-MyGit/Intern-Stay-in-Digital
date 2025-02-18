<?php
require 'includes/conn.php';
require 'includes/is_added_to_cart.php';
session_start();
require "./includes/head.php";

// if(!isset($_SESSION['email'])){
//     echo "<script> location.href='/ecommerce'; </script>";
//     exit();
// }
?>

<?php
$query = 'SELECT * FROM `products`';

$result = mysqli_query($con, $query);

$sum = 0;

while ($row = mysqli_fetch_array($result)) {
    $sum++;
}


?>


<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Our Products</h2>
                        <p>Home <span>-</span> Buy Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cat_product_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Browse Categories</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li><a href="#">Smartphones</a></li>
                                <li><a href="#">Laptops</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Refurbished Devices</a></li>
                                <li><a href="#">Tablets & iPads</a></li>
                                <li><a href="#">Gaming Consoles</a></li>
                                <li><a href="#">Smartwatches</a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="left_widgets p_filter_widgets price_rangs_aside">
                        <div class="l_w_title">
                            <h3>Price Filter</h3>
                        </div>
                        <div class="widgets_inner">
                            <div class="range_item">
                                <input type="text" class="js-range-slider" value="" />
                                <div class="d-flex">
                                    <div class="price_text">
                                        <p>Price :</p>
                                    </div>
                                    <div class="price_value d-flex justify-content-center">
                                        <input type="text" class="js-input-from" id="amount" readonly />
                                        <span>to</span>
                                        <input type="text" class="js-input-to" id="amount" readonly />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9">
    <div class="row">
        <div class="col-lg-12">
            <div class="product_top_bar d-flex justify-content-between align-items-center">
                <div class="single_product_menu">
                    <p><span><?php echo $sum ?> </span> Product Found</p>
                </div>
                <div class="single_product_menu d-flex">
                    <h5>sort by :</h5>
                    <form method="GET" action="">
                        <select name="sort" onchange="this.form.submit()">
                            <option value="" disabled selected>Select</option>
                            <option value="name" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'name') echo 'selected'; ?>>Name</option>
                            <option value="low_price" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'low_price') echo 'selected'; ?>>Price: Low to High</option>
                            <option value="high_price" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'high_price') echo 'selected'; ?>>Price: High to Low</option>
                        </select>
                    </form>
                </div>
                <div class="single_product_menu d-flex">
                    <h5>show :</h5>
                    <div class="top_pageniation">
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div>
                </div>
                <div class="single_product_menu d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="search" aria-describedby="inputGroupPrepend" />
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="ti-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center latest_product_inner">

    <?php
        $sort_order = "";
        if (isset($_GET['sort'])) {
            $sort_option = $_GET['sort'];
            if ($sort_option == "name") {
                $sort_order = "ORDER BY title ASC";
            } elseif ($sort_option == "low_price") {
                $sort_order = "ORDER BY price ASC";
            } elseif ($sort_option == "high_price") {
                $sort_order = "ORDER BY price DESC";
            }
        }
        
        $query = "SELECT * FROM products " . $sort_order;
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($result)) {
            echo '<div class="col-lg-4 col-sm-6">
                    <div class="single_product_item">
                        <img width="200px" src="img/product/'.$row['image'].'" alt="djwij" />
                        <div class="single_product_text">
                            <h4>'. $row['title'] .'</h4>
                            <h3>Rs. '. $row['price'] .'</h3>';
                            if(!check_if_added_to_cart($row['id'])){
                               echo '<a href="scripts/cart_add.php?id='.$row['id'].'&qty=1" class="add_cart">+ add to cart<i class="ti-heart"></i></a>';
                            } else {
                                echo '<a href="#" class="add_cart" disabled>+ add to cart<i class="ti-heart"></i></a>';
                            }
                      echo ' </div>
                    </div>
                </div>';
        }
    ?>
    </div>
</div>

        </div>
    </div>
</section>


<?php require './includes/footer.php' ?>

<script src="js/jquery-1.12.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.js"></script>

<script src="js/swiper.min.js"></script>

<script src="js/masonry.pkgd.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>

<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/stellar.js"></script>
<script src="js/price_rangs.js"></script>

<script src="js/custom.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721ac04f8bd3390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>