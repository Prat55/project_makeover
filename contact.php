<?php include('includes/header.php') ?>

<main class="main">
    <div class="site-breadcrumb" style="background: url(images/about-us/me.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Contact Us</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>

    <div class="contact-area py-120">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-content">
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Address</h5>
                                    <p>
                                        Navapur Rd, near Blue diamond hotel, Boisar, Maharashtra
                                        401501
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Call Us</h5>
                                    <p>+91 84120 98675</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Email Us</h5>
                                    <p>
                                        <a href="mailto:relandgroup@mail.com">roshmakeover@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-info-icon">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="contact-info-content">
                                    <h5>Open Time</h5>
                                    <p>Mon - Sat (10.00AM - 05.30PM)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 align-self-center">
                        <div class="contact-form">
                            <div class="contact-form-header">
                                <h2>Get In Touch</h2>
                                <p>
                                    It is a long established fact that a reader will be
                                    distracted by the readable content of a page randomised
                                    words which don't look even slightly when looking at its
                                    layout.
                                </p>
                            </div>
                            <form method="post" action="https://live.themewild.com/feroda/assets/php/contact.php"
                                id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Your Email" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="Mobile No."
                                                placeholder="Your Mobile No." required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="languages" id="lang" class="form-control">
                                                <option class="courses" value="Select Courses">
                                                    Select Courses
                                                </option>
                                                <option value="Makeup Artistry">
                                                    Makeup Artistry
                                                </option>
                                                <option value="Hairstyling and Haircare">
                                                    Hairstyling and Haircare
                                                </option>
                                                <option value="Nail Artistry">Nail Artistry</option>
                                                <option value="Skincare and Spa Treatments">
                                                    Skincare and Spa Treatments
                                                </option>
                                                <option value="Business and Marketing Skills">
                                                    Business and Marketing Skills
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
<input type="text" class="form-control" name="subject" placeholder="Your Subject" required>
</div> -->
                                <div class="form-group">
                                    <textarea name="message" cols="30" rows="5" class="form-control"
                                        placeholder="Write Your Message"></textarea>
                                </div>
                                <button type="submit" class="theme-btn">
                                    Send Message <i class="far fa-paper-plane"></i>
                                </button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d25251.648918378123!2d72.73316572443889!3d19.8111576315446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d19.8221806!2d72.73644279999999!4m5!1s0x3be71fc4ad2a1dc7%3A0x3c8c38680afcbe45!2sRQ24%2BPPC%20Near%20blue%20diamond%20hotel%2C%20Sainath%20Nagar%2C%20Vijay%20Colony%2C%20Vanipada%2C%20Boisar%2C%20Maharashtra%20401501!3m2!1d19.8020304!2d72.756919!5e0!3m2!1sen!2sin!4v1689057497711!5m2!1sen!2sin"
            style="border: 0" allowfullscreen loading="lazy"></iframe>
    </div>
</main>

<?php include('includes/footer.php') ?>