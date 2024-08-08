<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$errors = array();


include_once('dbconnect.php');
include_once('errors.php');

session_start();


//Giris Kodu
if (isset($_POST['signin-btn'])) {
    $personnel_gmail = isset($_POST['personnel_gmail']) ? mysqli_real_escape_string($db, $_POST['personnel_gmail']) : '';
    $personnel_password = isset($_POST['personnel_password']) ? mysqli_real_escape_string($db, $_POST['personnel_password']) : '';

    if (empty($personnel_gmail)) {
        array_push($errors, "Username is required");
    }
    if (empty($personnel_password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $personnel_password = md5($personnel_password);
        $query = "SELECT * FROM personnel WHERE `personnel_gmail`='$personnel_gmail' AND `personnel_password`='$personnel_password'";
        $results = mysqli_query($db, $query);
        $userControl = mysqli_fetch_assoc($results);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['personnel_id'] = $userControl['personnel_id'];
            $_SESSION['branch_id'] = $userControl['branch_id'];
            $_SESSION['personnel_name'] = $userControl['personnel_name'];
            $_SESSION['personnel_surname'] = $userControl['personnel_surname'];
            $_SESSION['personnel_role'] = $userControl['personnel_role'];
            $_SESSION['personnel_gmail'] = $userControl['personnel_gmail'];
            $_SESSION['personnel_phone'] = $userControl['personnel_phone'];
            $_SESSION['personnel_job'] = $userControl['personnel_job'];
            $_SESSION['success'] = "You are now logged in";
            header('location:index.php');
        }
    } else {
        array_push($errors, "Wrong username/password combination");
    }
}
