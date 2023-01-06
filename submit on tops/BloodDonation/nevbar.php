<?php
$mainurl = "http://localhost/php6pmTTS/project/BloodDonation/";
$baseurl = "http://localhost/php6pmTTS/project/BloodDonation/assets/";
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

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- bootstrap logo -->
    <link rel="icon" type="image/x-icon" href="<?php echo $baseurl; ?>/image/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- nevbar start here -->
            <div class="col-md-3 " style="background:brown;">
                <nav class="navbar navbar-expand-lg navbar-light  ">
                    <div class="row">
                        <div class="col-md-9">
                            <a class="navbar-brand" style="color:white;" href="<?php echo $mainurl; ?>">&nbsp;<i
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
                                                href="<?php echo $mainurl; ?>login">&nbsp;<i
                                                    class="bi bi-box-arrow-in-right"> <b>Login</b></i></a>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="nav-item">
                                                <a class="nav-link" style="color:white;"
                                                    href="<?php echo $mainurl; ?>">&nbsp;<i class="bi bi-house">
                                                        <b>Home</b></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="nav-item">
                                                <a class="nav-link" style="color:white;"
                                                    href="<?php echo $mainurl; ?>donate_receive">&nbsp;<i
                                                        class="bi bi-heart-pulse"></i> <b>Donate / Receive</b></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="nav-item">
                                                <a class="nav-link" style="color:white;"
                                                    href="<?php echo $mainurl; ?>contact_us">&nbsp;<i
                                                        class="bi bi-telephone"> <b>Contact Us</b></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="nav-item">
                                                <a class="nav-link" style="color:white;"
                                                    href="<?php echo $mainurl; ?>about_us">&nbsp;<i
                                                        class="bi bi-info-circle"> <b>About Us</b></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>