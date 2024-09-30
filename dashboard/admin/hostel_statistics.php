<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title>Room B 3.14 Statistics</title>
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
   <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
   <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.css" rel="stylesheet" />
</head>

<body>
<div class="wrapper ">
   <?php include("includes/sidebar.php") ?>

   <div class="main-panel" id="main-panel">
      <?php include("includes/navbar.php") ?>
      <div class="panel-header panel-header-md">
         <div class="header text-center">
            <h2 class="title">Room B 3.14 Statistics</h2>
         </div>
      </div>
      <div class="content">
         <div class="row">
            <!-- Daily Usage (Hours) -->
            <div class="col-md-12 mt-4">
               <div class="card">
                  <div class="card-header">
                     <h5 class="title">Daily Usage (Hours)</h5>
                  </div>
                  <div class="card-body">
                     <canvas id="dailyUsageChart"></canvas>
                  </div>
               </div>
            </div>

            <!-- Weekly Statistics -->
            <div class="col-md-12 mt-4">
               <div class="card">
                  <div class="card-header">
                     <h5 class="title">Weekly Statistics</h5>
                  </div>
                  <div class="card-body">
                     <canvas id="weeklyStatisticsChart"></canvas>
                  </div>
               </div>
            </div>

            <!-- Monthly Statistics -->
            <div class="col-md-12 mt-4">
               <div class="card">
                  <div class="card-header">
                     <h5 class="title">Monthly Statistics</h5>
                  </div>
                  <div class="card-body">
                     <canvas id="monthlyStatisticsChart"></canvas>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include("includes/footer.php") ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
<script>
    // Daily Usage Chart
    var ctxDaily = document.getElementById('dailyUsageChart').getContext('2d');
    var dailyUsageChart = new Chart(ctxDaily, {
        type: 'line',
        data: {
            labels: ['00:00', '01:00', '02:00', '03:00', '04:00', '05:00', '06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'],
            datasets: [{
                label: 'Usage throughout the day',
                data: [5, 7, 3, 4, 6, 8, 10, 12, 15, 18, 20, 22, 21, 19, 17, 16, 14, 12, 10, 8, 6, 5, 4, 3],
                borderColor: 'rgba(255, 99, 132, 1)',
                fill: false,
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Weekly Statistics Chart
    var ctxWeekly = document.getElementById('weeklyStatisticsChart').getContext('2d');
    var weeklyStatisticsChart = new Chart(ctxWeekly, {
        type: 'bar',
        data: {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            datasets: [{
                label: 'Total usage over the week',
                data: [50, 60, 55, 70, 65, 80, 75],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Monthly Statistics Chart
    var ctxMonthly = document.getElementById('monthlyStatisticsChart').getContext('2d');
    var monthlyStatisticsChart = new Chart(ctxMonthly, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Total usage over months',
                data: [30, 25, 40, 20, 50, 35, 45, 40, 50, 60, 55, 65],
                borderColor: 'rgba(75, 192, 192, 1)',
                fill: false,
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>
