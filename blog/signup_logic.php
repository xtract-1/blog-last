<?php
require 'admin/config/database.php';
// You should start the session to use $_SESSION

// get signup data if button was clicked
if (isset($_POST['submit'])) {
    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lname = filter_var($_POST['lname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirm_password = filter_var($_POST['confirm_password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avater = $_FILES['avater'];

    if (!$fname) {
        $_SESSION['signup'] = "please enter your fullname";
    } elseif (!$lname) {
        $_SESSION['signup'] = "please enter your last name";
    } elseif (!$username) {
        $_SESSION['signup'] = "please enter your username";
    } elseif (!$email) {
        $_SESSION['signup'] = "please enter a valid email";
    } elseif (strlen($password) < 8 || strlen($confirm_password) < 8) {
        $_SESSION['signup'] = "password shouldn't be less than 8+ characters";
    } elseif (!$confirm_password) { // corrected condition, it was wrongly checking username again
        $_SESSION['signup'] = "please enter your confirm password";
    } elseif (!$avater['name']) {
        $_SESSION['signup'] = "please add avater";

        // check if password match
    } else {
        if ($password !== $confirm_password) {
            $_SESSION['signup'] = "passwords do not match";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // check if email or username already exist
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);

            if (mysqli_num_rows($user_check_result) > 0) {
                $_SESSION['signup'] = "username or email already exist";
            } else {
                // work on avater
                $time = time();
                $avater_name = $time . $avater['name'];
                $avater_tmp_name = $avater['tmp_name']; // fixed typo: 'avater_tmp' → 'tmp_name'
                $avater_destination_path = 'images/' . $avater_name;

                $allowed_files = ['png', 'jpeg', 'jpg'];
                $extention = explode('.', $avater_name); // fixed: ',' → '.'
                $extention = strtolower(end($extention));

                if (in_array($extention, $allowed_files)) {
                    // make sure image is not too large
                    if ($avater['size'] < 1000000) {
                        // upload avater
                        move_uploaded_file($avater_tmp_name, $avater_destination_path);
                    } else {
                        $_SESSION['signup'] = "file size should be less than 1mb";
                    }
                } else {
                    $_SESSION['signup'] = "file should be jpeg, png or jpg";
                }
            }
        }
    }

    // If there's any error, redirect back with form data
    if (isset($_SESSION['signup'])) {
        $_SESSION['signup-data'] = $_POST;
        header('Location: ' . ROOT_url . 'signup.php'); // fixed: locatiOn → Location
        die();
    } else {
        // insert new user
        $insert_user_query = "INSERT INTO users (fname, lname, username, email, password, avater, is_admin) 
            VALUES ('$fname', '$lname', '$username', '$email', '$hashed_password', '$avater_name', 0)"; // fixed: wrong quotes & missing comma

        $insert_result = mysqli_query($connection, $insert_user_query);

        if (!mysqli_errno($connection)) {
            $_SESSION['signup-success'] = 'Registration Successful please login'; // fixed typo: 'signup-sucess' and quote mark
            header('Location: ' . ROOT_url . 'signin.php');
            die();
        }
    }
} else {
    header('Location: ' . ROOT_url . 'signup.php');
    die();
}
