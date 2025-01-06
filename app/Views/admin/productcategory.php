<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Add Product Category
            </h3>
            <nav aria-label="breadcrumb">
           
           <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>productcategorylist">Product Category List</a>

       </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card w-50">
                <div class="card-body">
                  <h4 class="card-title">Add Product Category</h4>
                  <form class="cmxform" id="pcform" method="post" action="<?=base_url(); ?>add_productcategory">
                    <fieldset class="row">
                      <div class="form-group col-lg-12 col-md-12 col-12">
                        <label for="pcname">Product Category Name</label>
                        <input id="id" class="form-control" name="id" type="hidden" value="<?php if (!empty($single)) {echo $single->id; } ?>">

                        <input id="pcname" class="form-control" name="pcname" type="text" value="<?php if (!empty($single)) {echo $single->pcname; } ?>">
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