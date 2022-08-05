<?php include('class/function.php');
    $obj = new adminBlog();

    session_start();
    $id = $_SESSION['adminID'];
    if(empty($id)){
        header('location:index.php');
    }

    if(isset($_GET['admin_logout'])){
        if($_GET['admin_logout']=='logout'){
            $obj->admin_logout();
        }
    }
?>











<?php include_once('includes/head.php'); ?>
    <body class="sb-nav-fixed">
<?php include_once('<includes/topnav.php'); ?>

        <div id="layoutSidenav">
        <?php include_once('<includes/sidenav.php'); ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php
                        if(isset($view)){
                            if($view=="dashboard"){
                                include("view/dash_view.php");
                            }elseif($view=="add_category"){
                                include("view/add_cat_view.php");
                            }elseif($view=="manage_category"){
                                include("view/manage_cat_view.php");
                            }elseif($view=="add_post"){
                                include("view/add_post_view.php");
                            }elseif($view=="manage_post"){
                                include("view/manage_post_view.php");
                            }elseif($view=="up_category"){
                                include("view/update_cat_view.php");
                            }elseif($view=="up_post"){
                                include("view/update_post_view.php");
                            }
                            

                        }

                        
                        ?>
                    </div>
                </main>
                <?php include_once('<includes/footer.php'); ?>
            </div>
        </div>
        <?php include_once('<includes/script.php'); ?>
    </body>
</html>
