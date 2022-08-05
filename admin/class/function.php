<?php

    Class adminBlog{
        private $conn;

        public function __construct(){
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $dbname = 'blogproject';

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

            if(!$this->conn){
                die("Database Connection Error!");
            }
        }

        public function admin_login($data){
            $admin_email=$data['email'];
            $admin_pass=md5($data['password']);

            $query="SELECT * FROM admin_info";
            if(mysqli_query($this->conn,$query)){
                $admin_info = mysqli_query($this->conn,$query);

                if($admin_info){
                    $admin_data=mysqli_fetch_assoc($admin_info);
                    if($admin_email==$admin_data['admin_email'] && $admin_pass==$admin_data['admin_pass']){
                        header('location:dashboard.php');
                        session_start();
                        $_SESSION['adminID'] = $admin_data['id'];
                        $_SESSION['adminName'] = $admin_data['admin_name'];
                         }
                }else{
                    header('location:index.php');

                }

            }

        }

        public function admin_logout(){
           unset($_SESSION['adminID']) ;
           unset($_SESSION['adminName']);
           header('location:index.php');
        }
        // this area for logout section 

        public function add_category($data){
            $cat_name = $data['cat_name'];
            $cat_des = $data['cat_des'];

            $query = "INSERT INTO category(cat_name,cat_des)  VALUE('$cat_name','$cat_des') "; 
            if(mysqli_query($this->conn,$query)){
                return "Category added successfully!";
            }
        }

        public function display_category(){
            $query = "SELECT * FROM category";
            if(mysqli_query($this->conn,$query)){
                $category = mysqli_query($this->conn,$query);
                return $category;
            }
        }

        public function delete_category($id){
            $query = "DELETE FROM category WHERE cat_id=$id";
            if(mysqli_query($this->conn,$query)){
                return "Category Deleted Successfully!";
            }
        }

        public function update_cat($data){
            $edit_cat_id = $data['edit_id'];
            $edit_cat_name = $data['edit_cat_name'];
            $edit_cat_des = $data['edit_cat_des'];

            $query = "UPDATE category SET cat_name = '$edit_cat_name' , cat_des = '$edit_cat_des' WHERE cat_id = '$edit_cat_id' ";
            
            if(mysqli_query($this->conn,$query)){
                return "Category update successfully! Please refresh your browser!";
            }
        }

        public function add_post($data){
            $post_title = $data['post_title'];
            $post_content = $data['post_content'];
            $post_img = $_FILES['post_img']['name'];
            $post_img_tmp = $_FILES['post_img']['tmp_name'];
            $post_ctg = $data['post_category'];
            $post_summery = $data['post_summery'];
            $post_tag = $data['post_tag'];
            $post_status = $data['post_status'];

            $query = "INSERT INTO post(post_title,post_content,post_img,post_ctg,post_summery,post_author,post_date,post_comment,post_tag,post_status) VALUE('$post_title','$post_content','$post_img','$post_ctg','$post_summery','Admin',now(),3,'$post_tag','$post_status')";

            if(mysqli_query($this->conn,$query)){
                move_uploaded_file($post_img_tmp,'../upload/'.$post_img);
                return "Post Uploaded Successfully!";
            }else{
                return "Post Uploaded Unsuccessfully!";
            }

        }
        
        
        public function display_post(){
            $query = "SELECT * FROM post";
            if(mysqli_query($this->conn,$query)){
                $posts = mysqli_query($this->conn,$query);
                return $posts ;
            }
        }


        public function update_post($data){
            $post_id = $data['edit_post_id'];
            $post_title = $data['post_title'];
            $post_content = $data['post_content'];
            $post_img = $_FILES['post_img']['name'];
            $post_img_tmp = $_FILES['post_img']['tmp_name'];
            $post_ctg = $data['post_category'];
            $post_summery = $data['post_summery'];
            $post_tag = $data['post_tag'];
            $post_author = $data['post_author'];
            $post_status = $data['post_status'];

            move_uploaded_file($post_img_tmp,'../upload/'.$post_img);
            
            $query = "UPDATE post SET post_title = '$post_title' , post_content = '$post_content', post_img = '$post_img' , post_ctg = '$post_ctg' , post_summery = '$post_summery', post_author = '$post_author', post_date = now(), post_comment = '3' , post_tag = '$post_tag' , post_status = '$post_status' WHERE post_id = '$post_id' ";

            if(mysqli_query($this->conn,$query)){
                return "Post update successfully! Please refresh your browser!";
            }else{
                return "Failed to connect to MySQL: ";
            }
        }

        public function delete_post($id){
            $query = "DELETE FROM post WHERE post_id=$id";
            if(mysqli_query($this->conn,$query)){
                return "Post Deleted Successfully!";
            }
        }




















    }


?>