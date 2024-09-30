<?php

global $conn;
include("functions.php");

if (isset($_POST['sign_Btn'])) {

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username) && empty($password)) {
        $_SESSION['status'] = "Username and Password are required";
        header("location: ../../../index.php");
        exit();
    } elseif (empty($username)) {
        $_SESSION['status'] = 'Username is required';
        header("location: ../../../index.php");
        exit();
    } elseif (empty($password)) {
        $_SESSION['status'] = 'Password is required';
        header("location:../../../index.php");
        exit();
    } else {
        $sql = "SELECT * FROM `users` WHERE username='$username' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $hashedPassword = $row['password'];
                if (!password_verify($password, $hashedPassword)) {
                    $_SESSION['status'] = "Invalid password!";
                    header("location: ../../../index.php");
                    exit();
                }
                $_SESSION['LoggedIn'] = true;
                $_SESSION['UserDetails'] = [
                    'user_id' => $row['user_id'],
                    'username' => $row['username'],
                    'email' => $row['email'],
                    'role' => $row['role'],
                    'password' => $row['password'],
                ];
                header("location: ../dashboard.php");
                exit();
            } else {
                $_SESSION['error'] = "We don't have these credentials in our records";
                header("location: ../../../index.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "These credentials do not match our records";
            header("location: ../../../index.php");
            exit();
        }
    }
}


//register new room/user


if (isset($_POST['sign-up-btn'])) {
    $student_id = validate($_POST['student_id']);
    $fname = validate($_POST['fname']);
    $lname = validate($_POST['lname']);
    $phone = validate($_POST['phone']);
    $hostel_num = validate($_POST['hostel_num']);
    $room_num = validate($_POST['room_num']);
    $email = validate($_POST['email']);
    $reg_num = validate($_POST['reg_num']);

    // Conditions
    if (empty($fname) || empty($lname) || empty($phone) || empty($email) || empty($hostel_num) || empty($room_num) || empty($reg_num)) {
        redirect('../register.php', 'Please fill all the fields');
    } else {
        // Using prepared statements to prevent SQL injection
        $sql = "SELECT * FROM students WHERE email=? AND reg_num=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $email, $reg_num);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                // Student already registered
                redirect('../register.php', 'Student with these credentials is already registered');
            } else {
                $sql_insert = "INSERT INTO students (student_id, fname, lname, phone, email, hostel_num, room_num, reg_num) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt_insert = mysqli_prepare($conn, $sql_insert);
                mysqli_stmt_bind_param($stmt_insert, 'isssssss', $student_id, $fname, $lname, $phone, $email, $hostel_num, $room_num, $reg_num);
                $result_insert = mysqli_stmt_execute($stmt_insert);

                if ($result_insert) {
                    redirect('../users.php', 'Student created successfully');
                } else {
                    redirect('../register.php', 'Something went wrong!');
                }
            }
        } else {
            // Debugging information
            error_log("Query error: " . mysqli_error($conn));
            redirect('../register.php', 'Problem in adding student');
        }
    }
}




//delete() student



if (isset($_POST['btn-delete'])) {
    $student_id = $_POST['student_id'];

    if (!empty($student_id)) {
        $sql = "DELETE FROM students WHERE student_id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'i', $student_id);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            $_SESSION['message'] = "student has been successfully deleted.";
        } else {
            $_SESSION['message']  = "Failed to delete student record.";
        }

        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['message'] = "Invalid student ID.";
    }

    mysqli_close($conn);
    header("Location: ../users.php?message=" .   $_SESSION['message']);
    exit();
} else {
    header("Location: ../users.php");
    exit();
}

//updating users
if (isset($_POST['update-btn'])) {

    $username = validate($_POST['username']);
//    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);


//    $userid = validate($_POST['user_id']);



    if (empty($username) || empty($email) || empty($password)) {
        redirect('../profile.php', 'Please fill all the fields');
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $sql =  "UPDATE users SET 
        username ='$username',
        email ='$email',
        password= '$hashed_password', 
        WHERE id='$userid';
        ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            redirect('../profile.php', 'User updated successfully');
        } else {
            redirect('../profile.php', 'Some went wrong');
        }
    }
}