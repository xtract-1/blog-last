<?php
require 'admin/config/constants.php';

//getback form data from the form.
$fname = $_SESSION['signup-data']['fname'] ?? null;
$lname = $_SESSION['signup-data']['lname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$password = $_SESSION['signup-data']['password'] ?? null;
$confirm_password = $_SESSION['signup-data']['confirm_password'] ?? null;
unset($_SESSION['signup-data'])
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BLOGIZ</title>
  <link rel="stylesheet" href="<?= ROOT_url ?>css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
</head>

<body>

  <section class="form-section">
    <div class="container form-section_container">
      <h2>Sign Up</h2>

      <?php if (isset($_SESSION['signup'])) : ?>
        <div class="alert-message error">
          <p><?= $_SESSION['signup'];
              unset($_SESSION['signup']); ?></p>
        </div>
      <?php endif ?>

      <form action="<?= ROOT_url ?>signup_logic.php" method="POST" enctype="multipart/form-data">
        <input type="text" placeholder="First Name" value="<?= $fname ?>" name="fname">
        <input type="text" placeholder="Last Name" value="<?= $lname ?>" name="lname">
        <input type="text" placeholder="Username" value="<?= $username ?>" name="username">
        <input type="email" placeholder="Email" value="<?= $email ?>" name="email">
        <input type="password" placeholder="Create Password" value="<?= $password ?>" name="password">
        <input type="name" placeholder="Confirm Password" value="<?= $confirm_password ?>" name="confirm_password">

        <div class="form-control">
          <label for="avatar">Upload Avatar</label>
          <input type="file" id="avater" name="avater">
        </div>

        <button type="submit" name="submit" class="btn">Sign Up</button>
        <small>Already have an account? <a href="signin.php">Sign In</a></small>
      </form>
    </div>
  </section>

</body>

</html>