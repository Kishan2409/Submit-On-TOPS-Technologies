<!-- nevbar -->
<div class="row">
    <div class="col-md-12 mt-3 ">
        <nav class="navbar nev-color navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand me-md-5 text-white" href="<?php echo $mainurl; ?>dashboard"><i
                        class="bi bi-droplet-half"></i><b> Blood
                        Donation</b></a>
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link ms-md-5 active text-white" aria-current="page"
                                href="<?php echo $mainurl; ?>profile"><i class="bi bi-box-arrow-in-left"></i><b>
                                    Profile</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-md-5 text-white" href="<?php echo $mainurl; ?>dashboard"><i
                                    class="bi bi-universal-access">
                                </i><b> Dashboard</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-md-5 text-white" href="<?php echo $mainurl; ?>user"><i
                                    class="bi bi-person-fill">
                                </i><b> User</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-md-5 text-white" href="<?php echo $mainurl; ?>blood"><i
                                    class="bi bi-heart-pulse"></i><b>
                                    Blood</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-md-5 text-white" href="<?php echo $mainurl; ?>hospital"><i
                                    class="bi bi-hospital"></i><b>
                                    Hospital</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms-md-5 text-white" href="<?php echo $mainurl; ?>message"><i
                                    class="bi bi-inbox"></i><b>
                                    Message</b></a>
                        </li>
                        <li class="nav-item">
                            <?php
                            if (isset($_SESSION['a_id'])) { ?>
                                <a class="nav-link ms-md-5 text-white" href="<?php echo $mainurl; ?>?admin-logout"
                                    onclick="return confirm('Are you sure to Logout as admin ?')"><i
                                        class="bi bi-box-arrow-left">
                                    </i><b> Logout</b></a>
                            <?php
                            }
                            ?>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>