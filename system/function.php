<?php
    session_start();
    include_once "database.php";
    /**** image filter start ****/
    function image_filter($data){
       $name = $data["name"];
       $tmp_name = $data["tmp_name"];
       $size = $data["size"];
       $error = $data["error"];
       $type = $data["type"];
       if($error == 0){
          if($type == "image/png" || $type == "image/jpg" || $type == "image/jpeg" || $type == "image/gif"){
              if($size < 2000000){
                  global $genearteName;
                  $genearteName = rand(0,1000) . "_" . $name;
                  move_uploaded_file($tmp_name,"upload/".$genearteName);
              }else{
                $_SESSION["error"] = "File Size is too big";
              }
          }else{
            $_SESSION["error"] = "We Only Accept PNG JPG JPEG GIF";
          }
       }else{
          $_SESSION["error"] = "File Has Error";
       }
    }
    /**** image filter end ****/

    /**** encrypt start ****/
    function encrypt_password($data){
       $data = md5($data);
       $data = sha1(md5($data));
       $data = crypt($data,"HotelManagementSystem");
       return $data;
    }
    /**** encrypt end ****/

    /**** delete data start ****/
    function delete_data($tableName,$id,$connection,$success,$error,$location){
       $sql = "DELETE FROM $tableName WHERE id=$id";
       $result = mysqli_query($connection,$sql);
       if($result){
          $_SESSION["success"] = $success;
          header("location:$location");
       }else{
         $_SESSION["error"] = $error;
         header("location:$location");
       }
    }

    /**** delete data end ****/

?>