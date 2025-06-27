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

                <li><a href="index.php" class="active"> <i class="fa fa-search" aria-hidden="true"></i>
                        <h5> Manage Post</h5>
                    </a></li>
                <?php if (isset($_SESSION['user_is_admin'])) : ?>
                    <li><a href="add_user.php"> <i class="fa fa-search" aria-hidden="true"></i>
                            <h5> Add User</h5>
                        </a></li>
                    <li><a href="manage-users.php"> <i class="fa fa-search" aria-hidden="true"></i>
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
            <h2> DASHBOARD</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>category</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Reason for the development of drain</td>
                        <td>Artr</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="<?= ROOT_url ?>404.php" class="btn sm danger">Delete</a></td>

                    </tr>

                    <tr>
                        <td>Reason for the development of drain</td>
                        <td>Politics</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="<?= ROOT_url ?>404.php" class="btn sm danger">Delete</a></td>

                    </tr>

                    <tr>
                        <td>Reason for the development of drain</td>
                        <td>Agriculture</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="<?= ROOT_url ?>404.php" class="btn sm danger">Delete</a></td>

                    </tr>
                </tbody>
            </table>


        </main>
    </div>


</section>



<!-- ===========================end of category  btn=======================================-->

<?php
// include 'partial/footer.php';
?>