<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Add Menu
            </h3>
            <nav aria-label="breadcrumb">
           
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>menulist">Menu List</a>

            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">CompleteAdd Menu</h4>
                  <form class="cmxform" id="signupForm" method="get" action="#">
                    <fieldset>
                      <div class="form-group">
                        <label for="username">User Name : </label>
                        <input id="username" class="form-control" name="username" type="text">
                      </div>
                     
                      <div class="form-group">
                        <label for="mobileno">Mobile Number :</label>
                        <input id="mobileno" class="form-control" name="mobileno" type="text">
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" name="email" type="email">
                      </div>
                      
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password">
                      </div>
                      <div class="form-group">
                        <label for="confirm_password">Confirm password</label>
                        <input id="confirm_password" class="form-control" name="confirm_password" type="password">
                      </div>
                     
                      <input class="btn btn-primary" type="submit" value="Submit">
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php include("footer.php");?>