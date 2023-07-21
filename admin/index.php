<?php 
include('../middleware/adminMiddleware.php');
include('include/header.php');
?>
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="card radius-10">
			<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group g-0">
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<?php
								$dash_service1 = getAll('category1');
								
								if($services_total1 = mysqli_num_rows($dash_service1)){
									?>
										<h5 class="mb-0"><?= $services_total1 ?></h5>
									<?php
								}
								else{
									?>
										<h5 class="mb-0">No Data Found!</h5>
									<?php
								}

							?>
							<!-- <div class="ms-auto">
                                <i class='bx bx-price fs-3 text-white'></i>
							</div> -->
						</div>
						<hr>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Eyebrow and Forehead</p>
							<!-- <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p> -->
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<?php
								$dash_service2 = getAll('category2');
								
								if($services_total2 = mysqli_num_rows($dash_service2)){
									?>
										<h5 class="mb-0"><?= $services_total2 ?></h5>
									<?php
								}
								else{
									?>
										<h5 class="mb-0">No Data Found!</h5>
									<?php
								}

							?>
							<!-- <div class="ms-auto">
								<i class='bx bx-cart fs-3 text-white'></i>
							</div> -->
						</div>
						<hr>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Wax-Honey</p>
							<!-- <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p> -->
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<?php
								$dash_service3 = getAll('category3');
								
								if($services_total3 = mysqli_num_rows($dash_service3)){
									?>
										<h5 class="mb-0"><?= $services_total3 ?></h5>
									<?php
								}
								else{
									?>
										<h5 class="mb-0">No Data Found!</h5>
									<?php
								}

							?>
							<!-- <div class="ms-auto">
								<i class='bx bx-cart fs-3 text-white'></i>
							</div> -->
						</div>
						<hr>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Wax-Richa,Creme,Chocolate,Beaan Wax</p>
							<!-- <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p> -->
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<?php
								$dash_service4 = getAll('category4');
								
								if($services_total4 = mysqli_num_rows($dash_service4)){
									?>
										<h5 class="mb-0"><?= $services_total4 ?></h5>
									<?php
								}
								else{
									?>
										<h5 class="mb-0">No Data Found!</h5>
									<?php
								}

							?>
							<!-- <div class="ms-auto">
								<i class='bx bx-cart fs-3 text-white'></i>
							</div> -->
						</div>
						<hr>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Facial</p>
							<!-- <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p> -->
						</div>
					</div>
				</div>
			</div><!--end row-->
		</div>
        <!--end row-->
		<div class="card radius-10">
			<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group g-0">
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<?php
								$dash_service5 = getAll('images');
								
								if($services_total5 = mysqli_num_rows($dash_service5)){
									?>
										<h5 class="mb-0"><?= $services_total5 ?></h5>
									<?php
								}
								else{
									?>
										<h5 class="mb-0">No Data Found!</h5>
									<?php
								}

							?>
							<!-- <div class="ms-auto">
                                <i class='bx bx-price fs-3 text-white'></i>
							</div> -->
						</div>
						<hr>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Images</p>
							<!-- <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p> -->
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<?php
								$dash_service6 = getAll('newsletter');
								
								if($services_total6 = mysqli_num_rows($dash_service6)){
									?>
										<h5 class="mb-0"><?= $services_total6 ?></h5>
									<?php
								}
								else{
									?>
										<h5 class="mb-0">No Data Found!</h5>
									<?php
								}

							?>
							<!-- <div class="ms-auto">
								<i class='bx bx-cart fs-3 text-white'></i>
							</div> -->
						</div>
						<hr>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Newsletter</p>
							<!-- <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p> -->
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<?php
								$dash_service7 = getAll('form-data');
								
								if($services_total7 = mysqli_num_rows($dash_service7)){
									?>
										<h5 class="mb-0"><?= $services_total7 ?></h5>
									<?php
								}
								else{
									?>
										<h5 class="mb-0 fs-6">No Recent Enquiries</h5>
									<?php
								}

							?>
							<!-- <div class="ms-auto">
								<i class='bx bx-cart fs-3 text-white'></i>
							</div> -->
						</div>
						<hr>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Enquiries</p>
							<!-- <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p> -->
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<?php
								$dash_service4 = getAll('category4');
								
								if($services_total4 = mysqli_num_rows($dash_service4)){
									?>
										<h5 class="mb-0"><?= $services_total4 ?></h5>
									<?php
								}
								else{
									?>
										<h5 class="mb-0">No Data Found!</h5>
									<?php
								}

							?>
							<!-- <div class="ms-auto">
								<i class='bx bx-cart fs-3 text-white'></i>
							</div> -->
						</div>
						<hr>
						<div class="d-flex align-items-center text-white">
							<p class="mb-0">Facial</p>
							<!-- <p class="mb-0 ms-auto"><span><i class='bx bx-up-arrow-alt'></i></span></p> -->
						</div>
					</div>
				</div>
			</div><!--end row-->
		</div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
<?php include('include/footer.php'); ?>