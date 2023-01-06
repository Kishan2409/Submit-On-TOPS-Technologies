
<?php
$mainurl = "http://localhost/php6pmTTS/project/BloodDonation/admin/";
$baseurl = "http://localhost/php6pmTTS/project/BloodDonation/admin/assets/";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Blood Donation</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="<?php echo $baseurl; ?>css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- datatable css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- datatable js-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </Script>

    <!-- bootstrap logo -->
    <link rel="icon" type="image/x-icon" href="<?php echo $baseurl; ?>/image/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- nevbar start here -->
            <div class="col-md-3" style="background:brown;">
                <nav class="navbar navbar-expand-lg navbar-light  ">
                    <div class="row">
                        <div class="col-md-9">
                            <a class="navbar-brand" style="color:white;" href="<?php echo $mainurl; ?>dashboard">&nbsp;<i
                                    class="bi bi-droplet-half"></i><b> Blood Donation</b></i></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;
                            <button style="border:2px solid white;" class="navbar-toggler" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="text-white bi bi-list"></span>
                            </button>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse navbar-collapse" id="navbarText">
                                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <div class="col-md-12 ">
                                        <div class="nav-item">
                                            <a class="nav-link active " style="color:white;" aria-current="page"
                                                href="<?php echo $mainurl; ?>profile">&nbsp;<i
                                                    class="bi bi-box-arrow-in-left"></i><b> Profile</b></a>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="nav-item">
                                                <a class="nav-link" style="color:white;"
                                                    href="<?php echo $mainurl; ?>dashboard">&nbsp;<i
                                                        class="bi bi-universal-access">
                                                    </i><b> Dashboard</b></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="nav-item">
                                                <a class="nav-link" style="color:white;"
                                                    href="<?php echo $mainurl; ?>user">&nbsp;<i
                                                        class="bi bi-person-fill">
                                                    </i><b> User</b></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="nav-item">
                                                <a class="nav-link" style="color:white;"
                                                    href="<?php echo $mainurl; ?>blood">&nbsp;<i
                                                        class="bi bi-heart-pulse"></i><b> Blood</b></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="nav-item">
                                                <a class="nav-link" style="color:white;"
                                                    href="<?php echo $mainurl; ?>hospital">&nbsp;<i
                                                        class="bi bi-hospital"></i><b> Hospital</b></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="nav-item">
                                                <a class="nav-link" style="color:white;"
                                                    href="<?php echo $mainurl; ?>message">&nbsp;<i class="bi bi-inbox">
                                                        <b>Messages</b></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>