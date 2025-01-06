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
                  <form class="cmxform" id="productform" method="post" action="<?=base_url(); ?>add_product">
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
                   
                      <div class="form-group col-lg-12 col-md-12 col-12">
                        <input class="btn btn-primary" type="submit" value="submit" name="submit">
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