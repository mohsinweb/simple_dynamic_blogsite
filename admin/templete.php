
<?php
  include_once("Class/function.php");

   session_start();
   $obj= new BlogProject();

   
   $id=$_SESSION['adminId'];

   if($id==null){
       header("location: index.php");
   }


?>


<?php include_once("includes/head.php");?>
    <body class="sb-nav-fixed">
        
    <?php include_once("includes/topnav.php");?>

        <div id="layoutSidenav">
        <?php include_once("includes/sidenav.php");?>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php  
                        
                        if(isset($view)){

                            if($view=="dashboard"){
                                include_once("view/dash_view.php");
                            }
                            if($view=="add_category"){
                                include_once("view/add_cat_view.php");
                            }
                            if($view=="manage_category"){
                                include_once("view/mange_cat_view.php");
                            }
                            if($view=="add_post"){
                                include_once("view/add_post_view.php");
                            }
                            if($view=="manage_post"){
                                include_once("view/manage_post_view.php");
                            }
                            if($view=="edit_cat"){
                                include_once("view/edit_cat_view.php");
                            }

                        }
                        
                        
                        
                        ?>
                        




                    </div>
                </main>
                   <?php include_once("includes/footer.php")?>
            </div>
        </div>
             <?php include_once("includes/script.php");?>
    </body>
</html>
