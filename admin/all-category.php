<?php 

include('../middleware/adminMiddleware.php');
include('include/header.php');
?>
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert border-0 alert-dismissible fade show py-2">
				<div class="d-flex align-items-center">
					<div class="font-35 text-white"><i class='bx bxs-check-circle'></i></div>
					<div class="ms-3">
						<h6 class="mb-0 text-white"><?= $_SESSION['message']; ?></h6>
						<!-- <div class="text-white">A simple success alert—check it out!</div> -->
					</div>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                               
                                    $category1 = getAll('category1');

                                    if(mysqli_num_rows($categories_run) > 0) {
                                        foreach($categories_run as $item) {
                                            ?>
                                                <tr>
                                                    <td><?= $item['id']; ?></td>
                                                    <td><?= $item['service']; ?></td>
                                                    <td><?= $item['category']; ?></td>
                                                    <td>Rs. <?= $item['price']; ?></td>
                                                    <td>
                                                        <a href="edit-category.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-primary">
                                                            Edit
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="delete-category.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-danger">
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