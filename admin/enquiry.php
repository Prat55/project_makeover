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
                <h2>Enquiries</h2>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>Form No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact no.</th>
                                <th>Interested in</th>
                                <th>recieved_on</th>
                                <th>Remove</th>
                            </thead>
                            <tbody>
                                <?php
                                    $formdata = getRev('form-data', 'recieved_on');

                                    if(mysqli_num_rows($formdata) > 0) {
                                        foreach($formdata as $item) {
                                            ?>
                                                <tr>
                                                    <td><?= $item['id']; ?></td>
                                                    <td><?= $item['name']; ?></td>
                                                    <td><?= $item['email']; ?></td>
                                                    <td><?= $item['phone']; ?></td>
                                                    <td><?= $item['course']; ?></td>
                                                    <td><?= $item['recieved_on']; ?></td>
                                                    <td>
                                                        <a href="../functions/form-submit.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-danger">
                                                            Remove
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else {
                                        echo '<tr><td colspan="7" style="text-align: center;">No Enquiries Found</td></tr>';
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