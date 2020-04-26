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


        <div class="container">
            <div class="container-contact100">
                <div class="wrap-contact100">
                    <form class="contact100-form validate-form" action="includes/contact.inc.php" method="POST">
                        <span class="contact100-form-title">
                            Send Us A Message
                        </span>

                        <label class="label-input100" for="first-name">Tell us your name *</label>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                            <input id="first-name" class="input100" type="text" name="first-name"
                                placeholder="First name">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                            <input class="input100" type="text" name="last-name" placeholder="Last name">
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100" for="email">Enter your email *</label>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input id="email" class="input100" type="text" name="email"
                                placeholder="Eg. example@email.com">
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100" for="phone">Enter phone number</label>
                        <div class="wrap-input100">
                            <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
                            <span class="focus-input100"></span>
                        </div>

                        <label class="label-input100" for="message">Message *</label>
                        <div class="wrap-input100 validate-input" data-validate="Message is required">
                            <textarea id="message" class="input100" name="message"
                                placeholder="Write us a message"></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-contact100-form-btn">
                            <button type="submit" class="contact100-form-btn">
                                Send Message
                            </button>
                        </div>
                    </form>

                    <div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
                        <div class="flex-w size1 p-b-47">
                            <div class="txt1 p-r-25">
                                <!-- <span class="lnr lnr-map-marker"></span> -->
                            </div>

                            <div class="flex-col size2">
                                <span class="txt1 p-b-20">
                                    Address
                                </span>

                                <span class="txt2">
                                    Whitiora, Hamilton, 3200, New Zealand
                                </span>
                            </div>
                        </div>

                        <div class="dis-flex size1 p-b-47">
                            <div class="txt1 p-r-25">
                                <!-- <span class="lnr lnr-phone-handset"></span> -->
                            </div>

                            <div class="flex-col size2">
                                <span class="txt1 p-b-20">
                                    Lets Talk
                                </span>

                                <span class="txt3">
                                    +64 800 1236879
                                </span>
                            </div>
                        </div>

                        <div class="dis-flex size1 p-b-47">
                            <div class="txt1 p-r-25">
                                <!-- <span class="lnr lnr-envelope"></span> -->
                            </div>

                            <div class="flex-col size2">
                                <span class="txt1 p-b-20">
                                    General Support
                                </span>

                                <span class="txt3">
                                    karkisubash122@gmail.com
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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


    <!-- ================== Custom JS ======================== -->
    <script>

        // scrollbars init
        (function () {
            var selectors = {
                nav: '[data-phases-nav]',
                tabs: '[data-phases-tabs]',
                active: '.__active'
            };
            var classes = {
                active: '__active'
            };
            $('a', selectors.nav).on('click', function () {
                let $this = $(this)[0];
                $(selectors.active, selectors.nav).removeClass(classes.active);
                $($this).addClass(classes.active);
                $('div', selectors.tabs).removeClass(classes.active);
                $($this.hash, selectors.tabs).addClass(classes.active);
                return false;
            });
        }());
        (function (document) {
            var baseScrollConfig = {
                wheelSpeed: 1,
                wheelPropagation: true,
                minScrollbarLength: 10
            };
            $('[data-scroll]').perfectScrollbar(baseScrollConfig);
        })(window.document);

    </script>
</body>

</html>