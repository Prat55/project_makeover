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
                if (isset($_GET['id']) && isset($_GET['category']) && isset($_GET['service']))
                {
                    $id = $_GET['id'];
                    $service = $_GET['service'];
                    $category = $_GET['category'];

                    $ratecard = getByService('ratecard',$id,$service);

                    if(mysqli_num_rows($ratecard) > 0){
                        $data = mysqli_fetch_array($ratecard);
                    ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Category</h4>
                    </div>

                    <form action="code.php" method="post">
                        <div class="card-body">
                            <h4>
                                <?= $category; ?>
                            </h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                    <label>Service</label>
                                    <input type="text" name="service" value="<?= $data['service']; ?>"
                                        class="form-control" required>
                                </div>
                                <div class="col-md-5">
                                    <label>Price</label>
                                    <input type="text" name="price" value="<?= $data['price']; ?>" class="form-control"
                                        required>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <button type="submit" class="btn btn-primary"
                                        name="update_sub_category_btn">Update</button>
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