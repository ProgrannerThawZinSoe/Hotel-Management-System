<?php
    include_once "head.php";
?>

        <!--================Header Area =================-->
        <header class="main_header_area">
            <?php
                include_once "header.php";
            ?>
            <div class="header_menu">
                <?php
                    include_once "nav.php";
                ?>
            </div>
        </header>
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Contact Us</h3>
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="contact-us.html">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Get Contact Area =================-->
        <section class="get_contact_area">
            <div class="container">
                <div class="row get_contact_inner">
                    <div class="col-md-6">
                        <?php
                            include_once "system/flash_message.php";
                        ?>
                        <div class="left_ex_title">
                            <h2>get in <span>touch</span></h2>
                        </div>
                        <form class="contact_us_form row m0" action="system/backend.php" method="post"  >
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Name">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="number" name="phone" required placeholder="Phoen no.">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea class="form-control" name="message" id="message" required rows="1" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input style="color:white" type="submit" name="contact" value="submit now" class="btn submit_btn form-control">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="right_contact_info">
                            <div class="contact_info_title">
                                <h3>Contact info</h3>
                                <p>Have any Queries? Let us know. We will clear it for you at the best.</p>
                            </div>
                            <div class="contact_info_list">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Office</h4>
                                        <p>Hill Town Resort, 215, Mallin Street <br /> New Youk, NY 100 254</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Email</h4>
                                        <a href="#">info@hilltown.contact.com</a>
                                        <a href="#">support@hilltown.com</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Phone</h4>
                                        <a href="#">1800 658 4778</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get Contact Area =================-->
        
        <!--================Map Area =================-->
        <section class="contact_map_area">
            <div class="container">
                <div id="mapBox2" class="mapBox2 row m0" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="12" 
                    data-marker="img/map-marker.png" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div>
            </div>
        </section>
        <!--================End Map Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widget">
                                <img src="img/footer-logo.png" alt="">
                                <div class="ab_wd_list">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>54B, Tailstoi Town 5238 MT, La city, IA 522364</h4>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>+ 547 5895 621</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="book_now_area">
                                    <a class="book_now_btn" href="#">Book now</a>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Extra Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#">-  About Us</a></li>
                                    <li><a href="#">-  Faq’s</a></li>
                                    <li><a href="#">-  Blog</a></li>
                                    <li><a href="#">-  Testimonials</a></li>
                                    <li><a href="#">-  Reservation Now</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>our services</h3>
                                </div>
                                <ul>
                                    <li><a href="#">-  Food & Drinks</a></li>
                                    <li><a href="#">-  Rooms</a></li>
                                    <li><a href="#">-  Amenities</a></li>
                                    <li><a href="#">-  Spa & Gym</a></li>
                                    <li><a href="#">-  Hill Tours</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget instagram_widget">
                                <div class="f_title">
                                    <h3>Instagram</h3>
                                </div>
                                <ul class="instagram_list" id="instafeed"></ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright_area">
                <div class="container">
                    <div class="pull-left">
                        <h4>Copyright © HillTown Resort  <script>document.write(new Date().getFullYear());</script>. All rights reserved. </h4>
                    </div>
                    <div class="pull-right">
                        <h4>Created by: <a href="#">DesignArc</a></h4>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <!--================End Search Box Area =================-->
        
        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></span>
                        <h2 class="modal-title">Thank you</h2>
                        <p class="modal-subtitle">Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->
        <?php
            include_once "search.php";
        ?>
        <!--================End Contact Success and Error message Area =================-->
        
        
        
        
        
        
        <!--================End Footer Area =================-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/counterup/waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        
        <!-- instafeed-->
        <script type="text/javascript" src="vendors/instafeed/instafeed.min.js"></script>
        <script type="text/javascript" src="vendors/instafeed/script.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

<!-- Mirrored from designarc.biz/demos/hilltown/theme/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 06:02:36 GMT -->
</html>