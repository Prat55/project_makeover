<?php 

    include('../middleware/adminMiddleware.php');
    include('include/header.php');

?>
<!--start page wrapper -->
<div class="page-wrapper mb-50">
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
                <div class="col-md-8">
                    <div class="input-group mb-3">
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <input type="file" name="files[]" class="form-control" id="inputGroupFile02" multiple><hr>
                            <button type="submit" name="submit" class="input-group-text">Upload</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <span>Note: At a time 20 images can be upload</span>
                </div>
            </div>
            <div class="col-md-12">
                <h3 class="text-center">Images</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Image No</th>
                            <th>Image</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $images = getAll('images');
                            if(mysqli_num_rows($images) > 0) {
                                foreach($images as $image) {
                                    ?>
                                        <tr>
                                            <td><?= $image['id'] ?></td>
                                            <td><img src="../gallery/<?= $image['file_name']; ?>" alt="" width = "100px" height = "120px"></td>
                                            <td>
                                                <a href="delete-img.php?id=<?= $image['id']; ?>" class="btn   btn-danger">
                                                    Remove
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
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
<?php include('include/footer.php'); ?>