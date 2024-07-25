
<?php
global $conn;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Hostel Monitoring System</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="includes/styles.css" rel="stylesheet" />
  
</head>

<body>
  <div class="wrapper ">
    <?php include("includes/sidebar.php") ?>

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <?php include("includes/navbar.php") ?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-md ">
        <div class="header text-center">
          <h2 class="title">Dashboard</h2>
          <p class="category">View all rooms</p>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">All Rooms</h5>
              </div>
              <div class="card-body all-icons">
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM students";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                  <div class='font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6' data-occupied='true'>
                    <div class='font-icon-detail'>
                      <p>{$row['room_num']}</p> 
                      <p>{$row['hostel_num']}</p>
                    </div>
                  </div>
                  ";
}
                    ?>



                    <!-- Add more rooms as needed -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




  <?php include("includes/footer.php") ?>