
<?php

$posts = $obj->display_post();


?>

<div style="max-width:100%; display:flex; flex-wrap: wrap; justify-content: center; justify-content: flex-start;" >
<?php
                 while($post=mysqli_fetch_assoc($posts)){ 

                  if(($post['post_status']==1)){  ?>

    <div class="card" style="width:400px; margin:2%; ">
    <img src="./upload/<?php echo $post['post_img'];?>" alt="img">
    <div class="card-body">
        <h4 class="card-title"><a href="single_post.php?view=post_view&&id=<?php echo $post['post_id']?>"><h4><?php echo $post['post_content']?></h4></a></h4>
        <p class="card-text"><?php echo $post['post_summery'];?></p>
        <a href="single_post.php?view=post_view&&id=<?php echo $post['post_id']?>" class="btn btn-primary">See Profile</a>
    </div>
    </div>
                <?php  } }  ?>


</div>