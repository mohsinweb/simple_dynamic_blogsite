<?php 


  class BlogProject{
    private $conn;


      public function __construct()
      {
          $dbhost="localhost";
          $dbuser="root";
          $dbpass="";
          $dbname="blog_project";


        $this->conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        if(!$this->conn){
          die("Databse did not connect successfully");
        }

      }


      public function admin_login($data){

        $admin_email=$data['admin_email'];
        $admin_pass= md5($data['admin_pass']);


        $query= "SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_pass='$admin_pass'";

        if(mysqli_query($this->conn,$query)){

            $admin_info=mysqli_query($this->conn,$query);

            if(mysqli_num_rows($admin_info)>0){
              header("location:dashboard.php");

                $admin_data=mysqli_fetch_assoc($admin_info);

                session_start();

                $_SESSION['adminId']=$admin_data['id'];
                $_SESSION['adminName']=$admin_data['admin_name'];


            }

        }
        

      }


      public function category_insert($data){

        $cat_name=$data['cat_name'];
         $cat_desc= $data['cat_desc'];

         $query= "INSERT INTO category (cat_name, cat_desc)
                      VALUES ('$cat_name', '$cat_desc')";

                      if(mysqli_query($this->conn,$query)){
                        return "Category Add successfully ";
                      }


      }


       public function display_category(){
         $query= "SELECT * FROM category";

         if(mysqli_query($this->conn,$query)){
            $category=mysqli_query($this->conn,$query);

            return $category;


         }
       }


       public function delete_cat($id){
         $query="DELETE FROM category WHERE cat_id='$id'";
         if(mysqli_query($this->conn,$query)){         
          return "Category Delete Succeffully";
         }
       }

       public function edit_category($id){
        $query= "SELECT * FROM category WHERE cat_id=$id";

        if(mysqli_query($this->conn,$query)){
          
          $category=mysqli_query($this->conn,$query);
          
          $Category=mysqli_fetch_assoc($category);
          
          return $Category;


        }
      }

      public function update_category($data){
        $new_cat_name=$data['new_cat_name'];
        $new_cat_desc=$data['new_cat_desc'];
        $new_cat_id=$data['new_cat_id'];

        $query="UPDATE category
        SET cat_name='$new_cat_name',  cat_desc='$new_cat_desc'
        WHERE   cat_id=$new_cat_id ";

        if(mysqli_query($this->conn,$query)){
                  
          
          return "Update succefully";

      }
    }


    public function add_post($data){
        $post_title=$_POST['post_title'];
        $post_content=$_POST['post_content'];
        $post_img=$_FILES['post_img']['name'];
        $post_img_tem=$_FILES['post_img']['tmp_name'];
        $post_ctg=$_POST['post_ctg'];
        $post_summery=$_POST['post_summery'];
        $post_tag=$_POST['post_tag'];
        $post_status=$_POST['post_status'];

        $QUERY="INSERT INTO posts(post_title,post_content,post_img,post_author,post_date,post_comment_count,post_ctg,post_summery,post_tag,post_status) VALUES (' $post_title','$post_content','$post_img','admin',now(),3,$post_ctg,'$post_summery','$post_tag','$post_status')";

        if(mysqli_query($this->conn,$QUERY)){
          move_uploaded_file($post_img_tem,'../uploads/'.$post_img);
            return "post insert succefully";
        }
      

    }

    public function display_post(){
      $query= "SELECT * FROM post_with_cat";

          if(mysqli_query($this->conn,$query)){
           $display_post= mysqli_query($this->conn,$query);

           return $display_post;
          }
    }

    public function display_post_publish(){
      $query= "SELECT * FROM post_with_cat WHERE post_status=1";

          if(mysqli_query($this->conn,$query)){
           $display_post= mysqli_query($this->conn,$query);

           return $display_post;
          }
    }

  }


?>


