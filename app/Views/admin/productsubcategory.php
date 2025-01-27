<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Add Product Category
            </h3>
            <nav aria-label="breadcrumb">
           
           <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>productsubcategorylist">Product Sub Category List</a>

       </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card w-50">
                <div class="card-body">
                  <h4 class="card-title">Add Product Category</h4>
                  <form class="cmxform" id="pcsform" method="post" action="<?=base_url(); ?>add_productsubcategory">
                    <fieldset class="row">
                    <div class="form-group col-lg-12 col-md-12 col-12">
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
                        <label for="pcsname">Product Sub Category Name</label>
                        <input id="id" class="form-control" name="id" type="hidden" value="<?php if (!empty($single)) {echo $single->id; } ?>">

                        <input id="pcsname" class="form-control" name="pcsname" type="text" value="<?php if (!empty($single)) {echo $single->pcsname; } ?>">
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