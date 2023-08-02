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
                        <h4>Add Rate Card</h4>
                    </div>
                    <form action="code.php" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Category List</label>
                                    <?php 
                                        $category = getAll('categories');

                                        if(mysqli_num_rows($category)){
                                            ?>
                                    <select name="category_id" required class="form-control">
                                        <option class="text-black" value="">-- Select Category --</option>
                                        <?php
                                            foreach($category as $categoryitem){
                                                ?>
                                        <option class="text-black" value="<?= $categoryitem['id']; ?>">
                                            <?= $categoryitem['category']; ?></option>
                                        <?php
                                            }
                                            ?>
                                    </select>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Service</label>
                                    <input type="text" name="service" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="">Price</label>
                                    <input type="text" name="price" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="add_subcategory">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
<?php include('include/footer.php'); ?>