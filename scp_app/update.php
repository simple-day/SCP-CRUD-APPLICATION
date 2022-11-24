<?php include('scp_app/connection.php'); ?>
<?php include('scp_app/header.php'); ?> 

    <!--nav-->
    <nav>
        <div class="row">
            <ul class="nav d-flex justify-content-center flex-nowrap" id="navform" style="margin-top: 3rem; font-size: 2rem; padding: 2rem; " >
                <li class="nav-item" id="fh" style="padding-right: 2rem; ">
                    <a class="nav-link" href="index.php" style="color: rgb(238, 238, 224);">Home</a>
                </li>
                <li class="nav-item" id="fc" style="padding-right: 2rem;">
                    <a class="nav-link" href="navpage.php" style="color: rgb(238, 238, 224);">Nav</a>
                </li>
                <li class="nav-item" id="fr" style="padding-right: 2rem ;">
                    <a class="nav-link" href="records.php" style="color: rgb(238, 238, 224);">Records</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php

        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $query = "insert into `scp database (`item`, `name`, `image`, `class`, `special`, `description`) values ('$item', '$name','$image','$class','$special','$description',)";

            $result = mysqli_query($conn, $query);

            if($result->connect_error){
                die("query Failed".$result->connect_error);
            }
            else
            {
                $row = mysqli_fetch_assoc($result);
            }
        }

    ?>
    
    <?php

        if(isset($_POST['update']))
        {
            if(isset($_GET['id_new'])){
                $idnew = $_GET['id_new'];
            }

            $item = $_POST['item'];
            $name = $_POST['name'];
            $image = $_POST['image'];
            $class = $_POST['class'];
            $special = $_POST['special'];
            $description = $_POST['description'];

            $query = "update `scp database set `item` = '$item', `name` = '$name', `image` = '$image', `class` = '$class', `special` = '$special', `descreiption` = '$description', where `id` = $idnew ";

            $result = mysqli_query($conn, $query);

            if($result->connect_error)
            {
                die("Connection failed!" . $result->connect_error);
            }
            else
            {
                echo "You have successfully updated the data";
            }
        }

    ?>

    <!--form-->
    <section id="contact" class="contact" style="padding: 5rem;">
        <div class="container-fluid" >
  
            <div class="section-header text-center">
                <h2>- Enter a New Record -</h2>
                
            </div>
            <br>
          <div class="row gx-lg-0 gy-4">
  
          
  
            <div class="col-lg-12">
              <form action="scp_app/update.php?id_new=<?php echo $id; ?>" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="item" class="form-control"  placeholder="Item #:" value="<?php echo $row['item'] ?>" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="name"  placeholder="Name:" value="<?php echo $row['name'] ?>" required>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group mt-3">
                    <input type="url" name="image" class="form-control"  placeholder="Image Url:" value="<?php echo $row['image'] ?>">
                  </div>
                  <div class="col-md-6 form-group mt-3 ">
                    <input type="text" class="form-control" name="class" placeholder="Object Class:" value="<?php echo $row['class'] ?>" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="special" rows="3" placeholder="Special Containment Procedures:" value="<?php echo $row['special'] ?>" required></textarea>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="description" rows="3" placeholder="Description:" value="<?php echo $row['description'] ?>" required></textarea>
                </div>
            
            </div>
                    
                    <div class="text-center" >
                      <input type="submit" class="btn btn-success" name="update" value="Update">Update 
                    
                </div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section>

<?php include('scp_app/footer.php'); ?>  