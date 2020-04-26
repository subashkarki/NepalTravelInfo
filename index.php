<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal travels info</title>
    <!-- =================Boostrap css ==================== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- =================Fontawesome css / js ==================== -->
    <link rel="stylesheet" href="css/all.css">
    <script src="js/all.js"></script>
    <!-- ================ main css ========================= -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <!-- ===================== Navbar open ======================= -->

        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="images/logo_white.svg" alt="Main logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="destination.php">Destination</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ===================== Navbar close ======================= -->

        <!-- ===================== Hero section open ======================= -->
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <img src="images/feature_text.svg" alt="Feature text">
                    <p>
                        Start your Himalayan trek and discover the world’s tallest mountain peak. You will be
                        surrounded
                        by some of the most beautiful landscapes, meet with friendly sherpa culture and create long
                        lastimg memories.
                    </p>
                    <a class="btn btn-light px-5 py-2" href="destination.php">Check Out This Trek Now <i
                            class="fas fa-angle-right"></i></a>
                </div>

            </div>
        </div>

        <!-- ===================== Hero section close ======================= -->


    </header>
    <main>
        <div class="dot-style">
            <img src="images/dot_style.png" alt="">
        </div>
        <section class="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h1>Our Most Popular Treks</h1>
                        <i class="fas fa-arrow-circle-left fa-2x"></i>
                        <i class="fas fa-arrow-circle-right fa-2x"></i>
                    </div>
                    <div class="col-md-3">
                        <div class="popular-trek-1">
                            <a href="AnnapurnaCircuit.php" class="tour_image">
                                <img src="images/Popular/annapurna.png" alt="Annapurna Circuit - 23 Days ">
                                <h2>Annapurna Circuit</h2>
                            </a>
                            <h3 class="trek-price">$1,599</h3>
                            <h5>Valid for 2020/05/02 departure</h5>
                            <a class="btn btn-light" href="AnnapurnaCircuit.php">View Tour <i
                                    class="fas fa-angle-right"></i>
                            </a>
                            <div class="date">
                                <i class="fas fa-clock"></i><span> 23 days</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="popular-trek-2">
                            <a href="" class="tour_image">
                                <img src="images/Popular/kathmandu.png" alt="Kathmandu Day Tour - 1 Day ">
                                <h2>Kathmandu Day Tour</h2>
                            </a>
                            <h3 class="trek-price">$69</h3>
                            <h5>Valid for 2020/05/02 departure</h5>
                            <a class="btn btn-light" href="AnnapurnaCircuit.html">View Tour <iView Tour <i
                                    class="fas fa-angle-right"></i>
                            </a>
                            <div class="date">
                                <i class="fas fa-clock"></i><span> 1 day</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="popular-trek-3">
                            <a href="" class="tour_image">
                                <img src="images/Popular/everest.png" alt="Everest Mountain Flight - 1 Day ">
                                <h2>Everest Mountain Flight</h2>
                            </a>
                            <h3 class="trek-price">$299</h3>
                            <h5>Valid for 2020/05/02 departure</h5>
                            <a class="btn btn-light" href="AnnapurnaCircuit.html">View Tour <iView Tour <i
                                    class="fas fa-angle-right"></i>
                            </a>
                            <div class="date">
                                <i class="fas fa-clock"></i><span> 1 day</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-2">
            <div class="content text-center">
                <h1>Our Trekking Destinations</h1>
                <p>We organise treks across some of the Himalayas most beautiful regions!</p>
            </div>
            <div class="container text-center">
                <div class="trek-destination d-flex flex-md-row flex-wrap justify-content-center">
                    <div class="destination-image">
                        <a href="trek-in-nepal.php">
                            <img src="images/alltrek/nepal.png" alt="Nepal">
                            <h1>Trek in Nepal</h1>
                        </a>
                    </div>
                    <div class="destination-image">
                        <a href="">
                            <img src="images/alltrek/bhutan.png" alt="Bhutan">
                            <h1>Trek in Bhutan</h1>
                        </a>
                    </div>
                    <div class="destination-image">
                        <a href="">
                            <img src="images/alltrek/india.png" alt="India">
                            <h1>Trek in India</h1>
                        </a>
                    </div>
                    <div class="destination-image">
                        <a href="">
                            <img src="images/alltrek/tibet.png" alt="Tibet">
                            <h1>Trek in Tibet</h1>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="dot-style1">
            <img src="images/dot_style.png" alt="">
        </div>
        <section class="section-3">
            <div class="content text-center">
                <h1>Why Book With Us?</h1>
                <p>Here are some of the reasons you should plan your trek with us!</p>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="content">
                            <img src="images/icons_wallet.svg" alt="Wallet">
                            <h1>Affordable Tours</h1>
                            <p>We have carried out extensive market research to make sure that we provide you with the
                                best
                                possible prices on all trekking tours.
                                Our team consistently use a variety of quality control methods ensuring that we never
                                compromise on service whilst being affordable!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="content">
                            <img src="images/icons_man.svg" alt="Man">
                            <h1>Fully Customizable Treks</h1>
                            <p>Are you going to be in a group of people?
                                Would you like to customize your trek?
                                We are really flexible in catering towards your needs. Whether you want to travel
                                independently with a guide only or to join one of our organised groups, we can arrange
                                this
                                for you.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="content">
                            <img src="images/icons_customer.svg" alt="Wallet">
                            <h1>Outstanding Customer Service</h1>
                            <p>We have a direct contact for you to call us in our office located in Kathmandu and we are
                                always quick to respond to any of your email enquiries.
                                Our customer service is a top priority for us, we take pride and absolute satisfaction
                                in
                                providing you with an amazing service from start to finish.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


        <section class="section-4">
            <div class="container-fluid p-0">
                <div class="video-section">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="966" height="543"
                            src="https://www.youtube.com/embed/-hTVNidxg2s" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                            style="height: 85vh; z-index: 0; background-image: none; background-attachment: scroll; background-size: auto;"></iframe>
                    </div>

                </div>
            </div>
        </section>


    </main>
    <footer>
        <div class="container-fluid p-0">
            <div class="row text-left">
                <div class="col-md-4">
                    <h1>Our Company</h1>
                    <p> Nepal Travel Info takes pride in offering the very best trekking tours
                        throughout the Himalayas
                        to places such as Everest Base Camp, Annapurna, Gokyo Lakes in Nepal and Valley of Flowers in
                        Ladakh region of India.</p>
                    <img src="images/logo_white.svg" alt="logo">
                </div>
                <div class="col-md-4">
                    <h1>Contact Info</h1>
                    <p>
                        <span class="fas fa-envelope" style="margin-right:10px;"></span>
                        <a href="mailto:info@HimalayanSteps.com">info@nepaltravelinfo.com</a>
                    </p>
                    <p>
                        <span class="fas fa-mobile" style="margin-right:10px;"></span>
                        <a href="tel:+64 020 401 67260">+64 020 401 67260</a> (Customer Service)
                    </p>
                    <p>
                        <span class="fas fa-mobile" style="margin-right:10px;"></span>
                        <a href="tel:+977 984 189 9122">+977 984 189 9122</a> (Kathmandu Office)
                    </p>
                    <p>
                        <span class="fas fa-map-marker-alt" style="margin-right:10px;"></span>Chaksibari Marg, Thamel,
                        Kathmandu, Nepal
                    </p>
                </div>
                <div class="col-md-4">
                    <h1>#Nepaltravelinfo</h1>
                    <ul class="flickr">
                        <li>
                            <a target="_blank" href="https://www.instagram.com/p/Bu3J9l3Actw/">
                                <img
                                    src="https://scontent.cdninstagram.com/v/t51.2885-15/e15/c59.0.962.962a/s150x150/52313356_377911853049060_6217413708118732014_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=AuzLkfImLR8AX8aMHTd&amp;oh=2b2f941ab905c5f303e70fe86396efaa&amp;oe=5EC9BA57"></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/p/BulHja6ACeV/">
                                <img
                                    src="https://scontent.cdninstagram.com/v/t51.2885-15/e15/c0.74.720.720a/s150x150/51899647_1985045398289354_4198961241890321004_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=OZsh1zW2jvYAX-1_DIt&amp;oh=aeee28f3911c74c24daa818e429ffddd&amp;oe=5EC93105"></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/p/BuLqrwzHQwB/">
                                <img
                                    src="https://scontent.cdninstagram.com/v/t51.2885-15/e15/c147.0.786.786a/s150x150/52020966_1001327090064418_6281114606657896609_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=YDb3E9MmmYgAX9AGHKk&amp;oh=79d176172c2e66e365ce96bdd41258a3&amp;oe=5EC8348F"></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/p/Bt2yN1QAjSN/">
                                <img
                                    src="https://scontent.cdninstagram.com/v/t51.2885-15/e15/c191.0.698.698a/s150x150/51832660_316535768994497_3164846387582728141_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=H5_CtjMemuYAX-aQKPi&amp;oh=546b626d5f16c3e0a03e6249ae7f6926&amp;oe=5ECAFFCC"></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/p/BtqMoXfnfm6/">
                                <img
                                    src="https://scontent.cdninstagram.com/v/t51.2885-15/e15/s150x150/51161631_170985617212078_4651586744114170605_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=FBWD9qnv4IwAX90hHX6&amp;oh=d20a8225ac8ef503c97a0fac5ad25c35&amp;oe=5EC9E05E"></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/p/BtfaQRlnkgV/">
                                <img
                                    src="https://scontent.cdninstagram.com/v/t51.2885-15/e15/c0.88.720.720a/s150x150/50954323_1007619126110483_7377349297764489896_n.jpg?_nc_ht=scontent.cdninstagram.com&amp;_nc_ohc=_vL7LSazHkQAX_wVO0g&amp;oh=ca17cca1602041172ce27ece257bd86b&amp;oe=5ECBB999"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="dashed">
            <small style="text-align: center;color: whitesmoke;">&copy; Copyright 2020, nepaltravelinfo.com</small>
        </div>
    </footer>

    <!-- =================== Boostrap JS/Jquery ================= -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>