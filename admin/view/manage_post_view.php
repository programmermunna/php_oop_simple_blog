<?php

    $posts = $obj->display_post();

    if(isset($_GET['status'])){
        if($_GET['status']=='delete'){
            $id = $_GET['id'];
            $del_msg = $obj->delete_post($id);
        }
    }



?>

<h2>manage post</h2>
<?php if(isset($del_msg)){ echo $del_msg; } ?>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Content</td>
                <td>Image</td>
                <td>Author</td>
                <td>Date</td>
                <td>Category</td>
                <td>Tag</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            while($postdata=mysqli_fetch_assoc($posts)){
               $post_id = $postdata['post_id']; 
               $post_title = $postdata['post_title']; 
               $post_content = $postdata['post_content']; 
               $post_author = $postdata['post_author']; 
               $post_date = $postdata['post_date']; 
               $post_ctg = $postdata['post_ctg']; 
               $post_tag = $postdata['post_tag']; 
               $post_status = $postdata['post_status']; 
               ?>
            <tr>
                <td><?php echo $post_id; ?></td>
                <td><?php echo $post_title; ?></td>
                <td><?php echo $post_content ?></td>
                <td><img height='50px' width='100px' src="../upload/<?php echo $postdata['post_img']?>" alt=""></td>
                <td><?php echo $post_author; ?></td>
                <td><?php echo $post_date; ?></td>
                <td><?php echo $post_ctg ; ?></td>
                <td><?php echo $post_tag; ?></td>
                <td><?php 
                    if($post_status==1){
                        echo "Published";
                    }else{
                        echo "Unpublished";
                    }
                ?></td>
                <td>
                    <a class="btn btn-primary" href="update_post.php?status=edit&&id=<?php echo $post_id ?>&&title=<?php echo $post_title ?>&&content=<?php echo $post_content ?>&&tag=<?php echo $post_tag ?>">Edit</a>
                    <a class="btn btn-danger" href="?status=delete&&id=<?php echo $post_id ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>