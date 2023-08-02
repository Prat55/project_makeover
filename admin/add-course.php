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
                        <h4>Add Courses</h4>
                    </div>
                    <form action="code.php" method="post">
                        <div class="card-body">
                            <h4></h4>
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">Course Name</label>
                                    <input type="text" name="course-name" class="form-control" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="">Seats</label>
                                    <input type="text" name="seats" class="form-control" required>
                                </div>
                                <div class="col-md-2">
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="add_course" >Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Courses</h4>
                    </div>
                    <!-- 1st Category -->
                    <div class="card-body">
                        
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Course No.</th>
                                    <th>Course Name</th>
                                    <th>Seats</th>
                                    <th>Announce On</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $courses = getRev('courses', 'announced_on');

                                    if(mysqli_num_rows($courses) > 0) {
                                        foreach($courses as $item) {
                                            ?>
                                                <tr>
                                                    <td><?= $item['id']; ?></td>
                                                    <td><?= $item['course-name']; ?></td>
                                                    <td><?= $item['seats']; ?></td>
                                                    <td><?= $item['announced_on']; ?></td>
                                                    <td>
                                                        <a href="remove-course.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-danger">
                                                            Remove
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else {
                                        echo '<tr><td colspan="5" style="text-align: center;">No active courses added!</td></tr>';
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