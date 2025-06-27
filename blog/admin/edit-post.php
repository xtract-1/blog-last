<?php
include 'partial/header.php';
?>


<section class="form-section">
    <div class="container form-section_container">
        <h2>Edit Post</h2>

        <form action="" enctype="multipart/form-data">

            <input type="text" placeholder="Title">
            <select>
                <option value="1">travel</option>
                <option value="2">Art</option>
                <option value="3">Science</option>
                <option value="4">Technology</option>
                <option value="5">travel</option>
                <option value="6">travel</option>



            </select>

            <textarea rows="10" placeholder="Body"> </textarea>
            <div class="form-control">
                <input type="checkbox" id="is_featured" checked>
                <label for="is_featured">Featured</label>
            </div>

            <div class="form_control ">
                <label for="thumbnail">Change Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>


            </textarea>


            <button type="submit" class="btn">Update Post</button>


        </form>




    </div>
</section>

<?php
include '../partial/footer.php';
?>