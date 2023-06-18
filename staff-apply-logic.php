<?php
require './admin/config/database.php';

if (isset($_POST['submit'])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $detail = filter_var($_POST['detail'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$username) {
        $_SESSION['staff-apply'] = "Please enter your minecraft username.";
    } elseif (!$name) {
        $_SESSION['staff-apply'] = "Please enter your name.";
    } elseif (!$email) {
        $_SESSION['staff-apply'] = "Please enter your email.";
    } elseif (!$detail) {
        $_SESSION['staff-apply'] = "Please enter your detail.";
    } else {
        //insert post into database
        $query = "INSERT INTO applications SET username = '$username', name = '$name', email = '$email', detail = '$detail'";
        $result = mysqli_query($connection, $query);

        if (!mysqli_errno($connection)) {
            $_SESSION['staff-apply-success'] = "application sented successfully.";
            header('location: ' . ROOT_URL . 'staff.php');
            die();
        }
    }
}

else {
    header('location: ' . ROOT_URL . 'staff.php');
    die();
}
