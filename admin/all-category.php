<?php 

include('../middleware/adminMiddleware.php');
include('include/header.php');
?>
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
        <?php include('message.php') ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Rate Cards</h4>
                    </div>
                    <!-- 1st Category -->
                    <div class="card-body">
                        <form action="" class="pb-4">
                            <input type="text" class="filter_rows form-control mb-3" placeholder="Search this subcategories" data-for="1779746327">
                            <button type="submit" class="btn btn-sm btn-secondary">Search</button>
                        </form>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Service</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $categories = "SELECT r.*,c.category AS category FROM ratecard r, categories c WHERE c.id = r.category_id";
                                    $categories_run = mysqli_query($con, $categories);

                                    if(mysqli_num_rows($categories_run) > 0) {
                                        foreach($categories_run as $item) {
                                            ?>
                                <tr>
                                    <td><?= $item['id']; ?></td>
                                    <td><?= $item['service']; ?></td>
                                    <td><?= $item['category']; ?></td>
                                    <td>Rs. <?= $item['price']; ?></td>
                                    <td>
                                        <a href="edit-subcategory.php?id=<?= $item['id']; ?>&category=<?= $item['category'] ?>&service=<?= $item['service'] ?>"
                                            class="btn btn-sm btn-primary">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="delete-subcategory.php?id=<?= $item['id']; ?>"
                                            class="btn btn-sm btn-danger">
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
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
<?php include('include/footer.php'); ?>