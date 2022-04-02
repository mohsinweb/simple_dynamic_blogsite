

<?php  

    if(isset($_GET['status'])){

        if($_GET['status']=='edit'){

       
        $getid=$_GET['id'];

      $show_data= $obj->edit_category($getid);

    }
 }


    if(isset($_POST['category_update'])){


       $msg= $obj->update_category($_POST);
    }



?>


<h1 class="text-center py-4">Edit Cat page</h1>

    <?php if(isset($msg)){
        echo $msg;
        }?>
<form action="<?php  echo $_SERVER['PHP_SELF']?>" method="POST">
             
             <div class="form-group">
                 <p class=" mb-1" for="cat_name">Category</p>
                 <input class="form-control py-2" id="cat_name"  name="new_cat_name" type="text"  value="<?php echo  $show_data['cat_name'] ?>" required/>
             </div>
             <div class="form-group">
                 <label class=" mb-1" for="cat_des">Category Description</label>
                 <input class="form-control py-2" id="cat_des" name="new_cat_desc" value="<?php echo  $show_data['cat_desc'] ?>" type="text" required />
             </div>

             <input name="new_cat_id" value="<?php echo  $show_data['cat_id'] ?>" type="text" hidden />

             <input type="submit" class="form-control  btn btn-primary" name="category_update" value="Update Category">
     </form>