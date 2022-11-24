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

    <!--form-->
    <section id="contact" class="contact" style="padding: 5rem;">
        <div class="container-fluid" >
  
            <div class="section-header text-center">
                <h2>- Enter a New Record -</h2>
                
            </div>
            <br>
          <div class="row gx-lg-0 gy-4">
  
          
  
            <div class="col-lg-12">
              <form action="scp_app/insert_data.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="item" class="form-control"  placeholder="Item #:" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="name"  placeholder="Name:" required>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group mt-3">
                    <input type="url" name="image" class="form-control"  placeholder="Image Url:" >
                  </div>
                  <div class="col-md-6 form-group mt-3 ">
                    <input type="text" class="form-control" name="class" placeholder="Object Class:" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="special" rows="3" placeholder="Special Containment Procedures:" required></textarea>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="description" rows="3" placeholder="Description:" required></textarea>
                </div>
            
            </div>
                    
                    <div class="text-center" >
                      <input type="submit" class="btn btn-success" name="submit" value="Submit">Submit <button type="reset">Cancel</button>
                    
                </div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section>

<?php include('scp_app/footer.php'); ?>  