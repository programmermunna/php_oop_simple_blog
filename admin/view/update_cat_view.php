<?php
      if(isset($_POST['edit_cat'])){
        $edit_msg = $obj->update_cat($_POST);
    }

       if(isset($_GET['status'])){
        if($_GET['status']=='edit'){
            $edit_id = $_GET['id'];
            $edit_name = $_GET['name'];
            $edit_des = $_GET['des'];
        }
    }


?>

<h2>update category</h2>
<?php if(isset($edit_msg)){echo "$edit_msg";} ?>
<form action="" method="POST">
    <div class="form-group">
        <label class="small mb-1" for="edit_cat">Category Name</label>
        <input type="text" value="<?php echo $edit_name; ?>" name="edit_cat_name" class="form-control py-4" id="cat_name">
    </div>
    <div class="form-group">
        <label class="small mb-1" for="edit_cat">Category Description</label>
        <input type="text" value="<?php echo $edit_des; ?>" name="edit_cat_des" class="form-control py-4" id="cat_des">
    </div>
        <input type="hidden" name="edit_id" value="<?php echo $edit_id; ?>">

        <input type="submit" name="edit_cat" class="form-control btn btn-block btn-primary" value="Submit">
</form>