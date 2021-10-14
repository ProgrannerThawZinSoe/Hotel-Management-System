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
        
            <div class="col-md-5">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add User Account</h4>
                  <p class="card-category">Complete make user account</p>
                </div>
                <div class="card-body">
                  <form action="../backend.php" method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input required type="text" name="username" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input required type="password" name="password" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Role</label>
                            <select name="role" required class="form-control">
                              <option value="nothing">--- Select Role----</option>    
                              <option value="staff"> Staff </option>
                              <option value="admin"> Admin </option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                            <input type="file" required name="image">
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                        <button type="submit" name="add" class="btn btn-primary pull-right"> Add User Account </button>
                            <div class="clearfix"></div>
                        </div>
                      </div>
                    </div>
                  
                    
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-7">
           
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">User Account Table</h4>
                  <p class="card-category"> Here is all user</p>
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
                          Role
                        </th>
                        <th>
                          Delete
                        </th>
                        <th>
                          Update
                        </th>
                        <th>
                          Info
                        </th>
                      </tr></thead>
                      <tbody>
                        <?php
                            $sql = "SELECT * FROM account ORDER BY id DESC";
                            $result = mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              foreach($result as $k=>$r){
                                ?>
                                  <tr>
                                    <td>
                                      <?php echo ++$k; ?>
                                    </td>
                                    <td>
                                      <?php echo $r['username'] ?>
                                    </td>
                                    <td>
                                     <?php echo $r['role'] ?>
                                    </td>
                                    <td>
                                      <form action="../backend.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                        <input onclick="return confirm('Delete Confirm ! ')" type="submit" name="user_delete" value="Delete" class="btn btn-danger">
                                      </form>
                                    </td>
                                    <td >
                                      <form action="user_update.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                        <input type="submit" name="update_user" value="Update" class="btn btn-warning">
                                      </form>
                                    </td>
                                    <td >
                                      <form action="detail.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                        <input type="submit" name="user_detail" value="Detail" class="btn btn-info">
                                      </form>
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