<?php include('dashboard/admin/config/functions.php');


//if (isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn']) {
//    header('Location: dashboard/admin/dashboard.php');
//    exit();
//}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>H M S | Log in</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100 font-sans">
<!-- form -->
<form action="dashboard/admin/config/auth.php" method="POST"
      class="max-w-md w-full border-2 border-gray-100 p-8 rounded-lg bg-white shadow-sm">
    <!-- <h1 class="text-orange-500 text-center text-2xl font-semibold mb-4">Log In</h1> -->

    <div class="flex justify-center mb-4">
        <i class="fas fa-user-circle text-orange-500 text-8xl"></i>
    </div>

    <div class="formcontainer text-center ">
        <span class="">
        <?php
                loggedIn();
        ?>
        <?php
        alertMessage();
        ?>
      </span>
        <div class="container text-left ">
            <!-- <label for="uname" class="block font-medium text-gray-700"><strong>Username</strong></label> -->
            <input type="text" placeholder="Enter Username" name="username"
                   class="w-full p-2 mb-3 mt-3 border border-gray-300 rounded-lg"/>
            <!-- <label for="mail" class="block font-medium text-gray-700"><strong>E-mail</strong></label>
            <input type="text" placeholder="Enter E-mail" name="mail" class="w-full p-4 mb-4 border border-gray-300 rounded-lg"> -->
            <!-- <label for="psw" class="block font-medium text-gray-700"><strong>Password</strong></label> -->
            <input type="password" placeholder="Enter Password" name="password"
                   class="w-full p-2 mb-3 mt-3 border border-gray-300 rounded-lg"/>
            <button name="sign_Btn" type="submit"
                    class="bg-orange-500 text-white h-10 w-full rounded-lg hover:opacity-80 transition-opacity">
                <strong>SIGN IN</strong>
            </button>
            <div class=" bg-gray-100 p-2  mt-4 rounded-lg flex items-center">
            <span class="float-right ml-auto"><a href="#"
                                                 class="text-blue-500 hover:underline">Forgot password?</a></span>
            </div>
        </div>

    </div>


</form>
</body>

</html>