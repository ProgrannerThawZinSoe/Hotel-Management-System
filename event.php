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

        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_content">
                    <h3>Events</h3>
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="event.html">Events</a></li>
                    </ul>
                </div>
            </div>
        </section>
       <!--================Events Area =================-->
       <section class="events_area">
            <div class="container">
                <div class="row event_inner">

                <?php

                    $perpage = 5;

                    $sql = "SELECT * FROM events ";
                    $result = mysqli_query($connection,$sql);

                    $all_data = mysqli_num_rows($result);

                    $total_page = ceil($all_data / $perpage);

                    if(!isset($_GET["page"])){
                        $page = 1;
                    }else{
                        $page = $_GET["page"];
                    }
                    
                    $first_page_result = ($page - 1) * $perpage;

                    $sql = "SELECT * FROM events ORDER BY date LIMIT $first_page_result , $perpage   ";
                    $result = mysqli_query($connection,$sql);

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
                                <a class="book_now_btn" href="event-details.php?id=<?php echo $r['id'] ?>">See Detail</a>
                            </div>
                        </div>
                        
                    </div>
                            <?php
                        }
                    }
                ?>

<nav style="text-align:center" aria-label="Page navigation example">
  <ul class="pagination">
    <?php
        for($page=1;$page <= $total_page ; $page++){
            ?>
 <li class="page-item"><a class="page-link" href="event.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
            <?php
        }
    ?>
   

    
  </ul>
</nav>
                </div>
            </div>
        </section>
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