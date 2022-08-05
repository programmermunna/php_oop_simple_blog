<?php

    $display_category = $obj->display_category();

    if(isset($_POST['add_post'])){
        $msg = $obj->add_post($_POST);
    }



?>

<h2>add post</h2>
<?php if(isset($msg )){ echo $msg; } ?>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label class="small mb-1" for="post_title">Post Title</label>
        <input type="text" name="post_title" class="form-control py-4" id="post_title">
    </div>
    <div class="form-group">
        <label class="small mb-1" for="post_content">Post content</label>
        <input type="textarea" name="post_content" class="form-control py-4" id="post_content">
    </div>
    <div class="form-group">
        <label class="small mb-1" for="post_img">Upload Thumbnail</label><br>
        <input type="file" name="post_img" class="" id="post_img">
    </div>
    <div class="form-group">
        <label class="small mb-1" for="post_summery">Post Summery</label>
        <input type="text" name="post_summery" class="form-control py-4 " id="post_summery" >
    </div>
    <div class="form-group">
        <label class="small mb-1" for="post_category">Post Category</label>
        <select class="form-control" name="post_category" id="post_category">
            <!-- ---------------------------------- -->
            <?php 
            while($category = mysqli_fetch_assoc($display_category)){ ?>
                <option value="<?php echo $category['cat_name'] ?>"><?php echo $category['cat_name'] ?></option>

            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="small mb-1" for="post_tag">Post tags</label>
        <input type="text" name="post_tag" class="form-control py-4 " id="post_tag" >
    </div>
    <div class="form-group">
        <label class="small mb-1" for="cat_name">Author Name</label>
        <input type="text" name="author" class="form-control py-4 " id="author" value="Admin">
    </div>
    <div class="form-group">
        <label class="small mb-1" for="post_status">Post Status</label>
        <select class="form-control" name="post_status" id="post_status">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>
        <input type="submit" name="add_post" class="form-control btn btn-block btn-primary" value="Submit">
</form>