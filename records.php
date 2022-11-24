<?php include('scp_app/connection.php'); ?>
<?php include('scp_app/header.php'); ?>

    <!--navigation-->
    <nav >
        <div class="row">
            <ul class="nav d-flex justify-content-center flex-nowrap"  style="margin-top: 3rem; font-size: 2rem; padding: 2rem; " >
                <li class="nav-item" id="nh" style="padding-right: 2rem;">
                    <a class="nav-link" href="index.php" style="color: rgb(238, 238, 224);">Home</a>
                </li>
                <li class="nav-item" id="nr" style="padding-right: 2rem ;">
                    <a class="nav-link" href="navpage.php" style="color: rgb(238, 238, 224);">Nav</a>
                </li>
                <li class="nav-item" id="nc" style="padding-right: 2rem;">
                    <a class="nav-link" href="form.php" style="color: rgb(238, 238, 224);">Create</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--records-->
    <section class="container-fluid " style=" background-image: url(images/notebook_paper_plain_by_fairyfindings_d37su50-fullview.jpg); padding: 2rem; filter: sepia(50%); opacity: 85%;" >

        <!--getting data-->
        <?php  
    
            $query = "select * from 'scp database'";

            $result = mysqli_query($conn, $query);

            if($result->connect_error)
            {
                die("query Failed" . $result->connect_error);
            }
            else{
                
                while($row = mysqli_fetch_assoc($result))
                {
                    ?>

                        <div style="background-image: url(images/paper.jpg); padding: 1.5rem;color: rgb(70, 63, 58);">

                            <p><?php echo $row['item'] ?></p>
                            <br>
                            <h1><?php echo $row['name'] ?></h1>
                            <h2><?php echo $row['class'] ?></h2>
                            <img src=<?php echo $row['image'] ?> alt="" class="img-fluid">
                            <p><?php echo $row['special'] ?></p>
                            <p><?php echo $row['description'] ?></p>
                            <button type="button"><a href="scp_app/update.php">Update</a></button>
                            <button type="button"><a href="scp_app/delete.php">Delete</a></button>

                        </div>

                    <?php
                }
            }
    
        ?>
       
    </section>

<?php include('scp_app/footer.php'); ?>