<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Add Menu
            </h3>
            <nav aria-label="breadcrumb">
           
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>menulist">Menu List</a>

            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card w-50">
                <div class="card-body">
                  <h4 class="card-title">Add Menu</h4>
                  <form class="cmxform" id="menuform" method="post" action="<?=base_url(); ?>add_menu">
                    <fieldset class="row">
                      <div class="form-group col-lg-12 col-md-12 col-12">
                        <label for="menuname">Menu Name</label>
                        <input id="id" class="form-control" name="id" type="hidden" value="<?php if (!empty($single)) {echo $single->id; } ?>">

                        <input id="menuname" class="form-control" name="menuname" type="text" value="<?php if (!empty($single)) {echo $single->menuname; } ?>">
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-12">
                        <label for="urlname">Menu URL</label>

                        <input id="urlname" class="form-control" name="urlname" type="text" value="<?php if (!empty($single)) {echo $single->urlname; } ?>">
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