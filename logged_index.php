<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];
    $doctor = mysqli_real_escape_string($conn, $_POST['doctor']);

    $insert = mysqli_query($conn, "INSERT INTO `appointment`(user_id, name, email, number, date, doctor) VALUES('$user_id','$name','$email','$number','$date','$doctor')") or die('query failed');

    if ($insert) {
        $message[] = 'appointment made successfully!';
    } else {
        $message[] = 'appointment failed';
    }
}

?>

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

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
        }
    }
    ?>

    <header class="header fixed-top">

        <div class="container">

            <div class="row align-items-center justify-content-between">

                <a href="logged_index.php#home" class="logo">Klinik<span>NARRAYA</span></a>

                <nav class="nav">
                    <a href="logged_index.php#home">home</a>
                    <a href="logged_index.php#about">about us</a>
                    <a href="logged_index.php#services">services</a>
                    <a href="logged_index.php#doctors">doctors</a>
                    <a href="logged_index.php#reviews">reviews</a>
                    <a href="logged_index.php#gallery">gallery</a>
                    <a href="seeappointment.php">my appointment</a>
                </nav>


                <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>
                    <div id="user-btn" class="fas fa-user"></div>
                </div>


                <div class="account-box">
                    <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                    <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
                    <a href="logout.php" class="delete-btn">logout</a>
                </div>

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
                    <a href="#contact" class="link-btn">make appointment</a>
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

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<p class="message">' . $message . '</p>';
                }
            }
            ?>
            <span>your name :</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email :</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your number :</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>appointment date :</span>
            <input type="datetime-local" name="date" class="box" required>
            <span>doctor :</span>
            <select name="doctor" class=box>
                <?php
                $query    = mysqli_query($conn, "SELECT * FROM doctor");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <option value="<?= $data['name']; ?>"><?php echo $data['name']; ?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" value="make appointment" name="submit" class="link-btn">
        </form>

    </section>

    <section class="footer">

        <div class="box-container container">

            <div class="box">
                <h3>contact info</h3>
                <p> <i class="fas fa-phone"></i> (0271) 999999 </p>
                <p> <i class="fab fa-whatsapp"></i> 081999999999 </p>
                <p> <i class="fas fa-envelope"></i> clinicnarraya@gmail.com </p>
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
    <script src="js/script.js"></script>
</body>

</html>