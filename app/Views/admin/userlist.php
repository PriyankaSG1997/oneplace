<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
            Staff List
            </h3>
            <nav aria-label="breadcrumb">
           
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>staff">Add Staff</a>

            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Staff List</h4>
                   <div class="table-responsive">
                          <table id="user-listing" class="table">
                            <thead>
                              <tr>
                                  <th>Id</th>
                                  <th>User Name</th>
                                  <th>Mobile No.</th>
                                  <th>Email</th>
                                 
                                  <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              // echo "<pre>";print_r($user_data);exit();
                              if(!empty($user_data)) { 
                                $i = 1;
                                ?>
                                <?php foreach($user_data as $data) {  ?>
                                  <tr>
                                      <td><?=$i++ ; ?></td>
                                      <td><?=$data->username; ?></td>
                                      <td><?=$data->mobileno; ?></td>
                                      <td><?=$data->email; ?></td>
                                      <td>
                                        <a  href="<?=base_url(); ?>edit_user/<?=$data->id; ?>">
                                          <i class="far fa-edit me-2"></i>
                                        </a>
                                        <a  href="<?=base_url(); ?>delete/<?=$data->id; ?>/tbl_user">
                                          <i class="far fa-trash-alt me-2"></i>
                                        </a>

                                      </td>

                                  </tr>
                                <?php } ?>
                              <?php } ?>
                              
                            </tbody>
                          </table>
                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php include("footer.php");?>