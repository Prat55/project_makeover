<?php
session_start();
include('includes/login_header.php');
?>
<!--wrapper-->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <strong>Hey!</strong>
                        <strong><?= $_SESSION['message']; ?>.</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <?php
                        unset($_SESSION['message']);
                    }
                    ?>
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="p-4">
                                <div class="mb-3 text-center">
                                    <img src="assets/images/logo-icon.png" width="60" alt="" />
                                </div>
                                <div class="text-center mb-4">
                                    <h5 class="">Admin Login</h5>
                                    <p class="mb-0">Please log in to your account</p>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" action="functions/authcode.php" method="post">
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="inputEmailAddress"
                                                placeholder="jhon@example.com" />
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" name="password" class="form-control border-end-0"
                                                    id="inputChoosePassword" value="" placeholder="Enter Password" />
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class="bx bx-hide"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" name="login-btn" class="btn btn-light">
                                                    Login
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end wrapper-->
<?php include('includes/login_footer.php'); ?>