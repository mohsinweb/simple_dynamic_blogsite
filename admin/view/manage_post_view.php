
<?php

$post=$obj->display_post();



?>



<h1 class="py-5 text-center">This manage post page </h1>


                <table class="table">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($data=mysqli_fetch_assoc($post)) {?>
                    <tr>
                    <th > <?php echo $data['post_id']?></th>
                    <td><?php echo $data['post_title']?></td>
                    <td><?php echo $data['post_content']?></td>
                    <td>
                        <img src="../uploads/<?php echo $data['post_img']?>" style="width: 100px;">
                        
                     </td>
                    <td><?php echo $data['post_author']?></td>
                    <td><?php echo $data['post_date']?></td>
                    <td><?php echo $data['cat_name']?></td>
                    <td><?php echo $data['post_status']?></td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                    <?php }?>
                   
                </tbody>
                </table>