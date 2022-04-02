  <?php    
  
         $category=$obj->display_category();


            if(isset($_POST['add_post'])){
               $msg= $obj->add_post($_POST);
            }
         
  
  
  
  ?>




<h1 class="text-primary text-center mt-4">This Add Post page </h1>
      <?php if(isset($msg)) {echo $msg;} ?>

<form action="<?php  echo $_SERVER['PHP_SELF']?>" method="POST" class="p-5 w-50" enctype="multipart/form-data">
             
                <div class="form-group">
                    <p class=" mb-1" for="post_title">Post Title</p>
                    <input class="form-control py-2"   name="post_title" type="text"   required/>
                </div>
                <div class="form-group">
                    <label class=" mb-1" for="post_content">Post Content </label>
                    <textarea name="post_content"  class="form-control" cols="20" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label class=" mb-1" for="post_img">Upload Thumnail  Image</label> <br>
                    <input class=" py-2"  name="post_img" type="file"  required />
                </div>
                
                <div class="form-group">
                    <label class=" mb-1" for="post_ctg">Select Post Category </label>
                        <select name="post_ctg" class="form-control">
                                    <?php while($post_cat=mysqli_fetch_assoc($category))  { ?>
                                    <option value="<?php echo $post_cat['cat_id']?>"> <?php echo $post_cat['cat_name']?>  </option>

                                <?php }?>
                        </select>
                </div>
                
                
                <div class="form-group">
                    <label class=" mb-1" for="post_summery">Post Summery </label>
                    <input class="form-control py-2"  name="post_summery" type="text"  required />
                </div>
                <div class="form-group">
                    <label class=" mb-1" for="post_tag">Post Tag </label>
                    <input class="form-control py-2" name="post_tag" type="text"  required />
                </div>
                <div class="form-group">
                    <label class=" mb-1" for="post_status"> Post Status </label>
                        <select name="post_status" class="form-control">
                                    
                                    <option value="1">  Published  </option>
                                    <option value="0">  Unpublished  </option>

                                
                        </select>
                </div>

                <input type="submit" class="form-control  btn btn-primary" name="add_post" value="Add Post">
        </form>


