<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Vendor List
            </h3>
            <nav aria-label="breadcrumb">
           
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>vendor ">Add Vendor </a>

            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Vendor List</h4>
                   <div class="table-responsive">
                          <table id="user-listing" class="table">
                            <thead>
                              <tr>
                                  <th>Sr.No.</th>
                                  <th>Name</th>
                                  <th class="text-nowrap">Contact Person Name</th>
                                  <th>Mobile No.</th>
                                  <th>Email</th>
                                  <th>Country / State / City </th>
                                  <th class="text-nowrap">Vendor Type</th>
                                  <th>Gst No.</th>
                                  <th>Pan No.</th>
                                  <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              // echo "<pre>";print_r($user_data);exit();
                              if(!empty($vendor_data)) { 
                                $i = 1;
                                ?>
                                <?php foreach($vendor_data as $data) {  ?>
                                  <tr>
                                      <td><?=$i++ ; ?></td>
                                      <td class="text-nowrap"><?=$data->vendor_name; ?></td>
                                      <td><?=$data->contact_person_name; ?></td>
                                      <td><?=$data->email; ?></td>
                                      <td><?=$data->mobileno; ?></td>
                                      <td class="text-nowrap"><?=$data->country_name; ?> / <?=$data->state_name; ?> /<?=$data->city_name; ?></td>
                                      <td><?=$data->vendor_type_name; ?></td>
                                      <td><?=$data->gst_no; ?></td>
                                      <td><?=$data->pan_no; ?></td>
                                      <td>
                                        <a  href="<?=base_url(); ?>edit_vendor/<?=$data->id; ?>">
                                          <i class="far fa-edit me-2"></i>
                                        </a>
                                        <a  href="<?=base_url(); ?>delete/<?=$data->id; ?>/tbl_vendor">
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