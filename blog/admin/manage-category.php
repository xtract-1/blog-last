<?php
include 'partial/header.php';
?>

<section class="dashboard">
    <div class="container dashboard_container">
        <button id="show__side-bar-btn" class="sidebar__toggle"><i class="fa-solid fa-bars"></i></button>
        <button id="hide__side-bar-btn" class="sidebar__toggle"><i class="fa-solid fa-xmark"></i></button>
        <aside>
            <ul>
                <li><a href="add_post.php"> <i class="fa fa-search" aria-hidden="true"></i>
                        <h5> Add Post</h5>
                    </a></li>

                <li><a href="index.php"> <i class="fa fa-search" aria-hidden="true"></i>
                        <h5> Manage Post</h5>
                    </a></li>

                <?php if (isset($_SESSION['is_admin'])) : ?>!
                <li><a href="add_user.php"> <i class="fa fa-search" aria-hidden="true"></i>
                        <h5> Add User</h5>
                    </a></li>
                <li><a href="manage-users.php"> <i class="fa fa-search" aria-hidden="true"></i>
                        <h5> Manage Users</h5>
                    </a></li>

                <li><a href="add-category.php"> <i class="fa fa-search" aria-hidden="true"></i>
                        <h5> Add Category</h5>
                    </a></li>

                <li><a href="manage-category.php" class="active"> <i class="fa fa-search" aria-hidden="true"></i>
                        <h5> Add Category</h5>
                    </a></li>

            <?php endif ?>
            </ul>




        </aside>
        <main>
            <h2>Manage Category</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Travel</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Wild Life</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Music</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>

                </tbody>
            </table>


        </main>
    </div>


</section>



<!-- ===========================end of category  btn=======================================-->

<?php
//   
?>