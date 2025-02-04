<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/main.css">

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>
<?php include 'header.php'; ?>

<!-- Home section starts -->



<!-- Home section starts -->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="packages.php" class="btn"> discover more </a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="packages.php" class="btn"> discover more </a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="packages.php" class="btn"> discover more </a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>

<!-- Services section starts -->

<section class="services">
    <h1 class="heading-title"> our services </h1>

    <div class="box-container">
        <div class="box">
            <img src="images/adventure.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/tour.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/trekking.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/camp-fire.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/off-road.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images/camping.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section>

<!-- Services section ends -->


<!-- home about section start -->

<section class="home-about">
    <div class="image">
        <img src="images/home-about.jpeg" alt="Description of the image">
    </div>

    <div class="content">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum nobis doloremque cupiditate reprehenderit quo repudiandae quas cumque quam voluptatibus explicabo, illum quia quaerat libero dolore praesentium magnam sapiente natus eos porro modi quidem fuga et ea.</p>
        <a href="about.php" class="btn">Read More</a>    
    </div>
</section>


<!-- home about section ends -->


<!-- home package section start -->

<section class="home-packages">
    <h1 class="heading-title"> our packages </h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/pkg1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, accusamus?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/pkg2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, accusamus?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/pkg3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, accusamus?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>

    <div class="load-more"> <a href="package.php" class="btn"> load more </a> </div>
</section>

<!-- home package section ends -->


<!-- home offer section start -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam laboriosam natus placeat accusantium perspiciatis rerum molestias eum aliquam illo unde.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!-- home offer section ends -->


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

<?php include 'footer.php'; ?>
</body>
</html>