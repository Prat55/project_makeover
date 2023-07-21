<div class="search-popup">
    <button class="close-search"><span class="far fa-times"></span></button>
    <form action="#">
        <div class="form-group">
            <input type="search" name="search-field" placeholder="Search Here..." required />
            <button type="submit"><i class="far fa-search"></i></button>
        </div>
    </form>
</div>

<!-- popup form start -->
<div class="login-popup">
    <div class="box">
        <div class="img-area">
            <img src="https://e1.pxfuel.com/desktop-wallpaper/384/407/desktop-wallpaper-indian-hot-wedding-brides-desi-actress-seductive-wedding-girl-indian.jpg"
                alt="" />
            <span class="site-title-tagline">ROSHMAKEOVER</span><!-- upper image text -->
            <p>BOISAR, PALGHAR</p>
        </div>
        <div class="form">
            <div class="close">&times;</div>
            <h1 class="site-title-tagline" style="color: #e91e63">
                Admission form
            </h1>
            <form action="functions/form-submit.php" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" class="form-control" required/>
                </div>
                <div class="form-group">
                    <input type="text" name="phone" placeholder="Your Mobile NO." class="form-control" required/>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" class="form-control" required/>
                </div>
                <div class="form-group">
                    <select name="course" id="lang" class="form-control">
                        <option class="courses" value="Select Courses">
                            Select Courses
                        </option>
                        <option value="Makeup Artistry">Makeup Artistry</option>
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
                <button type="submit" name="form-submit" class="btn">Submit</button>
            </form>
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert border-0 alert-dismissible fade show py-2 pt-20">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-black"><i class='bx bxs-check-circle'></i></div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-black"><?= $_SESSION['message']; ?></h6>
                            <!-- <div class="text-white">A simple success alert—check it out!</div> -->
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

<!-- popup form end -->