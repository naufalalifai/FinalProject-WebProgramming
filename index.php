<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik NARRAYA</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- css file link  -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <header class="header fixed-top">

        <div class="container">

            <div class="row align-items-center justify-content-between">

                <a href="index.php#home" class="logo">Klinik<span>NARRAYA</span></a>

                <nav class="nav">
                    <a href="index.php#home">home</a>
                    <a href="index.php#about">about us</a>
                    <a href="index.php#services">services</a>
                    <a href="index.php#doctors">doctors</a>
                    <a href="index.php#reviews">reviews</a>
                    <a href="index.php#gallery">gallery</a>
                </nav>
                <a href="index.php#contact" class="link-btn">make appointment</a>

                <div id="menu-btn" class="fas fa-bars"></div>

            </div>

        </div>

    </header>

    <section class="home" id="home">

        <div class="container">

            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>the beginning of your healthy life</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium itaque, quasi aliquam alias
                        tempora voluptatibus.</p>
                    <a href="index.php#contact" class="link-btn">make appointment</a>
                </div>
            </div>

        </div>

    </section>

    <section class="about" id="about">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>

                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident
                        ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident.
                        Aperiam, officiis!</p>
                </div>

            </div>

        </div>

    </section>

    <section class="services" id="services">

        <h1 class="heading">our services</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>consultation</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>general check up</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>vaccination</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>skin care</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
            </div>

        </div>

    </section>

    <section class="doctors" id="doctors">

        <h1 class="heading"> Available Doctors </h1>
        <div class="box-container container">

            <div class="box">

                <img src="images/doc-1.png" alt="">


                <h3>DR. dr. Stephany Red, Sp.A (K)</h3>
                <span>Pediatrician</span>
            </div>

            <div class="box">

                <img src="images/doc-2.png" alt="">


                <h3>dr. Christie Amanda, Sp.KK</h3>
                <span>Dermatologist</span>
            </div>

            <div class="box">

                <img src="images/doc-3.png" alt="">


                <h3>dr. Melinda McDoug, Sp.A</h3>
                <span>Pediatrician</span>
            </div>

        </div>

    </section>

    <section class="reviews" id="reviews">

        <h1 class="heading"> Reviews </h1>
        <div class="box-container container">

            <div class="box">

                <img src="images/cus-1.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, animi recusandae! Corrupti nesciunt explicabo
                    mollitia!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Stephany Red</h3>
                <span>Satisfied Customers</span>
            </div>

            <div class="box">

                <img src="images/cus-2.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, animi recusandae! Corrupti nesciunt explicabo
                    mollitia!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
                <h3>Christie Amanda</h3>
                <span>Satisfied Customers</span>
            </div>

            <div class="box">

                <img src="images/cus-3.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, animi recusandae! Corrupti nesciunt explicabo
                    mollitia!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Melinda McDoug</h3>
                <span>Satisfied Customers</span>
            </div>

        </div>

    </section>

    <section class="gallery" id="gallery">
        <div id="img" class="carousel slide" data-ride="carousel">

            <ul class="carousel-indicators">
                <li data-target="#img" data-slide-to="0" class="active"></li>
                <li data-target="#img" data-slide-to="1"></li>
                <li data-target="#img" data-slide-to="2"></li>
                <li data-target="#img" data-slide-to="3"></li>
                <li data-target="#img" data-slide-to="4"></li>
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/gallery0.jpg" alt="" width="550" height="250">
                </div>
                <div class="carousel-item">
                    <img src="images/gallery1.jpg" alt="" width="550" height="250">
                </div>
                <div class="carousel-item">
                    <img src="images/gallery2.jpg" alt="" width="550" height="250">
                </div>
                <div class="carousel-item">
                    <img src="images/gallery3.jpg" alt="" width="550" height="250">
                </div>
                <div class="carousel-item">
                    <img src="images/gallery4.jpg" alt="" width="550" height="250">
                </div>
            </div>

            <a class="carousel-control-prev" href="#img" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#img" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <section class="contact" id="contact">

        <h1 class="heading">make appointment</h1>
        <div class="content text-center">
            <a href="login.php" class="link-btn">login here</a>
        </div>


    </section>



    <section class="footer">

        <div class="box-container container">

            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-phone"></i> (0271) 999999 </p>
                <p> <i class="fab fa-whatsapp"></i> 081999999999 </p>
                <p> <i class="fas fa-envelope"></i> kliniknarraya@gmail.com </p>
                <p> <i class="fas fa-map-marker-alt"></i> solo, indonesia - 57155 </p>
            </div>


            <div class="box">

                <h3>opening hours</h3>
                <p> <i class="fas fa-clock"></i> 10:00am to 18:00pm </p>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-youtube"></i> youtube </a>
            </div>

        </div>

        <div class="credit"> &copy; copyright @
            <?php echo date('Y'); ?> by <span>Naufal Alif</span>
        </div>

    </section>

    <!-- custom js file link  -->
    <script src="js/index_script.js"></script>
</body>

</html>