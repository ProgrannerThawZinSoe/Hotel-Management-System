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
        
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Room Account</h4>
                  <p class="card-category">Complete make room </p>
                </div>
                <div class="card-body">
                  <form action="../backend.php" method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Room name</label>
                          <input required type="text" name="name" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Role</label>
                          <select name="category_id" required class="form-control">   
                          <?php
                                $sql = "SELECT * FROM room_category ORDER BY id DESC";
                                $result = mysqli_query($connection,$sql);
                                foreach($result as $r){
                                    ?>
                                   
                                        <option value="<?php echo $r['category_name'] ?>"> <?php echo $r['category_name'] ?> </option>
                                    
                                    <?php
                                }
                          ?>

</select>
                           
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Role</label>
                            <select name="available" required class="form-control">
                              <option value="Available"> Available </option>
                              <option value="Not Available"> Not Available </option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                     
                      
                      <div class="col-md-6">
                        <div class="form-group">
                        <button type="submit" name="add_room" class="btn btn-primary pull-left"> Add New  Room </button>
                            <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                  
                    
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-8">
           
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Room Table</h4>
                  <p class="card-category"> Here is all room</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Category
                        </th>
                        <th>
                        Available
                        </th>
                        <th>
                            Delete
                        </th>
                        <th>
                        Available Status
                        </th>
                       
                      </tr></thead>
                      <tbody>
                        <?php
                            $sql = "SELECT * FROM room ORDER BY id DESC";
                            $result = mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              foreach($result as $k=>$r){
                                ?>
                                  <tr>
                                    <td>
                                      <?php echo ++$k; ?>
                                    </td>
                                    <td>
                                      <?php echo $r['room_name'] ?>
                                    </td>
                                    <td>
                                     <?php echo $r['category_id'] ?>
                                    </td>
                                    <td>
                                     <?php echo $r['available'] ?>
                                    </td>
                                    <td>
                                      <form action="../backend.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                        <input onclick="return confirm('Delete Confirm ! ')" type="submit" name="room_delete" value="Delete" class="btn btn-danger">
                                      </form>
                                    </td>
                                    <td >
                                      <?php
                                          $available = $r["available"];
                                          if($available == "Available"){
                                            ?>
                                        <form action="../backend.php" method="post">
                                          <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                          <input type="submit" name="change_not_available" value="Not Available" class="btn btn-default">
                                        </form>
                                            <?php
                                          }else if($available == "Not Available"){
                                            ?>
                                      <form action="../backend.php" method="post">
                                          <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                          <input type="submit" name="change_available" value="Available" class="btn btn-default">
                                        </form>
                                            <?php
                                          }
                                      ?>
                                     
                                    </td>
                                   
                                  </tr>
                                <?php
                              }
                            }
                        ?>
                    

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
           
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
  
<?php
    include_once "footer.php";
?>