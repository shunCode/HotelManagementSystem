<!doctype html>
<?php
    session_start();
    if (!isset($_SESSION['customer_id'])) {
        echo "<script> alert('Available after sign in.'); </script>";
        echo "<script> location.href='guest_signin_page.php'; </script>";
    }
    include 'action/init.php';

    $id = $_SESSION['customer_id'];

    $reserve_count = 0;
    $reservation_code = array();
    $rooms = array();
    $num_guests = array();
    $dates = array();

    try {
        $db = connectDB();

        // 예약 번호를 배열에 저장 / 그 예약 번호에 따른 객실번호와 인원수를 배열에 저장
        $rows1 = $db->query("SELECT * FROM reservation");
        $result1 = $rows1->fetchAll();
        
        for ($i = 0; $i < count($result1); $i++) {
            if ($result1[$i]["id"] === $id) {
                $reserve_count++;
                array_push($reservation_code, $result1[$i]["code"]);
                array_push($rooms, $result1[$i]["rnumber"]);
                array_push($num_guests, $result1[$i]["num_guests"]);
        	}
        }

        // 각 예약 번호의 예약된 날짜를 배열에 저장
        for ($i = 0; $i < count($reservation_code); $i++) {

            $rows2 = $db->query("SELECT * FROM reservation_log WHERE code = $reservation_code[$i]");
            $result2 = $rows2->fetchAll();

            $tmp = array();
            for ($j = 0; $j < count($result2); $j++) {
                array_push($tmp, $result2[$j]["use_date"]);
            }

            array_push($dates, $tmp);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BHotel | Reservation Contents</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <style>
        .danger {
            font-size: 15px;
        }
    </style>

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="rooms.php">Rooms</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="packages.php">packages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contact</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        My Page
                                    </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            <a class="dropdown-item" href="reservation_content.php">Reservation Contents</a>
                                            <a class="dropdown-item" href="#">Complain</a>
                                        </div>
									</li>
                                </ul>
                            </div>
                            <?php if (isset($_SESSION['customer_name'])) { ?>
                                <p style="margin-right:10px;">Welcome, <?= $_SESSION['customer_name'] ?></p>
                                <a href="action/guest_signout.php" class="btn_1 d-none d-lg-block">Sign Out</a>
                            <?php } else {?>
                                <a href="guest_signin_page.php" class="btn_1 d-none d-lg-block">Sign In</a>
                            <?php } ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Reservation Contents</h2>
                            <p>Confirm / Cancel the reservation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about_us section_padding">
        <div class="container">

            <?php

                if ($reserve_count == 0) { ?>

                    <!-- 예약 내용이 없을 경우 -->
                    <h2>There is no reservation.</h2>

                <?php } else { ?>

                    <!-- 예약 내용이 1개 이상 있을 경우 -->

                    <?php
                        for ($i = 0; $i < $reserve_count; $i++) { ?>


                            <div style="margin-bottom: 30px;">
                                <h2>Reservation No. <?= $reservation_code[$i] ?></h2>
                                <div style="margin-bottom: 20px;">
                                    <p>Guests : <?= $num_guests[$i] ?> </p>
                                    <p>Room Number : <?= $rooms[$i] ?> </p>
                                    <p>Period : <?= $dates[$i][0] ?> ~ <?= $dates[$i][count($dates[$i]) - 1] ?> </p>
                                </div>

                                <form action="action/reservation_cancel.php" method="post" style="">
                                    <input type="hidden" name="reservation_code" value="<?= $reservation_code[$i] ?>">
                                    <button class="genric-btn danger radius">Cancel Reservation ></button>
                                </form>

                                <hr>

                            </div>


                        <?php }
                    ?>

                <?php }

            ?>
            
        </div>
    </section>

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-5">
                    <div class="single-footer-widget">
                        <h4>Discover Destination</h4>
                        <ul>
                            <li><a href="#">Miami, USA</a></li>
                            <li><a href="#">California, USA</a></li>
                            <li><a href="#">London, UK</a></li>
                            <li><a href="#">Saintmartine, Bangladesh</a></li>
                            <li><a href="#">Mount Everast, India</a></li>
                            <li><a href="#">Sidney, Australia</a></li>
                            <li><a href="#">Miami, USA</a></li>
                            <li><a href="#">California, USA</a></li>
                            <li><a href="#">London, UK</a></li>
                            <li><a href="#">Saintmartine, Bangladesh</a></li>
                            <li><a href="#">Mount Everast, India</a></li>
                            <li><a href="#">Sidney, Australia</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single-footer-widget">
                        <h4>Subscribe Newsletter</h4>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i class="far fa-paper-plane"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                        <p>Subscribe our newsletter to get update news and offers</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Contact Us</h4>
                        <p>4156, New garden, New York, USA
                                +880 362 352 783</p>
                        <span>contact@martine.com</span>
                        <div class="social-icons">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- masonry js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- masonry js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    
    <script src="js/room_select.js" type="text/javascript"></script>
    
</body>

</html>