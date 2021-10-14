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
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Bolg Area =================-->
        <section class="main_blog_area">
            <div class="container">
                <div class="row main_blog_inner">

                
                <?php

                    $perpage = 5;

                    $sql = "SELECT * FROM blogs ";
                    $result = mysqli_query($connection,$sql);

                    $all_data = mysqli_num_rows($result);

                    $total_page = ceil($all_data / $perpage);

                    if(!isset($_GET["page"])){
                        $page = 1;
                    }else{
                        $page = $_GET["page"];
                    }
                    
                    $first_page_result = ($page - 1) * $perpage;

                    $sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT $first_page_result , $perpage   ";
                    $result = mysqli_query($connection,$sql);

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
                                <a class="book_now_btn" href="blog-details.php?id=<?php echo $r["id"] ?>">Read more</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                ?>
                
                </div>
                <nav style="text-align:center" aria-label="Page navigation example">
  <ul class="pagination">
                    <?php
            for($page=1;$page <= $total_page ; $page++){
            ?>
            <li class="page-item"><a class="page-link" href="blog.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
                        <?php
                    }
    ?>
     
  </ul>
</nav>
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