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
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="destination.php">Destination <span
                                    class="sr-only">(current)</span></a>
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
        <!-- <div class="container">
             <div class="row">
                <div class="col-md-7 col-sm-12">
                <h1 style="color: white;">Our Trekking Destination</h1>
            </div> 

        </div> -->


        <!-- ===================== Hero section close ======================= -->


    </header>
    <main>


        <section class="section-trek">

            <!-- checkout form -->
            <!--/col-->
            <form action="includes/booking.inc.php" method="POST" class="needs-validation" novalidate>
                <div class="col-md-8 offset-md-2">
                    <span class="anchor" id="formUserEdit"></span>
                    <hr class="my-5">

                    <!-- form user info -->
                    <div class="card card-outline-secondary">
                        <div class="card-header">
                            <h3 class="mb-0">Check Out Form</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Full name</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="fullname" id="firstName"
                                            placeholder="Full Name" value="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">E-mail</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" type="email" name="email" id="email"
                                            placeholder="email@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="address" id="address"
                                            placeholder="1234 Main St" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Select Trek (select
                                        one):</label>
                                    <div class="col-lg-9">
                                        <select id="user_time_zone" class="form-control" name="trekname" size="0">
                                            <option value="Annapurna Circuit">Annapurna Circuit</option>
                                            <option value="Everest Circuit">Everest Circuit</option>
                                            <option value="Kathmandu Tour">Kathmandu Tour</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Trek Date</label>
                                    <div class="col-lg-9">
                                        <input type="date" class="form-control" name="trekdate" id="trekdate">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                                    <div class="col-lg-9">
                                        <input type="phone" class="form-control" name="phone" id="phone"
                                            placeholder="+64-111111">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Country</label>
                                    <div class="col-lg-9">
                                        <input type="country" class="form-control" name="country" id="country"
                                            placeholder="New Zealand">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">No. of People</label>
                                    <div class="col-lg-9">
                                        <input type="country" class="form-control" name="person" id="person" value="1">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-9">
                                        <input type="reset" class="btn btn-secondary" value="Cancel">
                                        <input type="submit" class="btn btn-primary" value="Book Now">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->

                </div>
            </form>
            <!--/col-->

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