<?php
    if(isset($_SESSION["success"])){
        ?>
           <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Success - </b>   <?php echo $_SESSION["success"] ?></span>
                  </div>
          
        <?php
        $_SESSION["success"] = null;
    }

    if(isset($_SESSION["error"])){
        ?>
            <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> Error - </b>   <?php echo $_SESSION["error"] ?></span>
                  </div>
        <?php
        $_SESSION["error"] = null;
    }
?>