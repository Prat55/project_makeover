<?php 

include('../middleware/adminMiddleware.php');
include('include/header.php');
?>
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-success alert-dismissible fade show">
                <strong>Hey!</strong>
                <strong><?= $_SESSION['message']; ?>.</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php
            unset($_SESSION['message']);
        }
        ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Rate Cards</h4>
                    </div>
                    <!-- 1st Category -->
                    <div class="card-body">
                        <h4>Eyebrow and Forehead</h4>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $category1 = getAll('category1');

                                    if(mysqli_num_rows($category1) > 0) {
                                        foreach($category1 as $item1) {
                                            ?>
                                                <tr>
                                                    <td><?= $item1['id']; ?></td>
                                                    <td><?= $item1['service']; ?></td>
                                                    <td>Rs. <?= $item1['price']; ?></td>
                                                    <td>
                                                        <a href="edit-category.php?id=<?= $item1['id']; ?>&service=<?= $item1['service']; ?>" class="btn btn-sm btn-primary">
                                                            Edit
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="delete-category.php?id=<?= $item1['id']; ?>&service=<?= $item1['service']; ?>&price=<?= $item1['price']; ?>&table=category1" class="btn btn-sm btn-danger">
                                                            Delete
                                                        </a>
                                                        <!-- <button type="submit" class = "btn btn-sm btn-danger delete_product_btn1" name="delete_product_btn1">
                                                            Delete
                                                        </button> -->
                                                    </td>
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
                                    <th>Sr. No</th>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    
                                    $category2 = getAll('category2');
                                    
                                    if(mysqli_num_rows($category2) > 0) {
                                        foreach($category2 as $item2) {
                                            ?>
                                                <tr>
                                                    <td><?= $item2['id']; ?></td>
                                                    <td><?= $item2['service']; ?></td>
                                                    <td>Rs. <?= $item2['price']; ?></td>
                                                    <td>
                                                        <a href="edit-category.php?id=<?= $item2['id']; ?>&service=<?= $item2['service']; ?>" class="btn btn-sm btn-primary">
                                                        Edit
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="delete-category.php?id=<?= $item2['id']; ?>&service=<?= $item2['service']; ?>&price=<?= $item2['price']; ?>&table=category2" class="btn btn-sm btn-danger">
                                                            Delete
                                                        </a>
                                                    </td>
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
                                    <th>Sr. No</th>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $category3 = getAll('category3');

                                    if(mysqli_num_rows($category3) > 0) {
                                        foreach($category3 as $item3) {
                                            ?>
                                                <tr>
                                                    <td><?= $item3['id']; ?></td>
                                                    <td><?= $item3['service']; ?></td>
                                                    <td>Rs. <?= $item3['price']; ?></td>
                                                    <td>
                                                        <a href="edit-category.php?id=<?= $item3['id']; ?>&service=<?= $item3['service']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="delete-category.php?id=<?= $item3['id']; ?>&service=<?= $item3['service']; ?>&price=<?= $item3['price']; ?>&table=category3" class="btn btn-sm btn-danger">
                                                            Delete
                                                        </a>
                                                    </td>
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
                                    <th>Sr. No</th>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $category4 = getAll('category4');

                                    if(mysqli_num_rows($category4) > 0) {
                                        foreach($category4 as $item4) {
                                            ?>
                                                <tr>
                                                    <td><?= $item4['id']; ?></td>
                                                    <td><?= $item4['service']; ?></td>
                                                    <td>Rs. <?= $item4['price']; ?></td>
                                                    <td>
                                                        <a href="edit-category.php?id=<?= $item4['id']; ?>&service=<?= $item4['service']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="delete-category.php?id=<?= $item4['id']; ?>&service=<?= $item4['service']; ?>&price=<?= $item4['price']; ?>&table=category4" class="btn btn-sm btn-danger">
                                                            Delete
                                                        </a>
                                                    </td>
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