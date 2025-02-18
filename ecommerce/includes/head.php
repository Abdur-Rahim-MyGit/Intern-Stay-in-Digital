<?php require 'conn.php' ?>

<!DOCTYPE html>
<html lang="en">


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


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Stay in Digital</title>
    <!-- <link rel="icon" href="img/favicon.png" /> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/lightslider.min.css" />
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/price_rangs.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body >
    <style>
        h3{
            font-weight:"900";
        }
    </style>

    <header  class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                   
                    <nav   class="navbar navbar-expand-lg navbar-light">
                        <a data-aos="fade-up" class="navbar-brand" href="/ecommerce">
                            <!-- <img src="img/logo.png" alt="logo" /> -->
                             <br>   <br>
                             <h2  class="mylogo">Stay-In-Digital</h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <style>
                            a{
                                /* font-weight: 600!important; */
                            }
                        </style>
                        <div  data-aos="fade-down" class="mylogo collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/ecommerce">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="category.php">Products</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="Refurbished.php">Refurbished Products </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact us</a>
                                </li>
                                
                            </ul>
                        </div>
                        <style>
                        .mylogo{
                            color: #042004de;
                            font-family: "Poppins", sans-serif;
                            font-size: 36px;
                            text-transform: capitalize;
                            font-weight: 900!important;
                            line-height: 72px;
                        }
                    </style>
                        <div class="hearer_icon d-flex">
                            <?php
                                $mail = '';
                                if (isset($_SESSION['email'])){
                                    $mail = $_SESSION["email"];
                                }
                                $name= '';

                                $query = 'SELECT * FROM users';
                                $result = mysqli_query($con, $query);
                                while($row = mysqli_fetch_array($result)){
                                    if($row['email'] == $mail){
                                        $name = $row['first_name'] . " " . $row['last_name'];
                                    }
                                }

                            if (isset($_SESSION['email'])) {

                                echo '
                                    <div style="display: flex; align-items: center;">
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                '.$name.'
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_3">
                                                <a class="dropdown-item" href="allorders.php">My Orders</a>
                                                <a class="dropdown-item" href="tracking.php">tracking</a>
                                                <a class="dropdown-item" href="scripts/logout_script.php">Logout</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="cart.php" id="navbarDropdown3">
                                            <i class="fas fa-cart-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    ';
                            } else {
                                echo '<div class="nav-item">
                                        <a href="login.php"><button class="nav-link custom">Login</button></a>
                                    </div>';
                                echo '<div class="nav-item">
                                        <a href="register.php"><button class="nav-link custom">Sign Up</button></a>
                                    </div>';
                            }

                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>