<?php
  


    if(isset($_GET['status'])){
        if($_GET['status']=='edit'){
            $post_id = $_GET['id'];
            $title = $_GET['title'];
            $content = $_GET['content'];
            $tag = $_GET['tag'];
           // $post_msg = $obj->update_post($post_id);
        }
    }

    if(isset($_POST['update_post'])){
        $up_post = $obj->update_post($_POST);
    }




?>



<h2>Update Post</h2>
<?php if(isset($up_post)){echo "$up_post";} ?>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label class="small mb-1" for="post_title">Post title</label>
        <input type="text" name="post_title" class="form-control py-4" id="post_title" value="<?php echo $title; ?>">
    </div>
    <div class="form-group">
        <label class="small mb-1" for="post_content">Post Content</label>
        <input type="textarea" name="post_content" class="form-control py-4" id="post_content" value="<?php echo $content; ?>">
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
        <select class="form-control" name="post_category" id="post_category" >
        <?php 
          $display_category = $obj->display_category();
          while($category = mysqli_fetch_assoc($display_category)){ ?>
            <option value="<?php echo $category['cat_name'] ?>"><?php echo $category['cat_name'] ?></option>

            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label class="small mb-1" for="post_tag">Post tag</label>
        <input type="text" name="post_tag" class="form-control py-4 " id="post_tag" value="<?php echo $tag; ?>">
    </div>
    <div class="form-group">
        <label class="small mb-1" for="post_author">Author Name</label>
        <input type="text" name="post_author" class="form-control py-4 " id="author" value="Admin">
    </div>
    <div class="form-group">
        <label class="small mb-1" for="post_status">Post Status</label>
        <select class="form-control" name="post_status" id="post_status">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>
         <input type="hidden" name="edit_post_id" value="<?php echo $post_id; ?>">
        <input type="submit" name="update_post" class="form-control btn btn-block btn-primary" value="Update Post">
</form>