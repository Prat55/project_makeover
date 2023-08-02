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
                        <h4>Manage Categories</h4>
                    </div>
                    <!-- 1st Category -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Category</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $categories = getAll('categories');

                                    if(mysqli_num_rows($categories) > 0) {
                                        foreach($categories as $item) {
                                ?>
                                <tr>
                                    <td><?= $item['id']; ?></td>
                                    <td><?= $item['category']; ?></td>
                                    <td>
                                        <a href="edit-category.php?id=<?= $item['id']; ?>"
                                            class="btn btn-sm btn-primary">
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="delete-category.php?id=<?= $item['id']; ?>"
                                            class="btn btn-sm btn-danger">
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