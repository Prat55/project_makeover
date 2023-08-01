<?php 
include('includes/header.php');
include('functions/userfunction.php');
?>

<main class="main">
    <div class="site-breadcrumb" style="background: url(images/about-us/me.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Pricing</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.php">Home</a></li>
                <li class="active">Pricing</li>
            </ul>
        </div>
    </div>

    <div class="pricing-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">pricing</span>
                        <h2 class="site-title" style="color: white">
                            Our pricing Plan For You
                        </h2>
                    </div>
                </div>
                <div class="pricing-area bg py-120">
                    <div class="regular-chart container">
                        <ul>
                            <?php
                                $categories = "SELECT * FROM `categories`";
                                $ratecard = "SELECT * FROM `ratecard`";
                                $categories_run = mysqli_query($con, $categories);
                                $ratecard_run = mysqli_query($con, $ratecard);

                                if(mysqli_num_rows($categories_run) > 0) {
                                    foreach($categories_run as $category){
                                    ?>
                            <h2><?= $category['category'] ?></h2>

                            <?php 
                                if(mysqli_num_rows($ratecard_run)> 0) {
                                    foreach($ratecard_run as $rate){
                                        if(  $rate['category_id'] == $category['id']){
                                ?>

                            <li>
                                <p><?= $rate['service']; ?></p>
                                <span>Rs <?= $rate['price']; ?></span>
                            </li>
                            <?php
                                            }
                                        }
                                    }
                                        ?>

                            <?php
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>


</main>

<?php include('includes/footer.php') ?>