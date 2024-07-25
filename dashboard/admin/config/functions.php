<?php

  session_start();

require('connect.php');

// authenticate
// if(!isset($_SESSION['LoggedIn'])){
//   $_SESSION['error']='Login First to access the dashboard';
//   header("Location: ../login.php");

// }ff

// function for validating input data inputs
function validate($inputData)
{
  global $conn;
  $validateData = mysqli_real_escape_string($conn, $inputData);
  return trim($validateData);
}
// function for redirecting 1 page to another page
function redirect($url, $status)
{

  $_SESSION['status'] = $status;
  header('location: ' . $url);
}
// function for displaying messages or status process , 

function alertMessage()
{
  if (isset($_SESSION['status'])) {
    echo '<div class="m-2 alert alert-success text-danger alert-dismissible fade show" role="alert">
    ' . $_SESSION['status'] . '
    <button type="button" class="btn-close  text-danger" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';

    unset($_SESSION['status']);
  }
}
// function for displaying messages or status process/// not used yet , 

function toast()
{
  if (isset($_SESSION['status'])) {

    echo '<div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
    ' . $_SESSION['status'] . '
    </div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>';
    unset($_SESSION['status']);
  }
}
// function for displaying messages or status process for logged in or error logged in

function loggedIn()
{
  if (isset($_SESSION['error']) && $_SESSION['error'] != '') {
    echo '<div class="p-3 alert alert-dark text-danger alert-dismissible fade show" role="alert">
  <h6 class="text-center"> ' . $_SESSION['error'] . '</h6>
</div>';

    unset($_SESSION['error']);
  }
}

// function for inserting operations
function insert($tableName, $data)
{
  global $conn;
  $table = validate($tableName);
  $columns = array_keys($data);
  $values = array_values($data);
  $finalColumn = implode(',', $columns);
  $finalValues = "'" . implode("', '",  $values) . "'";
  $sql = "INSERT INTO $table ($finalColumn) VALUES ($finalValues)";
  $result = mysqli_query($conn, $sql);
  return $result;
}
// function code for updating data

function update($tableName, $id, $data)
{
  global $conn;
  $table = validate($tableName);
  $id = validate($id);
  $updateStringData = "";
  foreach ($data as $column => $value) {
    $updateStringData .=  $column . '=' . "'$value',";
  }
  $finalUpdateData = substr(trim($updateStringData), 0, -1);
  $sql = "UPDATE $table SET $finalUpdateData WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  return $result;
}
// get all
function getAll($tableName, $status = Null)
{  
  global $conn;
  $table = validate($tableName);
  $status = validate($status);

  if ($status == 'status') {
    $sql = "SELECT * FROM $table WHERE status= '0'";
  } else {
    $sql = "SELECT * FROM $table";
  }
  return mysqli_query($conn, $sql);
}
// get all specific
function getAll_1($tableName, $status = Null)
{  
  global $conn;
  $table = validate($tableName);
  $status = validate($status);

  if ($status == 'status') {
    $sql = "SELECT * FROM $table WHERE usertype='admin'";
  } else {
    $sql = "SELECT * FROM $table";
  }
  return mysqli_query($conn, $sql);
}

//end get all

function getById($tableName, $id)
{
  global $conn;
  $table = validate($tableName);
  $id = validate($id);
  $sql = " SELECT * FROM $table WHERE id ='$id' LIMIT= 1";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      $response = [
        'status' => 200,
        'data' => $row,
        'message' => 'Record found'

      ];
      return $response;
    } else {
      $response = [
        'status' => 404,
        'message' => ' No Record found'

      ];
    }
  }
}

// function for deleting data from the database
function delete($tableName, $id)
{
  global $conn;
  $table = validate($tableName);
  $id = validate($id);
  $sql = "DELETE FROM $table WHERE id='$id' LIMIT=1";
  $result = mysqli_query($conn, $sql);
  return $result;
}
// function for logging out 
function  logoutSession()
{
  unset($_SESSION['LoggedIn']);
  unset($_SESSION['UserDetails']);
}

function jsonResponse($status, $status_type, $message)
{

  $response = [
    'status' => $status,
    'status_type' => $status_type,
    'message' => $message,
  ];
  echo json_encode($response);
  return;
}
// function for counting number of rows in a table
function rows($table)
{
  global $conn;

  $sql = "SELECT * FROM $table";
  $result = mysqli_query($conn, $sql);
  if ($row = mysqli_num_rows($result)) {
    echo '<h5 class=" text-start">' . $row . '</h5>';
  } else {
    echo '<h5 class="p-2 text-center">0</h5>';
  }
}

