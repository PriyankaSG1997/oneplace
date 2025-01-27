<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
            Banner List
            </h3>
            <nav aria-label="breadcrumb">
           
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>banner">Add Banner</a>

            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Banner List</h4>
                  <div class="table-responsive">
                          <table id="user-listing" class="table">
                            <thead>
                              <tr>
                                  <th>Sr.No.</th>
                                  <th>Title 1</th>
                                  <th>Title 2</th>
                                  <th>Description </th>

                                  <th>Banner Image</th>
                                 
                                  <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              // echo "<pre>";print_r($user_data);exit();
                              if(!empty($banner_data)) { 
                                $i = 1;
                                ?>
                                <?php foreach($banner_data as $data) {  ?>
                                  <tr>
                                      <td><?=$i++ ; ?></td>
        <td class="text-nowrap"><?= htmlspecialchars($data->title1); ?></td>
        <td class="text-nowrap"><?= htmlspecialchars($data->title2); ?></td>
        <td class="text-nowrap"><?= nl2br(htmlspecialchars($data->description)); ?></td>

        
        <!-- Display image properly -->
        <td class="text-nowrap">
          <?php if (!empty($data->bannerimg)): ?>
            <img src="<?= base_url('public/assets/uploads/' . $data->bannerimg); ?>" alt="Product Image" width="50" height="50">
          <?php else: ?>
            No image
          <?php endif; ?>
        </td>


        
      
                                      <td>
                                        <a  href="<?=base_url(); ?>edit_banner/<?=$data->id; ?>">
                                          <i class="far fa-edit me-2"></i>
                                        </a>
                                        <a  href="<?=base_url(); ?>delete/<?=$data->id; ?>/tbl_banner">
                                          <i class="far fa-trash-alt me-2"></i>
                                        </a>

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