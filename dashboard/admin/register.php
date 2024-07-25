<?php include("includes/header.php") ?>

<body class="user-profile">
<div class="wrapper ">
    <!-- common sidebar  -->
    <?php include("includes/sidebar.php") ?>

    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <?php include("includes/navbar.php") ?>
        <!-- End Navbar -->
        <div class="panel-header panel-header-md">
            <div class="header text-center">
                <h2 class="title text-4xl">Room Registration</h2>
                <p class="category">Register a room to a student</p>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Register a student</h5>
                            <span class="">
        <?php
        loggedIn();
        ?>
        <?php
        alertMessage();
        ?>
      </span>
                        </div>
                        <div class="card-body">
                            <form action="config/auth.php" method="POST">
                                <div class="row">

                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="fname" placeholder="student First Name"
                                                   >
                                        </div>
                                    </div>
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" name="lname" class="form-control" placeholder="Student last name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Hostel Name</label>
                                            <select name="hostel_num" class="form-control mr-2">
                                                <option value="">Select Hostel</option>
                                                <option value="kapeni">Kapeni</option>
                                                <option value="Ndilande">Ndilande</option>
                                                <option value="Nyika">Nyika</option>
                                                <option value="Hilide">Hilide</option>
                                                <option value="Mpingwe">Mpingwe</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <label>Room Number</label>
                                            <input type="text" name="room_num" class="form-control" placeholder="Room #" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="email" class="form-control"
                                                   placeholder="example@gmail.com" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 px-1 ml-2">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" name="phone" placeholder="contact number "
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="col-md-5 px-1">
                                        <div class="form-group">
                                            <label>Registration Number</label>
                                            <input type="text" name="reg_num" class="form-control" placeholder="Reg Number" value="">
                                        </div class="" >
                                        <div class="col-md-5 pl-1 float-end ml-auto">
                                            <button type="submit" name="sign-up-btn" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<?php include('includes/footer.php') ?>