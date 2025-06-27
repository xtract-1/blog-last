<?php
include 'partial/header.php';


//getback form data from the form
// $fname = $_SESSION['add-user-data']['fname'] ?? null;
// $lname = $_SESSION['add-user-data']['lname'] ?? null;
// $username = $_SESSION['add-user-data']['username'] ?? null;
// $email = $_SESSION['add-user-data']['email'] ?? null;
// $password = $_SESSION['add-user-data']['password'] ?? null;
// $confirm_password = $_SESSION['add-user-data']['confirm_password'] ?? null;
// unset($_SESSION['add-user-data'])
?>


<section class="form-section">
    <div class="container form-section_container">
        <h2>Add User</h2>
        <?php if (isset($_SESSION['add-user'])) : ?>
            <div class="alert-message error">
                <p><?= $_SESSION['add-user'];
                    unset($_SESSION['add-user']); ?></p>
            </div>
        <?php endif ?>

        <form action="<?= ROOT_url ?>admin/add_user_logic.php" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="First Name" name="fname">
            <input type="text" placeholder="Last Name" name="lname">
            <input type="text" placeholder="Username" name="username">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Create Password" name="password">
            <input type="name" placeholder="Confirm Password" name="confirm_password">

            <select name="user_role">
                <option value="1">Author</option>
                <option value="2">Admin</option>
            </select>


            <div class="form-control">
                <label for="avater"></label>
                <input type="file" id="avater">
            </div>

            <button type="submit" class="btn">Add User</button>







        </form>





</section>
<?php
include '../partial/footer.php';
?>