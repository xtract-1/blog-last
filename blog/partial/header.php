<?php
require 'admin/config/database.php';

if (isset($_SESSION['users_id'])) {
    $id = filter_var($_SESSION['users_id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avater FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $avater = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php & mysuil with admin panel</title>
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>


<body>
    <nav>
        <div class="container nav-container">
            <a href="<?= ROOT_url ?>index.php" class="nav-logo">MAX</a>
            <ul class="nav-items">
                <li><a href="<?= ROOT_url ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_url ?>about.php">About</a></li>
                <li><a href="<?= ROOT_url ?>services.php">services</a></li>
                <li><a href="<?= ROOT_url ?>contact.php">Contact</a></li>
                <?php if (isset($_SESSION['users_id'])) : ?>

                    <li class="nav-profile">
                        <div class="avater">
                            <img src="<?= ROOT_url . 'images/' . $avater['avater'] ?>">
                        </div>

                        <ul>
                            <li><a href="<?= ROOT_url ?>admin/index.php">Dashboard</a></li>
                            <li><a href="<?= ROOT_url ?>logout.php">log out</a></li>
                        </ul>
                    <?php else : ?>
                    <li><a href="<?= ROOT_url ?>signin.php">Sign in</a></li>

                <?php endif ?>
            </ul>
            <button id="open_nav-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close_nav-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>
    <!-- ===========================end of nav =======================================-->