<?php 
    if (isset($_SESSION['message']) == 'success') { ?>
            <div class="alert border-0 alert-dismissible fade show py-2">
                <div class="d-flex align-items-center">
                    <div class="font-35 text-white"><i class='bx bxs-check-circle'></i></div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-white">Success</h6>
                        <div class="text-white"><?= $_SESSION['message']; ?></div>
                        <!-- <div class="text-white">A simple success alert—check it out!</div> -->
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        unset($_SESSION['message']);
    }
    else if(isset($_SESSION['message']) == 'error') {
        ?>
        <div class="alert border-0 alert-dismissible fade show py-2">
            <div class="d-flex align-items-center">
                <div class="font-35 text-white"><i class='bx bxs-message-square-x'></i>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-white">Alert!</h6>
                    <div class="text-white"><?= $_SESSION['message']; ?></div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        unset($_SESSION['message']);
    }
?>