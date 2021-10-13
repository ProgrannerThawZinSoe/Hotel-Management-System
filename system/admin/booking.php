<?php
    include_once "head.php";
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/4.0.0/material-components-web.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.material.min.css">
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
                  <h4 class="card-title ">All Booking </h4>
                  <p class="card-category"> Here is all Booking</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class=" mdl-data-table" style="width:100%">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Room Category
                        </th>
                        <th>
                            Check In
                        </th>
                        <th>
                          Check Out
                        </th>
                        <th>
                          Day
                        </th>
                        <th>
                          Total Price
                        </th>
                        <th>
                          Reference
                        </th>
                        <th>
                          Status
                        </th>
                        <th>
                            Update
                        </th>
                        <th>
                            Innovatic
                        </th>
                       
                        <th>
                            Delete 
                        </th>
                       
                      </tr></thead>
                      <tbody>
                        <?php
                            $sql = "SELECT * FROM booking ORDER BY id DESC";
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
                                     <?php echo $r['phone'] ?>
                                    </td>
                                    <td>
                                     <?php echo $r['room_category'] ?>
                                    </td>
                                    <td>
                                     <?php echo $r['check_in'] ?>
                                    </td>
                                    <td>
                                     <?php echo $r['check_out'] ?>
                                    </td>
                                    <td>
                                     <?php echo $r['day'] ?>
                                    </td>
                                    <td>
                                     <?php 
                                        $day = $r["day"];
                                        $room_category = $r['room_category'];
                                        $sql2 = "SELECT * FROM room_category WHERE category_name='$room_category'";
                                        $result2 = mysqli_query($connection,$sql2);
                                        if(mysqli_num_rows($result2)>0){
                                            foreach($result2 as $k){
                                                $price = $k['price'];
                                                $totla_price = $day * $price;
                                                echo $totla_price;
                                            }
                                        }
                                     ?>
                                    </td>
                                    <td>
                                        <?php echo $r["reference"] ?>
                                    </td>
                                    <td>
                                        <?php echo $r["confirm"] ?>
                                    </td>
                                    <td>
                                        <?php
                                            $confirm = $r["confirm"];
                                            if($confirm == "not confirm"){
                                                ?>
                                                <form action="../backend.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                                    <input onclick="return confirm('Confirm This Order ! ')" type="submit" name="booking_change" value="confirm" class="btn btn-info">
                                                </form>
                                                <?php
                                            }else{
                                                ?>
                                                    <a href="#" class="btn btn-info">Done</a>
                                                <?php
                                            }
                                        ?>
                                    </td>
                                    <td>
                                      <form action="../backend.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                        <input type="submit" name="booking_innovatic" value="Innotavic" class="btn btn-info">
                                      </form>
                                    </td>
                                    <td >
                                      <form action="user_update.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                                        <input  onclick="return confirm('Delete This Order ! ')"  type="submit" name="booking_delete" value="Delete" class="btn btn-danger">
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
   if(isset($_SESSION["delete_success"])){
       ?>
        <script>alert('<?php echo $_SESSION["delete_success"] ?>')</script>
       <?php
       $_SESSION["delete_success"] = null;
   }
?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.material.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable( {
        autoWidth: false,
        columnDefs: [
            {
                targets: ['_all'],
                className: 'mdc-data-table__cell'
            }
        ]
    } );
} );
</script>
<?php
    include_once "footer.php";
?>