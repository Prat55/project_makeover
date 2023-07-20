<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="assets\images\logo\rosh logo.svg" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="../../../css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
    <link href="assets/css/app.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Roshni - Makeup Artist | Admin</title>

    <style>
        .bg-green{
            background-color: #198754;
            color: #fff;
        }

        .active{
            background: #3f4a4f;
        }
        
        .gallery-collection img{
            height: 100px;
            width: 100px;
            margin: 20px;
        }

        .navitem{
            height: 0px;
            width: 100%;
            position: absolute;
            left: 0;
            background: rgba(0, 0, 0, 0.2);
            top: 58px;
            overflow: hidden;
        }

        .mobile-toggle-menu{
            position: relative;
        }

        .mobile-toggle-menu:hover .navitem{
            height: 200px;
        }
    </style>
</head>

<body class="bg-theme bg-theme2 pace-done">
    
    <?php include('sidebar.php'); ?>
    <?php include('navbar.php'); ?>