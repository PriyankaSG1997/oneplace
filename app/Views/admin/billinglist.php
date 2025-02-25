<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Billing List
            </h3>
            <nav aria-label="breadcrumb">
           
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>billing">Add Billing</a>

            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Billing List</h4>
                  <div class="table-responsive">
                          <table id="user-listing" class="table">
                            <thead>
                              <tr>
                                  <th>Sr.No.</th>
                                  <th>Total Amount (Rs.)</th>
                                  <th>GST Amount (Rs.)</th>
                                  <th>CGST Amount (Rs.) </th>
                                  <th>Final Total (Rs.) </th>
                                  <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              // echo "<pre>";print_r($user_data);exit();
                              if(!empty($billing_data)) { 
                                $i = 1;
                                ?>
                                <?php foreach($billing_data as $data) {  ?>
                                  <tr>
                                      <td><?=$i++ ; ?></td>
                                      <td class="text-nowrap"><?= htmlspecialchars($data->total_amount); ?></td>
                                      <td class="text-nowrap"><?= htmlspecialchars($data->gst_amount); ?></td>
                                      <td class="text-nowrap"><?= htmlspecialchars($data->cgst_amount); ?></td>
                                      <td class="text-nowrap"><?= nl2br(htmlspecialchars($data->final_total)); ?></td>

        

                                      <td>
                                      <a  href="<?=base_url(); ?>viewbill/<?=$data->id; ?>" target="_blank" title="See Bill">
                                          <i class="far fa-eye me-2"></i>
                                        </a>
                                        <!-- <a  href="<?=base_url(); ?>edit_Billing/<?=$data->id; ?>" title="Update Bill">
                                          <i class="far fa-edit me-2"></i>
                                        </a>
                                        <a  href="<?=base_url(); ?>delete/<?=$data->id; ?>/tbl_Billing">
                                          <i class="far fa-trash-alt me-2"></i>
                                        </a> -->

                                      </td>

                                  </tr>
                                <?php } ?>
                              <?php }else{ ?>
                                <tr>
                                      <td class="text-center" colspan="3">No Data Available</td>
                                     

                                  </tr>
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