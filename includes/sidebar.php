<?php

  $posts = $obj->limit_post();
  $catdata = $obj->display_category();




?>

<div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>

                      <?php
                 while($post=mysqli_fetch_assoc($posts)){ 

                  if(($post['post_status']==1)){  ?>

                        <li><a href="post-details.html">
                          <h5><?php echo $post['post_content']?></h5>
                          <span><?php echo $post['post_date']?></span>
                        </a></li>

                   <?php  } }  ?>

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                        
                        <?php
                        while($cat = mysqli_fetch_assoc($catdata)){

                            ?>
                        <li><a href="#"><?php echo $cat['cat_name']; ?>

                        <?php   }  ?>
                      </ul>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>