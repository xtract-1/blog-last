<?php
include 'partial/header.php';
?>

<section class="dashboard">
    <div class="container dashboard_container">
        <button id="show__sidebar-btn" class="sidebar__toggle"><i class="fa-solid fa-bars"></i></button>
        <button id="hide__sidebar-btn" class="sidebar__toggle"><i class="fa-solid fa-xmark"></i></button>
        <aside>
            <ul>
                <li><a href="add_post.php"> <i class="fa fa-search" aria-hidden="true"></i>
                        <h5> Add Post</h5>
                    </a></li>

                <li><a href="index.php"> <i class="fa fa-search" aria-hidden="true"></i>
                        <h5> Manage Post</h5>
                    </a></li>

                <?php if (isset($_SESSION['user_is_admin'])) : ?>
                    <li><a href="add_user.php"> <i class="fa fa-search" aria-hidden="true"></i>
                            <h5> Add User</h5>
                        </a></li>
                    <li><a href="manage-users.php" class="active"> <i class="fa fa-search" aria-hidden="true"></i>
                            <h5> Manage Users</h5>
                        </a></li>

                    <li><a href="add-category.php"> <i class="fa fa-search" aria-hidden="true"></i>
                            <h5> Add Category</h5>
                        </a></li>

                    <li><a href="manage-category.php"> <i class="fa fa-search" aria-hidden="true"></i>
                            <h5> Manage Category</h5>
                        </a></li>
                <?php endif ?>

            </ul>


        </aside>
        <main>
            <h2>Manage Users</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Emmanuel Dev</td>
                        <td>Developer</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>

                    <tr>
                        <td>Possible </td>
                        <td>Engineer</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>

                    <tr>
                        <td>Jane Dev</td>
                        <td>Developer</td>
                        <td><a href="edit-user.html" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>

                </tbody>
            </table>


        </main>
    </div>


</section>



<!-- ===========================end of category  btn=======================================-->

<?php
// include '../partial/footer.php';
?>