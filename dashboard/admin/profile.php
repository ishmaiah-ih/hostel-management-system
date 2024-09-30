<?php global $conn;

include("includes/header.php");


?>
<?php
//include('config/functions.php');


?>
    <body class="">

    <div class="wrapper ">
        <!-- common sidebar -->
        <?php include("includes/sidebar.php") ?>

        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <?php include("includes/navbar.php") ?>

            <!-- End Navbar -->
            <div class="panel-header panel-header-md">
                <div class="header text-center">
                    <h2 class="title text-4xl">PROFILE</h2>
                    <p class="category">Admin Profile </p>
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <!--start  -->
                            <div class=" py-4">
                                <form action="config/auth.php" method="post">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header pb-0">
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0">Edit Profile</p>

                                                        <!--                                                        <button type="submit" class="btn btn-primary btn-sm ms-auto" name="update-btn">Update</button>-->
                                                        <?php alertMessage() ?>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="text-sm text-orange-400 opacity-7 font-bold">Admin/Warden
                                                        Information</p>
                                                    <div class="row">
                                                        <input type="hidden" name="userid"
                                                               value="<?php echo $_SESSION['UserDetails']['user_id']; ?>">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="example-text-input"
                                                                       class="form-control-label">Username</label>
                                                                <input class="form-control" type="text" name="username"
                                                                       value="<?php echo $_SESSION['UserDetails']['username'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="example-text-input"
                                                                       class="form-control-label">Email address</label>
                                                                <input class="form-control" type="email" name="email"
                                                                       value="<?php echo $_SESSION['UserDetails']['email'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="example-text-input"
                                                                       class="form-control-label">PassWord </label>
                                                                <input class="form-control" type="text" name="password"
                                                                       value="<?php echo $_SESSION['UserDetails']['password'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="example-text-input"
                                                                       class="form-control-label">Role </label>
                                                                <input class="form-control" type="text" readonly
                                                                       value="<?php echo $_SESSION['UserDetails']['role'] ?>">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <hr class="horizontal dark">
                                                    <p class=" text-sm text-orange-400 opacity-7 font-bold mt-3">Contact
                                                        Information</p>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="example-text-input"
                                                                       class="form-control-label">Address</label>
                                                                <input class="form-control" type="text"
                                                                       value="Chichiri, Blantyre 3.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="example-text-input"
                                                                       class="form-control-label">City</label>
                                                                <input class="form-control" type="text"
                                                                       value="Blantyre">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <hr class="horizontal dark">
                                                    <p class=" text-sm text-orange-400 opacity-7 font-bold mt-3">About
                                                        Admin</p>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="example-text-input"
                                                                       class="form-control-label">Warden</label>
                                                                <input class="form-control" type="text"
                                                                       value="Hostel Manger since 2003">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-sm ms-auto"
                                                                name="update-btn">Update
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- bg profile -->
                                            <div class="card card-profile">
                                                <img src="../assets/img/bak.jpg" alt="Image placeholder"
                                                     class="card-img-top">
                                                <div class="row justify-content-center">
                                                    <div class="col-4 col-lg-4 order-lg-2">
                                                        <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                                            <a href="javascript:;">
                                                                <img src="../assets/img/anje.jpg"
                                                                     class="rounded-circle w-100 h-100 border border-1  border-danger">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                                                    <div class="d-flex justify-content-between">
                                                        <a href="javascript:;"
                                                           class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
                                                        <a href="javascript:;"
                                                           class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i
                                                                    class="ni ni-collection"></i></a>
                                                        <a href="javascript:;"
                                                           class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
                                                        <a href="javascript:;"
                                                           class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i
                                                                    class="ni ni-email-83"></i></a>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">

                                                    <div class="text-center mt-4">
                                                        <h5>
                                                            ADMIN Warden <span class="font-weight-light">, 36</span>
                                                        </h5>
                                                        <div class="h6 font-weight-300">
                                                            <i class="ni location_pin mr-2"></i>Blantyre, Malawi
                                                        </div>
                                                        <div class="h6 mt-4">
                                                            <i class="ni business_briefcase-24 mr-2"></i>Hostel Manager
                                                        </div>
                                                        <div>
                                                            <i class="ni education_hat mr-2"></i>University of Malawi,
                                                            The Polytechnic
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>


                            <!--                            end   -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </body>


<?php include("includes/footer.php") ?>