<?php


    /* Function start */
    
    session_start();
    include_once "../database.php";
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
                  move_uploaded_file($tmp_name,"../upload/".$genearteName);
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


    /* Function End */



     /* add room */
     if(isset($_POST["add_room"])){
        $name = htmlspecialchars($_POST["name"]);
        $category_id = htmlspecialchars($_POST["category_id"]);
        $aviable = htmlspecialchars($_POST["available"]);
        /* check room name */
        $sql = "SELECT * FROM room WHERE room_name='$name'";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION["error"] = "Room name already exists";
            header("location:room.php");
        }else{
            $sql2 = "INSERT INTO room(room_name,category_id,available) VALUES ('$name','$category_id','$aviable')";
            $result2 = mysqli_query($connection,$sql2);
            if($result2){
                $_SESSION["success"] = "Room create success";
                header("location:room.php");
            }else{
                $_SESSION["error"] = "Room create error";
                header("location:room.php");
            }
        }
     }

     /* Room Delete */
     if(isset($_POST["room_delete"])){
        $id = $_POST["id"];
        delete_data("room",$id,$connection,"Room Delete Success","Room Delete Fail","room.php");
     }

  

    /* booking change */
    if(isset($_POST["booking_change"])){
        $id = $_POST["id"];
        $sql = "UPDATE booking set confirm='confirm' WHERE id=$id";
        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["success"] = "Booking Confirm Succes";
            header("location:booking.php");
        }
    }

    /* booking_delete */
    if(isset($_POST["booking_delete"])){
        $id = $_POST["id"];
        $sql = "DELETE FROM booking WHERE id=$id";
        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["delete_success"] = "DELETE CONFRIM SUCCESS";
            header("location:booking.php");
        }
    }

    /* Change Availabe */
    if(isset($_POST["change_not_available"])){
        $id = $_POST["id"];
        $sql = "UPDATE room SET available='Not Available' WHERE id=$id ";
        $result = mysqli_query($connection,$sql);
        $_SESSION["success"] = "Make Room -> Not Available Success";
        header("location:room.php");
    }

     /* Change Not Availabe */
    if(isset($_POST["change_available"])){
        $id = $_POST["id"];
        $sql = "UPDATE room SET available='Available' WHERE id=$id ";
        $result = mysqli_query($connection,$sql);
        $_SESSION["success"] = "Make Room -> Available Success";
        header("location:room.php");
    }

    /* Add New Event  */
    if(isset($_POST["add_event"])){
        $name = htmlspecialchars($_POST["name"]);
        $date = htmlspecialchars($_POST["date"]);
        $description = htmlspecialchars($_POST["description"]);
        $image = $_FILES["image"];
        image_filter($image);
        $sql = "INSERT INTO events (name,image,date,description) VALUES ('$name','$genearteName','$date','$description')";
        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["success"] = "Event Add Success";
            header("location:event.php");
        }
    }

    /* Add New Blog */
    if(isset($_POST["add_blog"])){
        $name = htmlspecialchars($_POST["name"]);
        
        $description = htmlspecialchars($_POST["description"]);
        $author = $_SESSION["staff_username"];
        $image = $_FILES["image"];
        image_filter($image);
        $sql = "INSERT INTO blogs (title,author,image,description) VALUES ('$name','$author','$genearteName','$description')";
        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["success"] = "Blog Add Success";
            header("location:blog.php");
        }
    }

    /* Add Subscribation */
    if(isset($_POST["sub"])){
        $mail = htmlspecialchars($_POST["mail"]);
        $sql = "INSERT INTO subscribers (email) VALUES ('$mail') ";
        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["sub_success"];
            header("location:../index.php");
        }
    }

    /* Add Contact */
    if(isset($_POST["contact"])){
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $message = htmlspecialchars($_POST["message"]);
        $sql = "INSERT INTO contact (name,email,phone,description) VALUES ('$name','$email','$phone','$message') ";
        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["success"] = "Your Message is Reach Our Team . We Will Reply Back Within 24hours";
            header("location:../contact.php");
        }else{
            $_SESSION["error"] = "Your Message is not Reach Our Team . Please refilled data .";
            header("location:../contact.php");
        }
        
    }

    /* Change Contact */
    if(isset($_POST["change_contact"])){
        $id = htmlspecialchars($_POST["id"]);
        $sql = "UPDATE contact SET status='done' WHERE id=$id";
        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["success"] = "Contact Make Done Success";
            header("location:contact.php");
        }
    }


?>