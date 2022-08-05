<?php

    $catdata = $obj->display_category();

    if(isset($_GET['status'])){
        if($_GET['status']=='delete'){
            $delid = $_GET['id'];
            $del_msg = $obj->delete_category($delid);
        }
    }
    // elseif(isset($_GET['status'])){
    //     if($_GET['status']=='edit'){
    //         $edit_id = $GET['id'];
    //         $edit_msg = $obj->update_cat($edit_id);
    //     }
    // }





?>

<?php if(isset($del_msg)){ echo $del_msg;}  ?>

<h2>manage category</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Category Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while($cat = mysqli_fetch_assoc($catdata)){
            $id = $cat['cat_id'];
            $cat_name = $cat['cat_name'];
            $cat_des = $cat['cat_des'];

            ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $cat_name; ?></td>
            <td><?php echo $cat_des; ?></td>
            <td>
                <a class = "btn btn-primary" href="update_category.php?status=edit&&id=<?php echo $id; ?>&&name=<?php echo $cat_name; ?>&&des=<?php echo $cat_des; ?>">Edit</a>
                <a class = "btn btn-danger" href="?status=delete&&id=<?php echo $cat['cat_id']; ?>">Delete</a>
            </td>
        </tr>
         <?php } ?>

    </tbody>
</table>