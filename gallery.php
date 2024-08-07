<?php 
include('includes/header.php');
include('functions/userfunction.php');
?>

<main class="main">
    <div class="site-breadcrumb" style="background: url(images/about-us/me.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">gallery</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.php">Home</a></li>
                <li class="active">gallery</li>
            </ul>
        </div>
    </div>

    <div class="service-area2 theme-bg-dark-2 py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Collection</span>
                    </div>
                </div>
            </div>

            <div class="gallery-collection">
                <?php
                    $images = getAllImages('images');

                    if(mysqli_num_rows($images) > 0) {
                        foreach($images as $image) {
                            ?>
                                <img src="gallery/<?= $image['file_name'] ?>" alt="" width="320px" >
                            <?php
                        }
                    }
                ?>
            </div>


        </div>
    </div>

    <div class="partner-area bg pt-30 pb-30">
        <h1 style="text-align: center; margin-bottom: 50px; color: #cc866c">
            OUR ASSOCIATES
        </h1>
        <div class="container">
            <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                <img src="https://images.squarespace-cdn.com/content/v1/5fdb7673c69c455b9795a5dc/1609236162753-9DDL0X9ZZSLBHQTZ27U8/Lakme.png"
                    alt="thumb" />
                <img src="https://www.logogenie.net/images/articles/beauty-logo-9.jpg" alt="thumb" />
                <img src="https://cdn.logojoy.com/wp-content/uploads/2018/05/30163533/big-768x591.png" alt="thumb" />
                <img src="https://logos-world.net/wp-content/uploads/2020/11/Oriflame-Logo-2011-present.jpg"
                    alt="thumb" />
                <img src="https://marscosmetics.in/cdn/shop/files/1_6c204237-25ac-4f23-a759-c18515a90bd7.jpg?v=1615455746"
                    alt="thumb" />
                <img src="https://www.ranklogos.com/wp-content/uploads/2012/06/olay-logo.png" alt="thumb" />
                <img src="https://cdn.sanity.io/images/92ui5egz/production/7c1c60e9afaaaa3cce61e5101717796d21b7f914-1426x1080.svg?rect=0,141,1426,799&w=150&h=84&fit=crop&auto=format"
                    alt="thumb" />
            </div>
        </div>
    </div>
</main>

<?php include('includes/footer.php') ?>