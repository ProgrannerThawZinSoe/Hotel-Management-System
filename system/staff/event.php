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
                  <h4 class="card-title">Add New Event</h4>
                  <p class="card-category">Complete make Event</p>
                </div>
                <div class="card-body">
                  <form action="backend.php" method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input required type="text" name="name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date</label>
                          <input required type="date" name="date" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                      <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <textarea required type="text" name="description" class="form-control"> </textarea>
                        </div>
                      </div>
                    </div>
                 
                    <div class="row">
                      <div class="col-md-6">
                            <input type="file" required name="image">
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                        <button type="submit" name="add_event" class="btn btn-primary pull-right"> Add Event Category </button>
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
                  <h4 class="card-title ">Event Table</h4>
                  <p class="card-category"> Here is all  Events</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                          Date
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Detail
                        </th>
                        
                      </tr></thead>
                      <tbody>
                        <?php
                            $sql = "SELECT * FROM events ORDER BY id DESC";
                            $result = mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              foreach($result as $k=>$r){
                                ?>
                                  <tr>
                                    <td>
                                      <?php echo ++$k; ?>
                                    </td>
                                    <td>
                                      <?php echo $r['name'] ?>
                                    </td>
                                    <td>
                                        <img style="width:200px;height:200px" src="../upload/<?php echo $r['image'] ?>" alt="">
                                     
                                    </td>
                                    <td>
                                        <?php echo $r['date'] ?>
                                    </td>
                                    <td>
                                     <?php  
                                        $description = $r["description"];
                                        if(strlen($description)>100){
                                            echo substr($description,0,100) . " .... see more in detail ";
                                        }else{
                                            echo $description;
                                        }
                                        
                                     ?> 
                                    </td>
                                   
                                    <td >
                                      <form action="backend.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                        <input type="submit" name="event_detail" value="Detail" class="btn btn-info">
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