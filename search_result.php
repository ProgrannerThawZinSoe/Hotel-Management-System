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
                    <h3>Search Result</h3>
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#">Search Result</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Bolg Area =================-->
        <section class="main_blog_area">
            <div class="container">
                <div class="row main_blog_inner">
                        <div class="introduction_left_text">
                            <div class="intro_title">
                                <h2>Search Result <span>of blog</span></h2>
                            </div>
                        </div>
                        <?php
                            /* Search Data */
                        if(isset($_POST["search"])){
                            $data = htmlspecialchars($_POST["data"]);
                            $sql1 = "SELECT * FROM blogs WHERE description LIKE '%$data%' ";
                            $result = mysqli_query($connection,$sql1);
                            if(mysqli_num_rows($result)>0){
                                foreach($result as $r){
                         ?>
                    <div class="col-sm-6">
                        <div class="blog_item">
                            <a href="blog-details.html" class="blog_img">
                                <img style="width:100%;height:350px" src="system/upload/<?php echo $r['image'] ?> " alt="image error">
                            </a>
                            <div class="blog_text">
                                <a href="blog-details.html"><h4><?php echo $r['title'] ?></h4></a>
                                <ul>
                                    <li><a href="#"><span>By :</span>  ><?php echo $r['author'] ?></a></li>
                                    <li><a href="#">><?php echo $r['create_date'] ?></a></li>
                        
                                </ul>
                                <p><?php  $description = $r["description"];
                                        if(strlen($description)>100){
                                            echo substr($description,0,100) . " .... see more in detail ";
                                        }else{
                                            echo $description;
                                        } ?></p>
                                <a class="book_now_btn" href="blog-details.html">Read more</a>
                            </div>
                        </div>
                    </div>
                        <?php
                                }
                            }else{
                        ?>
                    <br>
<h2>Not Found Any Data <span>for blog</span></h2>
<hr>
                            <?php
                        }
                        
                    }
                ?>
                </div>
            </div>
        </section>


        <section class="main_blog_area">
            <div class="container">
                <div class="row main_blog_inner">
                        <div class="introduction_left_text">
                            <div class="intro_title">
                                <h2>Search Result <span>of Event</span></h2>
                            </div>
                        </div>
                        <?php
                            /* Search Data */
                        if(isset($_POST["search"])){
                            $data = htmlspecialchars($_POST["data"]);
                            $sql1 = "SELECT * FROM events WHERE description LIKE '%$data%' ";
                            $result = mysqli_query($connection,$sql1);
                            if(mysqli_num_rows($result)>0){
                                foreach($result as $r){
                         ?>
                  <div class="event_item row m0">
                        <div class="col-md-5">
                            <a href="event-details.html" class="event_img">
                                <img style="width:100%;height:350px" src="system/upload/<?php echo $r['image'] ?>" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="event_text">
                                <div class="media">
                                   
                                    <div class="media-body">
                                        <a href="#"><h3> <?php echo $r['name'] ?> </h3></a> <small><?php echo $r['date'] ?></small>
                                    </div>
                                </div>
                                <p> <?php  $description = $r["description"];
                                        if(strlen($description)>100){
                                            echo substr($description,0,100) . " .... see more in detail ";
                                        }else{
                                            echo $description;
                                        } ?> </p>
                                <a class="book_now_btn" href="#">See Detail</a>
                            </div>
                        </div>
                        
                    </div>
                        <?php
                                }
                            }else{
                        ?>
                    <br>
<h2>Not Found Any Data <span>for Events</span></h2>
<hr>
                            <?php
                        }
                        
                    }
                ?>
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