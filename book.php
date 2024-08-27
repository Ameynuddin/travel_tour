<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

    <!-- header section -->
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

    <!-- heading -->
    <div class="heading" style="background:url(images/header-bg-3.jpg) repeat">
        <h1>Booking</h1>
    </div>

    <!-- booking -->
    <section class="booking">
        <h1 class="heading-title">Book your trip!</h1>
        <form action="book_form.php" method="POST" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name : </span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email : </span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone : </span>
                    <input type="number" placeholder="enter your phone" name="phone">
                </div>
                <div class="inputBox">
                    <span>address : </span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>Destination: </span>
                    <input type="text" placeholder="enter place to visit" name="destination">
                </div>
                <div class="inputBox">
                    <span>number of pax : </span>
                    <input type="number" placeholder="enter number of guests" name="pax">
                </div>
                <div class="inputBox">
                    <span>arrival date : </span>
                    <input type="date" name="arrival">
                </div>
                <div class="inputBox">
                    <span>departure date : </span>
                    <input type="date" name="departure">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="booking">
        </form>
    </section>

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