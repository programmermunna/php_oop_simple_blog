<?php

if(isset($_POST['add_cat'])){
    $return_msg = $obj->add_category($_POST);
}



?>

<h2>add category</h2>
<?php if(isset($return_msg)){echo "$return_msg";} ?>
<form action="" method="POST">
    <div class="form-group">
        <label class="small mb-1" for="cat_name">Category Name</label>
        <input type="text" name="cat_name" class="form-control py-4" id="cat_name">
    </div>
    <div class="form-group">
        <label class="small mb-1" for="cat_des">Category Description</label>
        <input type="text" name="cat_des" class="form-control py-4" id="cat_des">
    </div>
        <input type="submit" name="add_cat" class="form-control btn btn-block btn-primary" value="Submit">
</form>