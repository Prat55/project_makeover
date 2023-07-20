        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript: void(0);" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">
                &copy; Copyright <span id="date">2023</span>
                All Rights Reserved by 
                <a href="#">
                    Rosh Makeover 
                </a> &
                Designed and Developed by 
                <a href="#">
                    Maestloper Media.
                </a>
            </p>
        </footer>
    </div>
    <!--end wrapper-->

    <!-- Jquery Cdn -->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
   
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/chartjs/chart.min.js"></script>
    <script src="assets/plugins/peity/jquery.peity.min.js"></script>
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#Transaction-History").DataTable({
                lengthMenu: [
                    [6, 10, 20, -1],
                    [6, 10, 20, "Todos"],
                ],
            });
        });
    </script>
    <script src="assets/js/dashboard-eCommerce.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
    <script>
        new PerfectScrollbar(".product-list");
        new PerfectScrollbar(".customers-list");
    </script>
    <script  
        src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js" integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ==" crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    </script>    
    <script src="assets/js/custom.js"></script>
</body>

</html>