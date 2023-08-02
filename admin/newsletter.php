<?php 

include('../middleware/adminMiddleware.php');
include('include/header.php');
?>
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
        <?php include('message.php'); ?>
            <div class="col-md-12">
                <h2>Newsletters</h2>
                
                <div class="card">
                    <div class="card-body">
                        <form action="../functions/newsubmit.php" method="post">
                            <button type="submit" name="clear_all" class="btn btn-sm btn-secondary mb-2">
                                Clear All
                            </button>
                        </form>
                        <table class="table table-bordered">
                            <thead>
                                <th>No.</th>
                                <th>Email</th>
                                <th>recieved_on</th>
                            </thead>
                            <tbody>
                            <?php
                                    $newsletter = getRev('newsletter', 'recieved_on');

                                    if(mysqli_num_rows($newsletter) > 0) {
                                        foreach($newsletter as $item) {
                                            ?>
                                                <tr>
                                                    <td><?= $item['id']; ?></td>
                                                    <td><?= $item['email']; ?></td>
                                                    <td><?= $item['recieved_on']; ?></td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else {
                                        echo '<tr><td colspan="3" style="text-align: center;">No recent newsletters</td></tr>';
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