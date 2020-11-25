<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BHotel</title>
    <!-- <link rel="icon" href="img/favicon.png"> -->
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
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <!-- niceselect CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- slick CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/additional.css">

    <link rel="stylesheet" href="css/room_toggle.css">

</head>

<body>
   <!--::header part start::-->
   <header class="main_menu">
        <div class="main_menu_iner">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="packages.html">packages</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Blog
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="blog.html">Blog</a>
                                            <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            pages
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                            <a class="dropdown-item" href="top_place.html">top place</a>
                                            <a class="dropdown-item" href="tour_details.html">tour details</a>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="btn_1 d-none d-lg-block">book now</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Reservation</h2>
                            <p>Let’s start your journey with us, your dream will come true</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- booking part start-->
    <section class="booking_part padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking_menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="true">hotel</a>
                            </li>
                            <!-- 추후에 연회장 서비스 예약시 사용 -->
                            <!-- <li class="nav-item">
                            <a class="nav-link" id="tricket-tab" data-toggle="tab" href="#tricket" role="tab" aria-controls="tricket" aria-selected="false">tricket</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <form action="select_rooms.php" method="POST" name="reservation" onsubmit="return isValidDate()">
                                        <div class="form-row">
                                            
                                            <div class="form_colum">
                                                <div class="form_colum2">
                                                    <div id="btn_group"> 
                                                        <span class="rooms_text">Rooms</span>
                                                        <input type="button" value="-" id="test_btn1" onclick="room_decrease()">
                                                        <input type="text" name="rooms" value="1" id="rooms_num">
                                                        <input type="button" value="+" id="test_btn1" onclick="room_increase()">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form_colum">
                                                <input type="text" id="datepicker_1" name="check_in_date" placeholder="Check in date">
                                            </div>

                                            <div class="form_colum">
                                                <input type="text" id="datepicker_2" name="check_out_date" placeholder="Check in date">
                                            </div>

                                            <div class="form_colum">
                                                <div class="form_colum2">
                                                    <div id="btn_group"> 
                                                        <span class="guest_text">Guests</span>
                                                        <input type="button" value="-" id="test_btn2" onclick="guest_decrease()">
                                                        <input type="text" name="guests" value="1" id="guest_num">
                                                        <input type="button" value="+" id="test_btn2" onclick="guest_increase()">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form_btn">
                                                <input type="submit" class="btn_1" value="Search">
                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- 연회장 예약 구현시 사용 -->
                            <!-- <div class="tab-pane fade" id="tricket" role="tabpanel" aria-labelledby="tricket-tab">
                                <div class="booking_form">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Choosace place </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_3" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_4" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Persone </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_btn">
                                                <a href="#" class="btn_1">search</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header part end-->

    <!-- body part -->
    <section class="about_us">
        <div class="container">
            <?php
                // 체크인 날짜부터 체크아웃 날짜까지의 날짜들을 배열안에 저장
                $dates = array();

                $cid = explode("/", $_POST['check_in_date']);
                $cod = explode("/", $_POST['check_out_date']);

                $cid = (string)$cid[2] . "-" . (string)$cid[0] . "-" . (string)$cid[1];
                $cod = (string)$cod[2] . "-" . (string)$cod[0] . "-" . (string)$cod[1];

                $date = $cid;
                while ($date !== $cod) {
                    array_push($dates, $date);
                    $date = date("Y-m-d", strtotime($date . "+1 days"));
                }
                array_push($dates, $cod);

                $_SESSION['guests'] = $_POST['guests'];
                $_SESSION['dates'] = serialize($dates);
            ?>
            <div class="row align-items-end body_padding">
                <div class ="about_text col-lg-12"><h2>Standard</h2></div>
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="img/hotels/standard.jpg" alt="#">
                    </div>
                </div>
                <div class="col-lg-6">
                <form action="reservation.php" method="post" onsubmit="return checkNumberOfRooms()">
                    <div class="room_toggle">
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='503'/><span>503</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='504'/><span>504</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='403'/><span>403</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='404'/><span>404</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='303'/><span>303</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='304'/><span>304</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='203'/><span>203</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='204'/><span>204</span></label>
                        </div>
                    </div>

                    <div class="room_toggle">
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='507'/><span>507</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='508'/><span>508</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='407'/><span>407</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='408'/><span>408</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='307'/><span>307</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='308'/><span>308</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='207'/><span>207</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='208'/><span>208</span></label>
                        </div>
                    </div>

                    <div class= "col-md-1 light_height_padding">
                        <input type="submit" onclick = 'show()' value="Book Now">
                    </div>
                </form>
            </div>
        </div>

        <div class="row align-items-end body_padding">
                <div class ="about_text col-lg-12"><h2>Family</h2></div>
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="img/hotels/Family.jpg" alt="#">
                    </div>
                </div>
                <div class="col-lg-6">
                <form action="reservation.php" method="post" onsubmit="return checkNumberOfRooms()">
                    <div class="room_toggle">
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='503'/><span>501</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='504'/><span>502</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='403'/><span>401</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='404'/><span>402</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='303'/><span>301</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='304'/><span>302</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='203'/><span>201</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='204'/><span>202</span></label>
                        </div>
                    </div>

                    <div class="room_toggle">
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='507'/><span>505</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='508'/><span>506</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='407'/><span>405</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='408'/><span>406</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='307'/><span>305</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='308'/><span>306</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='207'/><span>205</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='208'/><span>206</span></label>
                        </div>
                    </div>

                    <div class= "col-md-1 light_height_padding">
                        <input type="submit" onclick = 'show()' value="Book Now">
                    </div>
                </form>
            </div>
        </div>

            <div class="row align-items-center body_padding">
                <div class ="about_text col-lg-12"><h2>Deluxe</h2></div>
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="img/hotels/delux.jpg" alt="#">
                    </div>
                </div>
                <div class="col-lg-6">
                <form action="reservation.php" method="post" onsubmit="return checkNumberOfRooms()">
                    <div class="room_toggle">
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='503'/><span>801</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='504'/><span>802</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='403'/><span>701</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='404'/><span>702</span></label>
                        </div>
                    </div>

                    <div class="room_toggle">
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='507'/><span>803</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='508'/><span>804</span></label>
                        </div>
                        <div class="col-xs-3">
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='407'/><span>703</span></label>
                            <label><input type = "checkbox" id = 'room' name = 'rooms[]' class = "btn_5" value='408'/><span>704</span></label>
                        </div>
                    </div>

                    <div class= "col-md-1 light_height_padding">
                        <input type="submit" onclick = 'show()' value="Book Now">
                    </div>
                </form>
            </div>      
        </div>
    </section>
    <!-- Header part end-->

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
    <script src = "js/hotel_change.js"></script>
    <script src="js/index_form.js" type="text/javascript"></script>
</body>

</html>