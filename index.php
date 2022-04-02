   
   <?php 
   
      include_once("admin/Class/function.php");
      $obj =new BlogProject();
      $catdata=$obj->display_category();
   
   
   ?>
   
   
   
   
   <?php include_once("include/head.php")?>

  <body>

    <!-- ***** Preloader Start ***** -->
           <?php include_once("include/preloader.php")?>    
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <?php include_once("include/header.php")?>

    <!-- Header end -->
    

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <?php include_once("include/mainbaner.php")?>
    <!-- Banner Ends Here -->

    <?php include_once("include/calltoaction.php")?>
    

    <section class="blog-posts">
      <div class="container">
        <div class="row">
        <?php include_once("include/blogpost.php")?>
 
          <?php include_once("include/sidebar.php")?>
          
        </div>
      </div>
    </section>

    <?php include_once("include/footer.php")?>
    <?php include_once("include/script.php")?>
    

   
  </body>
</html>