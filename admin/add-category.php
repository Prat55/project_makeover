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
                        <h4>Add Category</h4>
                    </div>
                    <form action="code.php" method="post">
                        <div class="card-body">
                            <h4>Eyebrow and Forehead</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">Service</label>
                                    <input type="text" name="service" class="form-control" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Price</label>
                                    <input type="text" name="price" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="add_category1_btn" >Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="code.php" method="post">
                        <div class="card-body">
                            <h4>Wax-Honey</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">Service</label>
                                    <input type="text" name="service" class="form-control" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Price</label>
                                    <input type="text" name="price" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="add_category2_btn" >Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="code.php" method="post">
                        <div class="card-body">
                            <h4>Wax-Richa,Creme,Chocolate,Beaan Wax</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">Service</label>
                                    <input type="text" name="service" class="form-control" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Price</label>
                                    <input type="text" name="price" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="add_category3_btn" >Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="code.php" method="post">
                        <div class="card-body">
                            <h4>Facial</h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">Service</label>
                                    <input type="text" name="service" class="form-control" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Price</label>
                                    <input type="text" name="price" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="add_category4_btn" >Save</button>
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