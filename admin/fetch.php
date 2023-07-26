<?php

    include('../config/dbcon.php');

    if(isset($_POST['request'])){

        $request = $_POST['request'];

        $query = "SELECT * FROM `ratecard` WHERE `category_id` = '$request'";
        $result = mysqli_query($con, $query);

        $count = mysqli_num_rows($result);
        ?>

        <table class="table table-bordered table-striped">
            <?php
                if($count){
            ?>
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Service</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                }else{
                    echo "<tr><td colspan='5'><center>No Data Found</center></td></tr>";
                }
                ?>
            </thead>
            <tbody>
                <?php
                    while($item = mysqli_fetch_assoc($count)){
                ?>
                    <tr>
                        <td><?= $item['id']; ?></td>
                        <td><?= $item['service']; ?></td>
                        <td>Rs. <?= $item['price']; ?></td>
                        <td>
                            <a href="edit-category.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-primary">
                                Edit
                            </a>
                        </td>
                        <td>
                            <a href="delete-category.php?id=<?= $item['id']; ?>" class="btn btn-sm btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <?php
    }
?>