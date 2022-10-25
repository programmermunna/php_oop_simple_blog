<?php include('admin/class/function.php');
    $obj = new adminBlog();
    
    ?>
    
    <?php include_once("includes/head.php") ?>
    <body>
    <?php include_once("includes/preloader.php") ?>
    <!-- ----------------preloader -->
    <!-- Header -->
    <?php include_once("includes/header.php") ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php include_once("includes/banner.php") ?>
    <!-- Banner Ends Here -->
    <?php // include_once("includes/cta.php") ?>
    <!-- -----------------call to action -->
     <section style="margin-top: 0;" class="blog-posts">
      <div class="container">
        <div class="row">
        <?php include_once("includes/blogpost.php") ?>
        <?php include_once("includes/sidebar.php") ?>
     </div>
    </section>
    <?php include_once("includes/footer.php") ?>
    <?php include_once("includes/script.php") ?>
    </body>
    </html>               
   
 
