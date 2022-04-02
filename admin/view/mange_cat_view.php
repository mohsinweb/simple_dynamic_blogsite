
<?php   

$catdata=$obj->display_category();


if(isset($_GET['status'])){

    if($_GET['status']=='delete'){
        $getid=$_GET['id'];

       $msg= $obj->delete_cat($getid);
    }

}


?>


<h1 class="text-center text-success py-4">This Manage category page </h1>

<?php if(isset($msg)){
    echo $msg;
}
    ?>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Category Name</th>
      <th>Category Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      <?php  
               
          while($data=mysqli_fetch_assoc($catdata)){
      ?>
    <tr>
      
      <td>  <?php echo $data['cat_id']?> </td>
      <td><?php echo $data['cat_name']?></td>
      <td><?php echo $data['cat_desc']?></td>
      <td> 
          <a href="edit_cat.php?status=edit&&id=<?php echo $data['cat_id']?>" class="btn btn-warning">Edit</a>
          <a href="?status=delete&&id=<?php echo $data['cat_id']?>" class="btn btn bg-danger">Delete</a>
     </td>
    </tr>

    <?php }?>
  </tbody>
</table>
