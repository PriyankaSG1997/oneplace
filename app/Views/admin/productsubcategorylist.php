<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Product Category List
            </h3>
            <nav aria-label="breadcrumb">
           
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>productsubcategory">Add Product Sub Category</a>

            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card w-50">
                <div class="card-body">
                  <h4 class="card-title">Product Sub Category List</h4>
                  <div class="table-responsive">
                          <table id="user-listing" class="table">
                            <thead>
                              <tr>
                                  <th>Sr.No.</th>
                                  <th>Category Name</th>
                                  <th>Sub Category Name</th>

                                 
                                  <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              // echo "<pre>";print_r($user_data);exit();
                              if(!empty($pc_data)) { 
                                $i = 1;
                                ?>
                                <?php foreach($pc_data as $data) {  ?>
                                  <tr>
                                      <td><?=$i++ ; ?></td>
                                      <td class="text-nowrap"><?=$data->productcategory_name; ?></td>
                                      <td class="text-nowrap"><?=$data->pcsname; ?></td>

                                    
                                      <td>
                                        <a  href="<?=base_url(); ?>edit_productsubcategory/<?=$data->id; ?>">
                                          <i class="far fa-edit me-2"></i>
                                        </a>
                                        <a  href="<?=base_url(); ?>delete/<?=$data->id; ?>/tbl_productsubcategory">
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