<?php
// Get the current script name
$active_page = basename($_SERVER['PHP_SELF']);
?>

<div class="sidebar" data-color="orange">
    <div class="logo">
        <a href="../dashboard.php" class="simple-text logo-normal">
            HOSTEL MONITORING SYSTEM
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="<?= $active_page == 'dashboard.php' ? 'active' : '' ?> mb-4">
                <a href="./dashboard.php">
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="<?= $active_page == 'notifications.php' ? 'active' : '' ?> mb-4">
                <a href="./notifications.php">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="<?= $active_page == 'register.php' ? 'active' : '' ?> mb-4">
                <a href="./register.php">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>Room Registration</p>
                </a>
            </li>
            <li class="<?= $active_page == 'users.php' ? 'active' : '' ?> mb-4">
                <a href="./users.php">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Registered Students</p>
                </a>
            </li>
            <li class="<?= $active_page == 'profile.php' ? 'active' : '' ?> mb-4">
                <a href="./profile.php">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Profile</p>
                </a>
            </li>


        </ul>

    </div>

</div>