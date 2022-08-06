<?php include('admin/class/function.php');
    $obj = new adminBlog();
    
    if(isset($_GET['view'])){
        if(($_GET['view']='post_view')){
            $id = $_GET['id'];

            $single = $obj->post_info($id);

            if($single){
                $post = mysqli_fetch_assoc($single);
            }
        }
    }

    



    ?>
    
    <?php include_once("includes/head.php") ?>
    <body>
    <?php include_once("includes/preloader.php") ?>
    <!-- ----------------preloader -->
    <!-- Header -->
    <?php include_once("includes/header.php") ?>
    <!-- Page Content -->
    <?php include_once("includes/banner2.php") ?>

    <?php include_once("includes/cta.php") ?>
    <!-- -----------------call to action -->
     <section class="blog-posts">
      <div class="container">
        <div class="row">
        <div class="col-lg-8">
            <img width='750' height='300' src="upload/<?php echo $post['post_img']; ?>" alt="img">
            <br>
            <br>
            <h2><?php echo $post['post_title']; ?></h2>
            <br>
            <p><?php echo $post['post_content']; ?></p>
            <hr>
            <p><strong>Category </strong>: &nbsp &nbsp <?php echo $post['post_ctg']; ?></p>
            <p><strong>Tag </strong>&nbsp &nbsp &nbsp &nbsp &nbsp: &nbsp &nbsp <?php echo $post['post_tag']; ?></p>


        </div>
        <?php include_once("includes/sidebar.php") ?>
     </div>
    </section>
    <?php include_once("includes/footer.php") ?>
    <?php include_once("includes/script.php") ?>
    </body>
    </html>