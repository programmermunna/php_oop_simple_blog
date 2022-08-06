<?php

  $posts = $obj->limit_post();



?>

<div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <?php
                 while($post=mysqli_fetch_assoc($posts)){ 

                  if(($post['post_status']==1)){  ?>

                 <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="./upload/<?php echo $post['post_img'];?>" alt="img">
                    </div>
                    <div class="down-content">
                      <span><?php echo $post['post_ctg']?></span>
                      <a href="single_post.php?view=post_view&&id=<?php echo $post['post_id']?>"><h4><?php echo $post['post_content']?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $post['post_author'];?></a></li>
                        <li><a href="#"><?php echo $post['post_date'];?></a></li>
                        <li><a href="#"><?php echo $post['post_comment'];?></a></li>
                      </ul>
                      <p><?php echo $post['post_summery'];?></p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#"><?php echo $post['post_tag'];?></a>,</li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 </div>
                
                <?php  } }  ?>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.php">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>