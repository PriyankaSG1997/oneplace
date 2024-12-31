<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Add User
            </h3>
            <nav aria-label="breadcrumb">
         
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>userlist">User List</a>

            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add User</h4>
                  <form class="cmxform" id="userForm" method="post" action="<?=base_url(); ?>add_user">
                    <fieldset class="row">
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="username">User Name : </label>
                        <input id="id" class="form-control" name="id" type="hidden" value="<?php if(!empty($single)){ echo $single->id; } ?>">

                        <input id="username" class="form-control" name="username" type="text" value="<?php if(!empty($single)){ echo $single->username; } ?>">
                      </div>
                     
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="mobileno">Mobile Number :</label>
                        <input id="mobileno" class="form-control" name="mobileno" type="text" value="<?php if(!empty($single)){ echo $single->mobileno; } ?>">
                      </div>

                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" name="email" type="email" value="<?php if(!empty($single)){ echo $single->email; } ?>">
                      </div>
                      
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password" value="<?php if(!empty($single)){ echo $single->password; } ?>">
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="confirm_password">Confirm password</label>
                        <input id="confirm_password" class="form-control" name="confirm_password" type="password" value="<?php if(!empty($single)){ echo $single->password; } ?>">
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-12">
                     
                        <input class="btn btn-primary" type="submit" value="submit" name="submit" id="submit">
                      </div>
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