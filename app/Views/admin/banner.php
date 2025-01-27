<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Add Banner
            </h3>
            <nav aria-label="breadcrumb">
           
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>bannerlist">Banner List</a>

            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Banner</h4>
                  <form class="cmxform" id="bannerform" method="post" action="<?=base_url(); ?>add_banner" enctype="multipart/form-data">
                    <fieldset class="row">
                      <div class="form-group col-lg-4 col-md6-6 col-12">
                        <label for="title1">Title 1</label>
                        <input id="id" class="form-control" name="id" type="hidden" value="<?php if (!empty($single)) {echo $single->id; } ?>">

                        <input id="title1" class="form-control" name="title1" type="text" value="<?php if (!empty($single)) {echo $single->title1; } ?>">
                      </div>
            
                    <!-- banner Number -->
                    <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="title2">Title 2:</label>
                        <input type="text" class="form-control" id="title2" name="title2" placeholder="Enter banner Number" value="<?php if (!empty($single)) {echo $single->title2; } ?>">
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="bannerimg">Image :</label>
                        <input type="file" class="form-control" id="bannerimg" name="bannerimg" accept="image/*" value="<?php if (!empty($single)) {echo $single->bannerimg; } ?>">
                    </div>

                    

                    <!-- banner Details -->
                    <div class="form-group col-lg-12 col-md-12 col-12">
                        <label for="description">Description :</label>
                        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter banner Details"><?php if (!empty($single)) {echo $single->description; } ?></textarea>
                    </div>
                    

                 
                   
                    <div class="form-group col-lg-8 col-md-8 col-6"></div>
                    
                   
                      <div class="form-group col-lg-6 col-md-6 col-6">
                        <input class="btn btn-success" type="submit" value="submit" name="submit">
                      </div>  
                      <div class="form-group col-lg-6 col-md-6 col-6 text-right">
                        <!-- <a type="button" id="addCategory" class="btn btn-primary" href="<?=base_url();?>bannercategory">Add Category</a> -->
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