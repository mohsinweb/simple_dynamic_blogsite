<?php



if(isset($_POST['category_add'])){

  $msg= $obj->category_insert($_POST);
}


?>


        <h1 class="text-center text-primary py-5">This Add category page </h1>

        <?php  if(isset($msg)){ echo $msg;}?>
 
        <form action="<?php  echo $_SERVER['PHP_SELF']?>" method="POST">
             
                <div class="form-group">
                    <p class=" mb-1" for="cat_name">Category</p>
                    <input class="form-control py-2" id="cat_name"  name="cat_name" type="text" placeholder="Enter Category Name"  required/>
                </div>
                <div class="form-group">
                    <label class=" mb-1" for="cat_des">Category Description</label>
                    <input class="form-control py-2" id="cat_des" name="cat_desc" type="text" placeholder="Enter Category Description" required />
                </div>
                <input type="submit" class="form-control  btn btn-primary" name="category_add" value="Add Category">
        </form>
