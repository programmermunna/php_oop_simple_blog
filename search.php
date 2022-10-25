<?php include('admin/class/function.php');
    $obj = new adminBlog();
    
    if(isset($_POST['submit'])){
        $obj->search_post($_POST);
        
      }
    
    ?>
    
    <?php include_once("includes/head.php") ?>
    <body>
    <?php include_once("includes/preloader.php") ?>
    <!-- ----------------preloader -->
    <!-- Header -->
    <?php include_once("includes/header.php") ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php include_once("includes/banner2.php") ?>
    <!-- Banner Ends Here -->
    <!-- -----------------call to action -->
     <section class="blog-posts">
        <div class="row">
    <?php include_once("includes/search_page.php") ?>

     </div>
    </section>
    <?php include_once("includes/footer.php") ?>
    <?php include_once("includes/script.php") ?>
    </body>
    </html>               
   
 
