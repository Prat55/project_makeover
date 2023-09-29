<!-- footer area start -->
<footer class="footer-area">
    <div class="footer-widget">
        <div class="container">
            <div class="row footer-widget-wrapper pt-100 pb-70 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget-box about-us">
                        <a href="#" class="footer-logo">
                            <img src="assets/img/logo/Rosh logo.svg" alt />
                        </a>
                        <p class="mb-3">
                            Contact us for more information about our services and
                            makeover classes.
                        </p>
                        <ul class="footer-contact">
                            <li>
                                <a href="tel:+91 84120 98675"><i class="far fa-phone"></i>+91 84120 98675</a>
                            </li>
                            <li>
                                <i class="far fa-map-marker-alt"></i>Navapur Rd, near Blue
                                diamond hotel, Boisar, Maharashtra 401501
                            </li>
                            <li>
                                <a href="https://live.themewild.com/cdn-cgi/l/email-protection#335a5d555c73564b525e435f561d505c5e"><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="3c55525a537c59445d514c5059125f5351">roshmakeover@gmail.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Our Services</h4>
                        <ul class="footer-list">
                            <li>
                                <a href="javascript: void(0);"><i class="fas fa-caret-right"></i>Certified Makeover
                                    Classes</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fas fa-caret-right"></i> Bridal Makeover</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fas fa-caret-right"></i>Hairstyling</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fas fa-caret-right"></i>Eye Makeup</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fas fa-caret-right"></i>Fashion Styling</a>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fas fa-caret-right"></i>Nail Art</a>
                            </li>
                            <!-- <li>
                    <a href="#"
                      ><i class="fas fa-caret-right"></i> Face Painting</a
                    >
                  </li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="footer-newsletter-wrapper">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Newsletter</h4>
                            <div class="footer-newsletter">
                                <p>
                                    Subscribe Our Newsletter To Get Latest Update And News
                                </p>
                                <div class="subscribe-form">
                                    <form action="functions/newsubmit.php" method="post">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email" required />
                                        <button class="theme-btn" type="submit" name="news-sub">
                                            Subscribe Now <i class="far fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                                <?php if (isset($_SESSION['message'])) { ?>
                                    <div class="alert border-1 alert-dismissible fade show py-2">
                                        <div class="d-flex align-items-center">
                                            <div class="font-35 text-white">
                                                <i class='bx bxs-check-circle'></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0 text-white fs-5"><?= $_SESSION['message']; ?></h6>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php
                                    unset($_SESSION['message']);
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p class="copyright-text">
                        &copy; Copyright <span id="date">2023</span>
                        All Rights Reserved by
                        <a href="#">
                            Rosh Makeover
                        </a>
                        & Developed by
                        <a href="https://www.maestlopermedia.com/">
                            Maestloper Media.
                        </a>
                    </p>
                </div>
                <div class="col-md-6 align-self-center">
                    <ul class="footer-social">
                        <li>
                            <a href="https://www.instagram.com/roshmakeover/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <!-- <li>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>

<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/counter-up.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/popupform.js"></script>
</body>

</html>