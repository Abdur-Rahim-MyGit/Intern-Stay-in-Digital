<?php
session_start();
?>
<?php require './includes/head.php' ?>
<?php require './includes/conn.php';
	require './includes/is_added_to_cart.php';

?>
<!-- Aniamtion -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,  // Speed of animation (1s)
    once: false,  // Animation repeats when scrolling
    mirror: true,  // Animates when scrolling up
    easing: 'ease-out-back',  // Smooth motion
  });
</script>

<!-- data-aos="fade-up" -->



.<section data-aos="slide-up" class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
			<style>
					.mypic {
						width: 100%;
						max-width: 500px; 
						display: block;
						position: relative;
						top: 90px;
						left: 30px;
						margin: 0 auto; 
					}
					.mypic01 {
						width: 100%;
						max-width: 450px; 
						display: block;
						position: relative;
						top: 60px;
						margin: 0 auto; 
					}

					</style>
                <div data-aos="fade-up-right"  class="banner_slider owl-carousel">
                    <div data-aos="fade-up-right" class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Explore Latest Mobile Phones</h1>
                                        <p>
                                            Discover the best mobile phones with cutting-edge technology.
                                            Find the perfect one for you.
                                        </p>
                                        <a href="category.php?category=mobiles" class="btn_2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img  class="mypic" src="img/banner.png" alt="Mobile Phones" />
                            </div>
                        </div>
                    </div>
                    <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Top Laptops for Every Need</h1>
                                        <p>
                                            Choose from a wide range of laptops for work, gaming, and everything in between.
                                        </p>
                                        <a href="category.php?category=laptops" class="btn_2">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
							<img class="mypic" src="img/banner01.png" alt="Mobile Phones" />
                            </div>
                        </div>
                    </div>
				
					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Affordable Electronics</h1>
										<p>Eco-friendly, budget-friendly gadgets for everyone.</p>
										<a href="category.php?category=accessories" class="btn_2">Shop Now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img class="mypic01" src="img/banners2.png" alt="Mobile Phones" />
							</div>
						</div>
					</div>

					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Latest Smartphones</h1>
										<p>Discover the newest mobile innovations at unbeatable prices.</p>
										<a href="category.php?category=smartphones" class="btn_2">Shop Now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img class="mypic"  src="img/bannerss1.png" alt="Smartphones" />
							</div>
						</div>
					</div>

					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Laptops & Accessories</h1>
										<p>Powerful laptops and essential accessories for work and play.</p>
										<a href="category.php?category=laptops" class="btn_2">Shop Now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img class="mypic"  src="img/banners4.png" alt="Laptops" />
							</div>
						</div>
					</div>

					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Gaming Consoles</h1>
										<p>Level up your gaming experience with the latest consoles.</p>
										<a href="category.php?category=gaming" class="btn_2">Shop Now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img  class="mypic01"  src="img/banners5.png" alt="Gaming Consoles" />
							</div>
						</div>
					</div>

					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Smart Wearables</h1>
										<p>Stay connected and track your fitness with smart wearables.</p>
										<a href="category.php?category=wearables" class="btn_2">Shop Now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img class="mypic01"  src="img/banners6.png" alt="Smart Wearables" />
							</div>
						</div>
					</div>

					<div class="single_banner_slider">
						<div class="row">
							<div class="col-lg-5 col-md-8">
								<div class="banner_text">
									<div class="banner_text_iner">
										<h1>Home Appliances</h1>
										<p>Upgrade your home with smart and efficient appliances.</p>
										<a href="category.php?category=appliances" class="btn_2">Shop Now</a>
									</div>
								</div>
							</div>
							<div class="banner_img d-none d-lg-block">
								<img class="mypic"  src="img/banners7.png" alt="Home Appliances" />
							</div>
						</div>
					</div>

                </div>
				<style>
					.slider-counter{
						min-width: 200px!important;
					}
					
				</style>
                <div class="slider-counter"></div>
            </div>
        </div>
    </div>
</section>

<section  data-aos="fade-up" class="bgs product_list section_padding">
	<style>
	
	</style>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="mydoc section_tittle text-center">
					<h2>Refurbished <span> Products </span></h2>
				</div>
			</div>
		</div>


		<style>
    .product-card {
    background: #fff;
    border-radius: 15px;
    transition: 0.3s;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    text-align: center;
    min-height: 400px; /* Adjust this value for uniform size */
}

.product-card:hover {
    transform: scale(1.05);
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
}

.product-img-wrapper {
    width: 100%;
    height: 220px; /* Set fixed height */
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.product-img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain; /* Ensures uniform image size */
}

.product-details {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.product-title {
    font-size: 1.1rem;
    font-weight: bold;
    color: #333;
    min-height: 50px; /* Ensures text alignment */
}

.product-price {
    font-size: 1.3rem;
    font-weight: bold;
}

.btn-custom {
    background-color: dimgray;
    color: white;
    border-radius: 15px;
    padding: 5px;
	margin: 8px;
    border: none;
    width: 100%;
}

.btn-custom:hover {
    background-color: #417741;
}
.bgs {
    background-image: url("./img/bg.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>


		<div class="row">
			<div class="col-lg-12">
				<div class="product_list_slider owl-carousel">
					<div class="single_product_list_slider">
						<div  class="row align-items-center justify-content-between">
						<?php

							$query = "SELECT * from `products`";
							$result = mysqli_query($con, $query);

							while ($row = mysqli_fetch_array($result)) {
								echo '<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
										<div class="product-card shadow-lg p-3 rounded text-center">
											<div class="product-img-wrapper">
												<img class="product-img" src="img/product/'.$row['image'].'" alt="'.$row['title'].'" />
											</div>
											<div class="product-details mt-3">
												<h5 class="product-title">'.$row['title'].'</h5>
												<h4 class="product-price text-primary">Rs. '.$row['price'].'</h4>';
												
												if (!check_if_added_to_cart($row['id'])) {
													echo '<a href="scripts/cart_add.php?id='.$row['id'].'&qty=1" class="btn btn-custom w-100"> Add to Cart </a>';
												} else {
													echo '<button class="btn btn-secondary w-100" disabled>Added to Cart</button>';
												}
										echo '</div>
										</div>
									</div>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- <section class="product_list best_seller section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="section_tittle text-center">
					<h2>Best Sellers <span>shop</span></h2>
				</div>
			</div>
		</div>
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-12">
				<div class="best_product_slider owl-carousel">
					<div class="single_product_item">
						<img src="img/product/product_1.png" alt="" />
						<div class="single_product_text">
							<h4>Quartz Belt Watch</h4>
							<h3>$150.00</h3>
						</div>
					</div>
					<div class="single_product_item">
						<img src="img/product/product_2.png" alt="" />
						<div class="single_product_text">
							<h4>Quartz Belt Watch</h4>
							<h3>$150.00</h3>
						</div>
					</div>
					<div class="single_product_item">
						<img src="img/product/product_3.png" alt="" />
						<div class="single_product_text">
							<h4>Quartz Belt Watch</h4>
							<h3>$150.00</h3>
						</div>
					</div>
					<div class="single_product_item">
						<img src="img/product/product_4.png" alt="" />
						<div class="single_product_text">
							<h4>Quartz Belt Watch</h4>
							<h3>$150.00</h3>
						</div>
					</div>
					<div class="single_product_item">
						<img src="img/product/product_5.png" alt="" />
						<div class="single_product_text">
							<h4>Quartz Belt Watch</h4>
							<h3>$150.00</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section data-aos="slide-up" class="subscribe_area section_padding">
	<div  data-aos="fade-up" class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="subscribe_area_text text-center">
					<h5>Join Our Newsletter</h5>
					<h2>Subscribe to get Updated with new offers</h2>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="enter email address" aria-label="Recipient's username" aria-describedby="basic-addon2" />
						<div class="input-group-append">
							<a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require "./includes/footer.php" ?>

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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7721abfb4f723390","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>
