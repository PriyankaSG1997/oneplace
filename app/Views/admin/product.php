<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Add Product
            </h3>
            <nav aria-label="breadcrumb">
           
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>productlist">Product List</a>

            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Product</h4>
                  <form class="cmxform" id="productform" method="post" action="<?=base_url(); ?>add_product" enctype="multipart/form-data">
                    <fieldset class="row">
                      <div class="form-group col-lg-4 col-md6-6 col-12">
                        <label for="productname">Product Name</label>
                        <input id="id" class="form-control" name="id" type="hidden" value="<?php if (!empty($single)) {echo $single->id; } ?>">

                        <input id="productname" class="form-control" name="productname" type="text" value="<?php if (!empty($single)) {echo $single->productname; } ?>">
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="productcategory_id">Product Category </label>
                        <select name="productcategory_id" id="productcategory_id" class="form-control">
                            <option value="">Please Select Product Category </option>
                            <?php if(!empty($pc_data)){ ?>
                                <?php foreach ($pc_data as $data): ?>
                                    <option value="<?= $data->id; ?>" <?php 
                                        if (isset($single) && is_object($single) && isset($single->productcategory_id)) {
                                            echo ($single->productcategory_id == $data->id) ? 'selected="selected"' : '';
                                        }
                                    ?>>
                                        <?= $data->pcname; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php } ?>
                        </select>   
                    </div>
                    <!-- Product Number -->
                    <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="productNumber">Product Number :</label>
                        <input type="text" class="form-control" id="productNumber" name="productNumber" placeholder="Enter Product Number" value="<?php if (!empty($single)) {echo $single->productNumber; } ?>">
                    </div>

                    <!-- Product Details -->
                    <div class="form-group col-lg-12 col-md-12 col-12">
                        <label for="productDetails">Product Details :</label>
                        <textarea class="form-control" id="productDetails" name="productDetails" rows="5" placeholder="Enter Product Details"><?php if (!empty($single)) {echo $single->productDetails; } ?></textarea>
                    </div>
                    

                    <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="mainImage">Main Image :</label>
                        <input type="file" class="form-control" id="mainImage" name="mainImage" accept="image/*" value="<?php if (!empty($single)) {echo $single->mainImage; } ?>">
                    </div>

                    
                    <div class="form-groupcol-lg-4 col-md-4 col-6">
                        <label for="hoverimg">Hover Image :</label>
                        <input type="file" class="form-control" id="hoverimg" name="hoverimg" accept="image/*" value="<?php if (!empty($single)) {echo $single->hoverimg; } ?>">
                    </div>

                    <!-- Variants Image Picker -->
                    <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="variantImages">Variant Images :</label>
                        <input type="file" class="form-control" id="variantImages" name="variantImages[]" accept="image/*" value="<?php if (!empty($single)) {echo $single->mainImage; } ?>" multiple>
                    </div>

                    <!-- Price -->
                    <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="price">Price :</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" value="<?php if (!empty($single)) {echo $single->price; } ?>">
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="dprice">Discount Price :</label>
                        <input type="number" class="form-control" id="dprice" name="dprice" placeholder="Enter Discount Price" value="<?php if (!empty($single)) {echo $single->dprice; } ?>">
                    </div>

                    <!-- Total Quantity -->
                    <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="totalQty">Total Quantity :</label>
                        <input type="number" class="form-control" id="totalQty" name="totalQty" placeholder="Enter Total Quantity" value="<?php if (!empty($single)) {echo $single->totalQty; } ?>">
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="product_type">Product Type</label>
                        <select name="product_type" id="product_type" class="form-control">
                            <option value="">Please Select Product Category </option>
                           
                                    <option value="SALE" <?php if (isset($single) && is_object($single) && isset($single->product_type)) {
                                            echo ($single->product_type == "SALE") ? 'selected="selected"' : '';
                                        }
                                    ?>>
                                       SALE
                                    </option>
                                    <option value="HOT" <?php if (isset($single) && is_object($single) && isset($single->product_type)) {
                                            echo ($single->product_type == "HOT") ? 'selected="selected"' : '';
                                        }
                                    ?>>
                                       HOT
                                    </option>
                                    <option value="NEW" <?php if (isset($single) && is_object($single) && isset($single->product_type)) {
                                            echo ($single->product_type == "NEW") ? 'selected="selected"' : '';
                                        }
                                    ?>>
                                       NEW
                                    </option>
                        </select>   
                    </div>
                    <div class="form-group col-lg-8 col-md-8 col-6"></div>
                    
                   
                      <div class="form-group col-lg-6 col-md-6 col-6">
                        <input class="btn btn-success" type="submit" value="submit" name="submit">
                      </div>  
                      <div class="form-group col-lg-6 col-md-6 col-6 text-right">
                        <a type="button" id="addCategory" class="btn btn-primary" href="<?=base_url();?>productcategory">Add Category</a>
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