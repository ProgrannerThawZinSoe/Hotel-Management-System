<ul class="nav">
          <?php
          $name = basename($_SERVER["SCRIPT_NAME"],".php");
          ?>
          <li  class="nav-item  ">
            <a target="_blank" class="nav-link" href="../../index.php">
              <i class="material-icons">language</i>
              <p>See Website</p>
            </a>
          </li>
          <li  class="nav-item <?php if($name == "index"){ echo "active"; } ?> ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item  <?php if($name == "user" || $name == "detail" || $name == "user_update"){ echo "active"; } ?>   ">
            <a class="nav-link" href="user.php">
              <i class="material-icons">person</i>
              <p>Account</p>
            </a>
          </li>
          <li class="nav-item  <?php if($name == "category" || $name == "cat_detail" || $name == "cat_update"){ echo "active"; } ?>">
            <a class="nav-link" href="category.php">
              <i class="material-icons">category</i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item <?php if($name == "room"){ echo "active"; } ?> ">
            <a class="nav-link" href="room.php">
              <i class="material-icons">home</i>
              <p>Room</p>
            </a>
          </li>
          <li class="nav-item <?php if($name == "booking"){ echo "active"; } ?> ">
            <a class="nav-link" href="booking.php">
              <i class="material-icons">add</i>
              <p>Booking</p>
            </a>
          </li>
          <li class="nav-item <?php if($name == "blog"){ echo "active"; } ?> ">
            <a class="nav-link" href="blog.php">
              <i class="material-icons">book</i>
              <p>Blog</p>
            </a>
          </li>
        
          <li class="nav-item <?php if($name == "event"){ echo "active"; } ?> ">
            <a class="nav-link" href="event.php">
              <i class="material-icons">access_time</i>
              <p>Event</p>
            </a>
          </li>

          <li class="nav-item <?php if($name == "subscribe"){ echo "active"; } ?> ">
            <a class="nav-link" href="subscribe.php">
              <i class="material-icons">mail </i>
              <p>Suscriber</p>
            </a>
          </li>

          <li class="nav-item <?php if($name == "contact"){ echo "active"; } ?> ">
            <a class="nav-link" href="contact.php">
              <i class="material-icons">phone </i>
              <p>Contact</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="./map.html">
              <i class="material-icons">settings</i>
              <p>Page Setting</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">power</i>
              <p>Logout</p>
            </a>
          </li>

       
          
