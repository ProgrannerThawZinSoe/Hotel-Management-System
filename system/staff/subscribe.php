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
        
          
            <div class="col-md-12">
           
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Subscriber List Table</h4>
                  <p class="card-category"> Here is all  Subscriber Mail </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          Mail
                        </th>

                        
                      </tr></thead>
                      <tbody>
                        <?php
                            $sql = "SELECT * FROM subscribers ORDER BY id DESC";
                            $result = mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              foreach($result as $k=>$r){
                                ?>
                                  <tr>
                                    <td>
                                      <?php echo ++$k; ?>
                                    </td>
                                    <td>
                                      <?php echo $r['email'] ?>
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