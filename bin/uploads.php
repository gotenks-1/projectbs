<?php

    //$target_dir='images\dp';
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $ext=explode('.',$_FILES['image']['name']);
      $file_ext=$ext[count($ext)-1];
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../sources/images/dp/".$file_name);
         echo $file_tmp."<br>";
         echo $file_name;
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
  ?>