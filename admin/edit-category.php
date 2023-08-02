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
                <?php 
                if (isset($_GET['id']))
                {
                    $id = $_GET['id'];

                    $categories = getCategory('categories',$id);

                    if(mysqli_num_rows($categories) > 0){
                        $data = mysqli_fetch_array($categories);
                    ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Category</h4>
                    </div>

                    <form action="code.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                    <label>Category Name</label>
                                    <input type="text" name="category" value="<?= $data['category']; ?>"
                                        class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <button type="submit" class="btn btn-primary"
                                        name="update_category_btn">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                    }
                }
                else{
                    echo "Id not found";
                }   
                ?>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
<?php include('include/footer.php'); ?>