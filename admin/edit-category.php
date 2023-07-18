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
                <?php 
                if (isset($_GET['id']) && isset($_GET['service']))
                {
                    $id = $_GET['id'];
                    $service = $_GET['service'];

                    $category1 = getByService("category1", $id, $service);
                    $category2 = getByService("category2", $id, $service);
                    $category3 = getByService("category3", $id, $service);
                    $category4 = getByService("category4", $id, $service);

                    if(mysqli_num_rows($category1) > 0){
                        $data1 = mysqli_fetch_array($category1);
                    ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Category</h4>
                            </div>
                            <form action="code.php" method="post">
                                <div class="card-body">
                                    <h4>Eyebrow and Forehead</h4>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="hidden" name="id" value="<?= $data1['id']; ?>">
                                            <label>Service</label>
                                            <input type="text" name="service" value="<?= $data1['service']; ?>" class="form-control" required>
                                        </div>
                                        <div class="col-md-5">
                                            <label>Price</label>
                                            <input type="text" name="price" value="<?= $data1['price']; ?>" class="form-control" required>
                                        </div>
                                        <div class="col-md-2">
                                            <br>
                                            <button type="submit" class="btn btn-primary" name="update_category_btn1" >Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php 
                    }else if(mysqli_num_rows($category2) > 0){
                        $data2 = mysqli_fetch_array($category2);
                    ?>
                        <div class="card">
                        <form action="code.php" method="post">
                                <div class="card-body">
                                    <h4>Wax-Honey</h4>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="hidden" name="id" value="<?= $data2['id'] ?>">
                                            <label for="">Service</label>
                                            <input type="text" name="service" value="<?= $data2['service'] ?>"  class="form-control" required>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="">Price</label>
                                            <input type="text" name="price" value="<?= $data2['price'] ?>" class="form-control" required>
                                        </div>
                                        <div class="col-md-2">
                                            <br>
                                            <button type="submit" class="btn btn-primary" name="update_category_btn2" >Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
                    }else if(mysqli_num_rows($category3) > 0){
                        $data3 = mysqli_fetch_array($category3);
                        ?>
                        <div class="card">
                            <form action="code.php" method="post">
                                <div class="card-body">
                                    <h4>Wax-Richa,Creme,Chocolate,Beaan Wax</h4>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="hidden" name="id" value="<?= $data3['id'] ?>">
                                            <label for="">Service</label>
                                            <input type="text" name="service" value="<?= $data3['service'] ?>"  class="form-control" required>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="">Price</label>
                                            <input type="text" name="price" value="<?= $data3['price'] ?>" class="form-control" required>
                                        </div>
                                        <div class="col-md-2">
                                            <br>
                                            <button type="submit" class="btn btn-primary" name="update_category_btn3" >Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
                    }else if(mysqli_num_rows($category4) > 0){
                        $data4 = mysqli_fetch_array($category4);
                        ?>
                        <div class="card">
                            <form action="code.php" method="post">
                                <div class="card-body">
                                    <h4>Facial</h4>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="hidden" name="id" value="<?= $data4['id'] ?>">
                                            <label for="">Service</label>
                                            <input type="text" name="service" value="<?= $data4['service'] ?>"  class="form-control" required>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="">Price</label>
                                            <input type="text" name="price" value="<?= $data4['price'] ?>" class="form-control" required>
                                        </div>
                                        <div class="col-md-2">
                                            <br>
                                            <button type="submit" class="btn btn-primary" name="update_category_btn4" >Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
                    }
                    else{
                        echo "<h4>No Category Found</h4>";
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