<?php
    include_once "head.php";
?>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="#" class="simple-text logo-normal">
         My Hotel 
        </a></div>
      <div class="sidebar-wrapper">
        <?php
            include_once "slidebar.php";
        ?>

      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
        <?php
            include_once "navbar.php";
        ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <?php 
              include_once "../flash_message.php";
          ?>
        <div class="row">
        
           <?php
                if(isset($_POST["cat_update"])){
                    $id = $_POST["id"];
                    $sql = "SELECT * FROM room_category WHERE id=$id";
                    $result = mysqli_query($connection,$sql);
                    if(mysqli_num_rows($result)>0){
                      foreach($result as $r){
                        ?>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title "> <?php echo $r['category_name'] ?> Update  </h4>
                  <p class="card-category"> Here is information your.</p>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                    <img width="100%"  src="../upload/<?php echo $r['image'] ?>" class="img-responsive" alt="">

                        <p>Name : <?php echo $r['category_name'] ?></p>

                        <p>Price : <?php echo $r['price'] ?> MMK </p>

                        <p>Description : <?php echo $r['description'] ?></p>
                        <hr>

                        <div class="row">

                            <a href="category.php" class="btn btn-primary"> Back </a>


                        </div>
                    </div>

                    <div class="col-md-6">
                    <form action="../backend.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $r['id'] ?>" name="id">             
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">Category Name</label>
                        <input value="<?php echo $r['category_name'] ?>" required type="text" name="category_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">Price</label>
                        <input value="<?php echo $r['price'] ?>"  required type="text" name="price" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <label class="bmd-label-floating">Description</label>
                        <textarea   required type="text" name="description" class="form-control"><?php echo $r['description'] ?> </textarea>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-6">
                            <input type="file" required name="image">
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                        <button type="submit" name="update_category" class="btn btn-warning pull-right"> Update this Category </button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    </div>


                    </form>
 
                    </div>
                  </div>

                 
                 
                   
                </div>
              </div>
                        <?php
                      }
                    }
                }
           ?>
           
          </div>
        </div>
      </div>
 
    </div>
  </div>
  
<?php
    include_once "footer.php";
?>