<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

    <!-- header -->
    <section class="header">
        <a href="home.php" class="logo">Travel</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Book</a>
        </nav>

        <i id="menu-btn" class="fas fa-bars"></i>
    </section>

    <!-- home content-->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!--services -->
    <section class="services">
        <h1 class="heading-title"> Our Services</h1>
        <div class="box-container">
            <div class="box">
                <i class='fa-solid fa-mountain-sun'></i>
                <h3>Adventures</h3>
            </div>

            <div class="box">
                <i class='fas fa-map-marked-alt'></i>
                <h3>Guide</h3>
            </div>

            <div class="box">
                <i class='fa fa-gears'></i>
                <h3>trekking</h3>
            </div>
            <div class="box">
                <i class='fa-solid fa-fire-flame-curved'></i>
                <h3>Camp fire</h3>
            </div>

            <div class="box">
                <i class='fa-solid fa-road-circle-xmark'></i>
                <h3>off road</h3>
            </div>

            <div class="box">
                <i class='fas fa-campground'></i>
                <h3>camping</h3>
            </div>
        </div>
    </section>

    <!-- home-about -->
    <section class="home-about">
        <div class="image"><img src="https://images.pexels.com/photos/5735895/pexels-photo-5735895.jpeg"
                alt="Photo by Pat Whelen from Pexels"></div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, exercitationem quaerat ut fuga
                itaque eum velit natus tenetur est, eos expedita modi distinctio quas iure rem eius! Corrupti, sed
                quasi?</p>
            <a href="about.php" class="btn">Read more</a>
        </div>
    </section>
    <!-- footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Packages</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> Contact Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use></a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +1234556789></a>
                <a href="#"><i class="fas fa-phone"></i> +0123456789</a>
                <a href="#"><i class="fas fa-envelope"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-map"></i> Sabah, Malaysia</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>

        <div class="credit">Created by <span>Ameynuddin</span> | All Rights Reserved | 2024</div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>