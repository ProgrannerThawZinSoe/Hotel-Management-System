<?php
    include_once "head.php";
?>

        <!--================Header Area =================-->
        <header class="main_header_area">
            <?php
                include_once "header.php";
            ?>
            <div class="header_menu">
                <?php
                    include_once "nav.php";
                ?>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Slider Area =================-->

        <!--================End Slider Area =================-->
        
        <!--================Book A Table Area =================-->
       
        <!--================End Book A Table Area =================-->
        

        <!--================End Our Resort Gallery Area =================-->

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Blog</h3>
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#">Booking</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Bolg Area =================-->
        <section class="main_blog_area">
            <div class="container">
                <div class="row main_blog_inner">
                <div class="col-md-12">
                        <div class="left_ex_title">
                            <h2>Booking <span> Paraside for you </span></h2>
                        </div>

                        <?php
                            
                            if(isset($_SESSION["Booking_Success"])){
                                ?>
                                <br> <br>
                                    <p class="alert alert-success">
                                        <?php
                                            echo  $_SESSION["Booking_Success"];
                                        ?>
                                    </p>
                                <?php
                                 $_SESSION["Booking_Success"] = null;
                            }
                        ?>
                        <br>
                        <form class="contact_us_form row m0" action="system/backend.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group col-md-12">
                                <select name="category" class="form-control" id="">
                                    <?php
                                        $sql = "SELECT * FROM room_category ORDER BY price ";
                                        $result = mysqli_query($connection,$sql);
                                        if(mysqli_num_rows($result)>0){
                                            foreach($result as $r){
                                                ?>
                                                    <option  class="form-control" value="<?php echo $r['category_name'] ?>"><?php echo $r['category_name'] ?></option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                                
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ci" > Check In:</label>
                                <input id="ci" type="date" class="form-control" name="checkin">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="co" > Check Out:</label>
                                <input id="co" type="date" class="form-control" name="checkout">
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control" name="booking_btn" >Booking now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Bolg Area =================-->
        <?php
            include_once "footer_area.php";
        ?>
        <!--================Footer Area =================-->
        <?php
            include_once "footer.php";
        ?>
        <!--================End Footer Area =================-->
        
        <!--================Search Box Area =================-->
        <?php
            include_once "search.php";
        ?>
        <!--================End Search Box Area =================-->
        
        
        
        
<?php
    include_once "footer.php";
?>