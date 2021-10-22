<?php
    include_once "function.php";
    /* add user */
    if(isset($_POST["add"])){
        /* data from form start */
        $username  = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        $secure_password = encrypt_password($password);
        $role = htmlspecialchars($_POST["role"]);
        $image = $_FILES["image"];
        /* data from form start */
        image_filter($image);

        /* check useraccount */
        $select_sql = "SELECT * FROM account WHERE username = '$username' ";
        $check_result = mysqli_query($connection,$select_sql);
        if(mysqli_num_rows($check_result)>0){
            $_SESSION["error"] = "Username is already taken";
            header("location:admin/user.php");
        }else{
            /* add user account */
            $sql = "INSERT INTO account (username,password,role,image) VALUES ('$username','$secure_password','$role','$genearteName') ";
            $result = mysqli_query($connection,$sql);
            if($result){
                $_SESSION["success"] = "Data Insert Success";
                header("location:admin/user.php");
            }
        }
    }

    /* user delete */
    if(isset($_POST["user_delete"])){
        $id = $_POST["id"];
        delete_data("account",$id,$connection,"Account Delete Success","Account Delete Fail","admin/user.php");
    }

    /* user update  */
    if(isset($_POST["update_user_data"])){
        $id = $_POST["id"];
        $name = htmlspecialchars($_POST["name"]);
        $role = htmlspecialchars($_POST["role"]);
        $image = $_FILES["image"];
        /* data from form start */
        image_filter($image);

        /* update category */
        $sql = "UPDATE account SET username='$name',image='$genearteName',role='$role' WHERE id='$id'";
        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["success"] = "Update $name's User Success";
            header("location:admin/user.php");
        }else{
            $_SESSION["error"] = "Update $name's Category Fail";
            header("location:admin/user.php");
        }
     }

    /* category insert */
    if(isset($_POST["add_category"])){
       $category_name = htmlspecialchars($_POST["category_name"]);
       $price = htmlspecialchars($_POST["price"]);
       $description = htmlspecialchars($_POST["description"]);
       $image = $_FILES["image"];
       /* data from form start */
       image_filter($image);
         /* check category */
         $select_sql = "SELECT * FROM room_category WHERE category_name = '$category_name' ";
         $check_result = mysqli_query($connection,$select_sql);
         if(mysqli_num_rows($check_result)>0){
             $_SESSION["error"] = "This Category is already exists";
             header("location:admin/category.php");
         }else{
             /* add user account */
             $sql = "INSERT INTO room_category (category_name,price,image,description) VALUES ('$category_name','$price','$genearteName','$description') ";
             $result = mysqli_query($connection,$sql);
             if($result){
                 $_SESSION["success"] = "Create New Category Success";
                 header("location:admin/category.php");
             }else{
                $_SESSION["error"] = "Create New Category Fail";
                header("location:admin/category.php");
            }
         }
    }

    /* category delete */
    if(isset($_POST["cat_delete"])){
        $id = $_POST["id"];
        delete_data("room_category",$id,$connection,"Category Delete Success","Category Delete Fail","admin/category.php");
    };

    /* category update */
    if(isset($_POST["update_category"])){
        $id = $_POST["id"];
        $category_name = htmlspecialchars($_POST["category_name"]);
        $price = htmlspecialchars($_POST["price"]);
        $description = htmlspecialchars($_POST["description"]);
        $image = $_FILES["image"];
        /* data from form start */
        image_filter($image);

        /* update category */
        $sql = "UPDATE room_category SET category_name='$category_name',image='$genearteName',price='$price',description='$description' WHERE id='$id'";
        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["success"] = "Update $category_name's Category Success";
            header("location:admin/category.php");
        }else{
            $_SESSION["error"] = "Update $category_name's Category Fail";
            header("location:admin/category.php");
        }          
     }

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
            header("location:admin/room.php");
        }else{
            $sql2 = "INSERT INTO room(room_name,category_id,available) VALUES ('$name','$category_id','$aviable')";
            $result2 = mysqli_query($connection,$sql2);
            if($result2){
                $_SESSION["success"] = "Room create success";
                header("location:admin/room.php");
            }else{
                $_SESSION["error"] = "Room create error";
                header("location:admin/room.php");
            }
        }
     }

     /* Room Delete */
     if(isset($_POST["room_delete"])){
        $id = $_POST["id"];
        delete_data("room",$id,$connection,"Room Delete Success","Room Delete Fail","admin/room.php");
     }

    /* Login */
    if(isset($_POST["login"])){
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        $secure_password = encrypt_password($password);
        $sql = "SELECT * FROM account WHERE username='$username' AND password='$secure_password' ";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0){
            foreach($result as $r){
                $id = $r['id'];
                $sql2 = "SELECT * FROM account WHERE id=$id";
                $result2 = mysqli_query($connection,$sql2);
                if(mysqli_num_rows($result2)>0){
                    foreach($result2 as $r2){
                        $role = $r2["role"];
                        if($role == "admin"){
                            $_SESSION["admin_username"] = $username;
                            $_SESSION["admin_password"] = $secure_password;
                            $_SESSION["account_role"] = "admin";
                            $_SESSION["success"] = "Account Login Success";
                            header("location:admin/index.php");
                        }else if($role == "staff"){
                            $_SESSION["staff_username"] = $username;
                            $_SESSION["staff_password"] = $secure_password;
                            $_SESSION["account_role"] = "staff";
                            $_SESSION["success"] = "Account Login Success";
                            header("location:staff/index.php");
                        }else if($role == "nothing"){
                            $_SESSION["error"] = "Username or Password is Wrong";
                            header("location:login.php");
                        }else{
                            $_SESSION["error"] = "Username or Password is Wrong";
                            header("location:login.php");
                        }
                    }
                }
            }
        }else{
            $_SESSION["error"] = "Username or Password is Wrong";
            header("location:login.php");
        }
    }

    /* Booking  */
    if(isset($_POST["booking_btn"])){
        $name = htmlspecialchars($_POST["name"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $category = htmlspecialchars($_POST["category"]);
        $check_in = $_POST["checkin"];
        $check_out = $_POST["checkout"];
        $check_in_v2 = strtotime($check_in);
        $check_out_v2 = strtotime($check_out);
        $day = ($check_out_v2 - $check_in_v2)/60/60/24;
        $reference = rand(0,1000) . "_order";

        $sql = "INSERT INTO booking (name,phone,room_category,check_in, check_out,day,reference,confirm) VALUES ('$name','$phone','$category','$check_in','$check_out','$day','$reference','not confirm')";

        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["Booking_Success"] = "Order Booking Success ( Hotel Service Will Call Your Phone Very Soon )";
            header("location:../booking.php");
        }
    }

    /* booking change */
    if(isset($_POST["booking_change"])){
        $id = $_POST["id"];
        $sql = "UPDATE booking set confirm='confirm' WHERE id=$id";
        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["success"] = "Booking Confirm Succes";
            header("location:admin/booking.php");
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
        header("location:admin/room.php");
    }

     /* Change Not Availabe */
    if(isset($_POST["change_available"])){
        $id = $_POST["id"];
        $sql = "UPDATE room SET available='Available' WHERE id=$id ";
        $result = mysqli_query($connection,$sql);
        $_SESSION["success"] = "Make Room -> Available Success";
        header("location:admin/room.php");
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
            header("location:admin/event.php");
        }
    }

    /* Add New Blog */
    if(isset($_POST["add_blog"])){
        $name = htmlspecialchars($_POST["name"]);
        
        $description = htmlspecialchars($_POST["description"]);
        $author = $_SESSION["admin_username"];
        $image = $_FILES["image"];
        image_filter($image);
        $sql = "INSERT INTO blogs (title,author,image,description) VALUES ('$name','$author','$genearteName','$description')";
        $result = mysqli_query($connection,$sql);
        if($result){
            $_SESSION["success"] = "Blog Add Success";
            header("location:admin/blog.php");
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
            header("location:admin/contact.php");
        }
    }


?>