<?php
global $conn;
include("includes/header.php");

$search = '';
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}

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
                <h2 class="title text-4xl">REGISTERED STUDENTS</h2>
                <p class="category">Names of students accommodated </p>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header flex justify-between">
                            <div>
                                <h4 class="card-title"> LIST</h4>
                            </div>
                            <div class="float-end text-end ml-auto">
                                <form action="" method="GET" class="flex items-center">
                                    <input type="text" name="search" class="border-2 rounded-md p-2 border-orange-300"
                                           placeholder="search stud.." value="<?php echo htmlspecialchars($search); ?>">
                                    <button type="submit" class="ml-2 bg-orange-500 text-white px-4 py-2 rounded-md">
                                        Search
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
<!--                            successful & unsuccessful deletion -->

                            <div class="table-responsive">
                                <?php
                                if (isset($_SESSION['message'])) {
                                    echo "<div class='alert alert-success w-50 text-center ml-auto mr-auto'>{$_SESSION['message']}</div>";
                                    unset($_SESSION['message']);
                                }
                                ?>
                                <table class="table">
                                    <thead class="text-orange-500 font-bold opacity-6 rounded-md">
                                    <tr class="text-center  ">
                                        <th>f-name</th>
                                        <th>l-name</th>
                                        <th>Email</th>
                                        <th>Reg-#</th>
                                        <th>H-name</th>
                                        <th>Room-#</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql = "SELECT * FROM students";
                                    if ($search != '') {
                                        $sql .= " WHERE fname LIKE '%$search%' OR lname LIKE '%$search%' OR email LIKE '%$search%' OR reg_num LIKE '%$search%' OR hostel_num LIKE '%$search%' OR room_num LIKE '%$search%'";
                                    }
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>
                                            <td>{$row['fname']}</td>
                                            <td>{$row['lname']}</td>
                                            <td>{$row['email']}</td>
                                            <td>{$row['reg_num']}</td>
                                            <td>{$row['hostel_num']}</td>
                                            <td>{$row['room_num']}</td>
                                            <td>
                                                <span class='mr-2'><i class='fa fa-edit text-blue-500'></i></span>
                                                <form action='config/auth.php' method='POST' class='inline'>
                                                    <input type='hidden' name='student_id' value='{$row['student_id']}'>
                                                    <button type='submit' name='btn-delete' class='ml-3 text-orange-500'>
                                                        <i class='fa fa-trash'></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>";
                                    }
                                    ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>
