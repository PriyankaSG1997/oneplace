<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Product List
            </h3>
            <nav aria-label="breadcrumb">
           
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>product">Add Product</a>

            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Product List</h4>
                  <div class="table-responsive">
                          <table id="user-listing" class="table">
                            <thead>
                              <tr>
                                  <th>Sr.No.</th>
                                  <th>Name</th>
                                  <th>Product Category</th>
                                  <th>Product Number</th>
                                  <th>Product Details </th>
                                  <th>Product Type </th>

                                  <th>Main Image</th>
                                  <th>Hover Image</th>

                                  <th>Variant Images</th>
                                  <th>Price</th>
                                  <th>Discount Price</th>

                                  <th>Total Quantity</th>
                                 
                                  <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              // echo "<pre>";print_r($user_data);exit();
                              if(!empty($product_data)) { 
                                $i = 1;
                                ?>
                                <?php foreach($product_data as $data) {  ?>
                                  <tr>
                                      <td><?=$i++ ; ?></td>
        <td class="text-nowrap"><?= htmlspecialchars($data->productname); ?></td>
        <td class="text-nowrap"><?= htmlspecialchars($data->productcategory_name); ?></td>
        <td class="text-nowrap"><?= htmlspecialchars($data->productNumber); ?></td>
        <td class="text-nowrap"><?= nl2br(htmlspecialchars($data->productDetails)); ?></td>
        <td class="text-nowrap"><?= htmlspecialchars($data->product_type); ?></td>

        
        <!-- Display image properly -->
        <td class="text-nowrap">
          <?php if (!empty($data->mainImage)): ?>
            <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt="Product Image" width="50" height="50">
          <?php else: ?>
            No image
          <?php endif; ?>
        </td>

        <td class="text-nowrap">
          <?php if (!empty($data->hoverimg)): ?>
            <img src="<?= base_url('public/assets/uploads/' . $data->hoverimg); ?>" alt="Product Image" width="50" height="50">
          <?php else: ?>
            No image
          <?php endif; ?>
        </td>
        
        
        <!-- Display variant images as links or images -->
        <td class="text-nowrap">
          <?php if (!empty($data->variantImages)): ?>
            <?php
              $variantImages = explode(',', $data->variantImages); // Assuming variant images are stored as comma-separated values
              foreach ($variantImages as $variantImage) {
            ?>
              <img src="<?= base_url('public/assets/uploads/' . $variantImage); ?>" alt="Variant Image" width="50" height="50">
            <?php } ?>
          <?php else: ?>
            No variant images
          <?php endif; ?>
        </td>
        
        <td class="text-nowrap"><?= htmlspecialchars($data->price); ?></td>
        <td class="text-nowrap"><?= htmlspecialchars($data->dprice); ?></td>

        <td class="text-nowrap"><?= htmlspecialchars($data->totalQty); ?></td>
                                      <td>
                                        <a  href="<?=base_url(); ?>edit_product/<?=$data->id; ?>">
                                          <i class="far fa-edit me-2"></i>
                                        </a>
                                        <a  href="<?=base_url(); ?>delete/<?=$data->id; ?>/tbl_product">
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