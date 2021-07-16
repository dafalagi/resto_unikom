<ol class="breadcrumb mb-4">
              <?php
                if (isset($_GET['nav'])) { ?>
                  <li class="breadcrumb-item"><a href="home.php"></a></li>
                  <li class="breadcrumb-item active"><?php echo $_GET['nav'] ?></li>
                <?php }else { ?>
                  <li class="breadcrumb-item active"></li>  
                <?php }
              ?>
            </ol>