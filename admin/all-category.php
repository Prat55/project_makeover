<?php 
include('include/header.php');
include('../middleware/adminMiddleware.php');
?>
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Categories</h4>
                    </div>
                    <!-- 1st Category -->
                    <div class="card-body">
                        <h4>Eyebrow and Forehead</h4>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $category1 = getAll('category1');

                                    if(mysqli_num_rows($category1) > 0) {
                                        foreach($category1 as $item1) {
                                            ?>
                                                <tr>
                                                    <td><?= $item1['service']; ?></td>
                                                    <td>Rs. <?= $item1['price']; ?></td>
                                                    <td><a href="edit-category.php" class="btn btn-primary">Edit</a></td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else {
                                        echo '<tr><td colspan="4" style="text-align: center;">No Categories Found</td></tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                   <!-- 2nd Category -->
                    <div class="card-body">
                        <h4>Wax-Honey</h4>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    
                                    $category2 = getAll('category2');
                                    
                                    if(mysqli_num_rows($category2) > 0) {
                                        foreach($category2 as $item2) {
                                            ?>
                                                <tr>
                                                    <td><?= $item2['service']; ?></td>
                                                    <td>Rs. <?= $item2['price']; ?></td>
                                                    <td><a href="" class="btn btn-primary">Edit</a></td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else {
                                        echo '<tr><td colspan="4" style="text-align: center;">No Categories Found</td></tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- 3rd Category -->
                    <div class="card-body">
                        <h4>Wax-Richa,Creme,Chocolate,Beaan Wax</h4>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $category3 = getAll('category3');

                                    if(mysqli_num_rows($category3) > 0) {
                                        foreach($category3 as $item3) {
                                            ?>
                                                <tr>
                                                    <td><?= $item3['service']; ?></td>
                                                    <td>Rs. <?= $item3['price']; ?></td>
                                                    <td><a href="" class="btn btn-primary">Edit</a></td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else {
                                        echo '<tr><td colspan="4" style="text-align: center;">No Categories Found</td></tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- 4th Category -->
                    <div class="card-body">
                        <h4>Facial</h4>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $category4 = getAll('category4');

                                    if(mysqli_num_rows($category4) > 0) {
                                        foreach($category4 as $item4) {
                                            ?>
                                                <tr>
                                                    <td><?= $item4['service']; ?></td>
                                                    <td>Rs. <?= $item4['price']; ?></td>
                                                    <td><a href="" class="btn btn-primary">Edit</a></td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else {
                                        echo '<tr><td colspan="4" style="text-align: center;">No Categories Found</td></tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
<?php include('include/footer.php'); ?>