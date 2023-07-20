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
                            <h2>Eyebrow and Forehead</h2>
                            <?php
                                $category1 = getAllPrice('category1');

                                if(mysqli_num_rows($category1) > 0) {
                                    foreach($category1 as $item1) {
                                        ?>
                                            <li>
                                                <p><?= $item1['service']; ?></p>
                                                <span>Rs <?= $item1['price']; ?></span>
                                            </li>
                                        <?php
                                    }
                                }
                            ?>
                        </ul>

                        <ul>
                            <h2>Wax-Honey</h2>
                            <?php
                                $category2 = getAllPrice('category2');

                                if(mysqli_num_rows($category2) > 0) {
                                    foreach($category2 as $item2) {
                                        ?>
                                            <li>
                                                <p><?= $item2['service']; ?></p>
                                                <span>Rs <?= $item2['price']; ?></span>
                                            </li>
                                        <?php
                                    }
                                }
                            ?>
                        </ul>
                        <ul>
                            <h2>Wax-Richa,Creme,Chocolate,Beaan Wax</h2>
                            <?php
                                $category3 = getAllPrice('category3');
                            
                                if(mysqli_num_rows($category3) > 0) {
                                    foreach($category3 as $item3) {
                                        ?>
                                            <li>
                                                <p><?= $item3['service']; ?></p>
                                                <span>Rs <?= $item3['price']; ?></span>
                                            </li>
                                        <?php
                                    }
                                }
                            ?>
                        </ul>
                        <ul>
                            <h2>Facial</h2>
                            <?php
                                $category4 = getAllPrice('category4');
                            
                                if(mysqli_num_rows($category4) > 0) {
                                    foreach($category4 as $item4) {
                                        ?>
                                            <li>
                                                <p><?= $item4['service']; ?></p>
                                                <span>Rs <?= $item4['price']; ?></span>
                                            </li>
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