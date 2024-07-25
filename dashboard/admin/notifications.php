<?php include('includes/header.php')  ?>

<body class="">



  <div class="wrapper ">

    <!-- commmon sidebar  -->
    <?php include("includes/sidebar.php") ?>


    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <?php include("includes/navbar.php") ?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-md">
        <div class="header text-center">
          <h2 class="title text-4xl">Notifications</h2>
          <p class="category">VIEW ALL NOTIFICATION</p>
        </div>
      </div>
      <div class="content">
        <div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header flex justify-between">
                <div>
                  <h4 class="card-title">All Notifications</h4>
                </div>
                <div class="float-end text-end ml-auto">
                  <span class="float-end">
                    <input type="text" class="border-2 rounded-md p-2 border-orange-300 " placeholder="search notif..">
                  </span>
                </div>
              </div>

              <div class="card-body">
                <div class="alert alert-primary">
                  <button type="button" aria-hidden="true" class="close">
                    <i class="now-ui-icons ui-1_simple-remove opacity-7" ></i>
                  </button>
                  <span>Room 101 has excessive use of power over threshold at 12:00 am</span>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="places-buttons">
                  <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                      <h4 class="card-title">
                        Notifications Places
                        <p class="category">Click to view notifications</p>
                      </h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','left')">Top Left</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','center')">Top Center</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','right')">Top Right</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto">
                      <div class="row">
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','left')">Bottom Left</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','center')">Bottom Center</button>
                        </div>
                        <div class="col-md-4">
                          <button class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('bottom','right')">Bottom Right</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>



    </div>
  </div>



  <?php include("includes/footer.php") ?>