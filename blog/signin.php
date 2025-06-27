<?php
require 'admin/config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;
unset($_SESSION['signin-data']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BLOGIZ</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
</head>

<body>

  <section class="form-section">
    <div class="container form-section_container">
      <h2>LOGIN</h2>
      <?php if (isset($_SESSION['signup-success'])) : ?>
        <div class="alert-message sucess">
          <p>
            <?= $_SESSION['signup-success'];
            unset($_SESSION['signup-success']); ?></p>
        </div>

      <?php elseif (isset($_SESSION['signin'])) : ?>
        <div class="alert-message error">
          <p>
            <?= $_SESSION['signin'];
            unset($_SESSION['signin']); ?></p>
        </div>
      <?php endif ?>



      <form action="<?= ROOT_url ?>signin_logic.php" method="POST">

        <input type="text" placeholder="username or email" name="username_email" value="<?= $username_email ?>">

        <input type="password" placeholder="Enter password" name="password" value="<?= $password ?>">


        <button type="submit" name="submit" class="btn">login</button>
        <small>Dont have an account signup<a href="signup.php">Sign up</a></small>

      </form>




    </div>
  </section>
</body>

</html>