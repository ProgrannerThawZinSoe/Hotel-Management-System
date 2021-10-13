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
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Events</h3>
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="event-details.html">Events</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Event Details Area =================-->
        <section class="event_details_area">
            <div class="container">
                <div class="row">
                    <?php
                        if(isset($_GET["id"])){
                            $id = $_GET["id"];
                            $sql = "SELECT * FROM blogs WHERE id = $id";
                            $result = mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                                foreach($result as $r){
                                    ?>
 <div class="col-md-12">
                        <div class="event_detials_inner">
                            <div class="evet_d_img">
                                <img width="100%" src="system/upload/<?php echo $r['image'] ?>" alt="">
                            </div>
                            <div class="event_d_inner_all">
                                <div class="event_details_main">
                                    <a href="#"><h4><?php echo $r['title'] ?><br />  <?php echo $r['create_date'] ?></h4></a>
                                    <h5>Description of event</h5>
                                    <p>Author : <?php echo $r['author'] ?>< </p>
                                    <p><?php echo $r['description'] ?></p>
                                </div>
                                
                                <div class="map_location">
                                    <h4>Location</h4>
                                    <div id="mapBox" class="mapBox3 row m0" 
                                        data-lat="40.701083" 
                                        data-lon="-74.1522848" 
                                        data-zoom="12" 
                                        data-marker="img/map-marker.png" 
                                        data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                                        data-mlat="40.701083"
                                        data-mlon="-74.1522848">
                                    </div>
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
        </section>
        <!--================End Event Details Area =================-->
        <!--================End Events Area =================-->
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