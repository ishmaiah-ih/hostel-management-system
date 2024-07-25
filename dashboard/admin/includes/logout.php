<?php
// Start the session
include ("../config/functions.php");

$_SESSION['status'] = "Logged out successfully!";


// Destroy the session
session_destroy();

// Redirect to index.php

header("Location: ../../../index.php ");
exit();
