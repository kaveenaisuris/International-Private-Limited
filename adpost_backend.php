<?php   include "db.php";   ?>
  

  <?php
   
    if(isset($_POST['submit'])){
                $pname=($_POST["pname"]);
       $category=($_POST["category"]);
       $location=($_POST["location"]);
      $description =($_POST["description"]);
       
       $num=($_POST["num"]);
        $price=($_POST["price"]);
              
                    
                    
//              
//                    $target_dir = "./images";
//                    // Check if image file is a actual image or fake image
//                    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
//                    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
//                        
//                        $file="$target_file";
//                        
//                    }else {
//                        $uploadErr="* image upload failed";
//                    }
        
$uploaddir = './uploads/';
$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
        
       if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
} 
        
        
                    $query ="Insert into products(pname,category,location,description,phone,img,price)";
                    $query .="values('{$pname}','{$category}','{$location}','{$description}','{$num}','{$uploadfile}','{$price}')";
                    
                    $create_event_query=mysqli_query($connection,$query);
                    if(!$create_event_query){
                        die('QUERY FAILED'.mysqli_error($connection));
                    }
                        
                 header ("Location: allpost.php");   
                }
?>