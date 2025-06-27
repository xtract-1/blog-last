<?php

require 'admin/config/database.php';

if (isset($_POST['submit'])) {
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$username_email) {
        $_SESSION['signin'] = 'username or email required';
    } elseif (!$password) {
        $_SESSION['signin'] = 'password required';
    } else {
        // fetch user from  database
        $fetch_user_query = "SELECT * From users WHERE username = '$username_email' OR email = 'username_email'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if (mysqli_num_rows($fetch_user_result) == 1) {
            //convert the record into associative array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            //compare form password with database password
            if (password_verify($password, $db_password)) {
                //set user id 
                $_SESSION['users_id'] = $user_record['id'];
                if ($user_record['is_admin'] == 1) {
                    $_SESSION['$is_admin'] = true;
                }

                header('location:'  . ROOT_url . 'admin/');
            } else {
                $_SESSION['signin'] = 'please check your input';
            }
        } else {
            $_SESSION['signin'] = 'user does not exist';
        }
    } //if any problwm redirect back to siginn
    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location:' . ROOT_url . 'signin.php');
        die();
    }
} else {
    header('location: ' . ROOT_url . 'signin.php');
    die();
}


 


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Sanitize input

//     $email = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);
//     $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

//     // Check if fields empty
//     if (empty($email) || empty($password)) {
//         $_SESSION['signup'] = "Email and password are required.";
//         exit();
//     }

//     // Prepare statement to avoid SQL injection
//     $stmt = $connection->prepare("SELECT * FROM users WHERE email = ?");
//     $stmt->bind_param("s", $email); // "s" means string
//     $stmt->execute();

//     $result = $stmt->get_result();

//     // Check if email exist
//     if ($result->num_rows > 0) {
//         $user = $result->fetch_assoc();
//         $hashedPassword = $user['password'];

//         // Verify password
//         if (password_verify($password, $hashedPassword)) {
//             $_SESSION['signin'] = TRUE;
//             $_SESSION['user'] = $user; // optional: store user info
//             header("Location: blog.php");
//             exit();
//         } else {
//             $_SESSION['signup'] = "Incorrect password.";
//             header("Location: signin.php"); //
//             exit();
//         }
//     } else {
//         $_SESSION['signup'] = "No account found with that email.";
//         header("Location: signin.php");
//         exit();
//     }
// }