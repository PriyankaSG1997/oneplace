<?php include("header.php"); ?>

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
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create New Product</h4>

            <form class="cmxform" id="productform" method="post" action="<?=base_url(); ?>add_product">
                <div class="row">
                    <!-- Category Dropdown -->
                    <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="productcategory_id">Product Category : </label>
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

                    <!-- Product Name -->
                    <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="productname">Product Name : </label>
                        <input id="id" class="form-control" name="id" type="hidden" value="<?php if (!empty($single)) {echo $single->id; } ?>">

                        <input id="productname" class="form-control" name="productname" type="text" value="<?php if (!empty($single)) {echo $single->productname; } ?>">
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
                </div>

                <div class="row">
                    <!-- Main Image Picker -->
                    <div class="form-group col-lg-3 col-md-4 col-6">
                        <label for="mainImage">Main Image :</label>
                        <input type="file" class="form-control" id="mainImage" name="mainImage" accept="image/*" value="<?php if (!empty($single)) {echo $single->mainImage; } ?>">
                    </div>


                    <div class="form-group col-lg-3 col-md-4 col-6">
                        <label for="hoverimg">Hover Image :</label>
                        <input type="file" class="form-control" id="hoverimg" name="hoverimg" accept="image/*" value="<?php if (!empty($single)) {echo $single->hoverimg; } ?>">
                    </div>

                    <!-- Variants Image Picker -->
                    <div class="form-group col-lg-3 col-md-4 col-6">
                        <label for="variantImages">Variant Images :</label>
                        <input type="file" class="form-control" id="variantImages" name="variantImages" accept="image/*" value="<?php if (!empty($single)) {echo $single->mainImage; } ?>" multiple>
                    </div>

                    <!-- Price -->
                    <div class="form-group col-lg-3 col-md-4 col-6">
                        <label for="price">Price :</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" value="<?php if (!empty($single)) {echo $single->price; } ?>">
                    </div>

                    <!-- Total Quantity -->
                    <div class="form-group col-lg-3 col-md-4 col-6">
                        <label for="totalQty">Total Quantity :</label>
                        <input type="number" class="form-control" id="totalQty" name="totalQty" placeholder="Enter Total Quantity" value="<?php if (!empty($single)) {echo $single->totalQty; } ?>">
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                    <input class="btn btn-primary" type="submit" value="submit" name="submit">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                    <div class="col-md-6 text-right">
                        <a type="button" id="addCategory" class="btn btn-primary" href="<?=base_url();?>productcategory">Add Category</a>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php include("footer.php"); ?>

<script>
    $(document).ready(function() {
        $("#productform").validate({
            rules: {
                productname: "required",
                productcategory_id: {
                    required: true,
                    stateSelected: true
                },
                productNumber: {
                    required: true,
                    minlength: 5,
                    maxlength: 15
                },
                productDetails: {
                    required: true,
                    minlength: 10
                },
                mainImage: {
                    required: true,
                    extension: "jpg|jpeg|png|gif"
                },
                variantImages: {
                    extension: "jpg|jpeg|png|gif"
                },
                price: {
                    required: true,
                    number: true,
                    min: 0
                },
                totalQty: {
                    required: true,
                    digits: true,
                    min: 1
                }
            },
            messages: {
                productname: "Please enter your product name",
                productcategory_id: {
                    required: "Please select a product category"
                },
                productNumber: {
                    required: "Please enter a product number",
                    minlength: "Product number must be at least 5 characters long",
                    maxlength: "Product number must not exceed 15 characters"
                },
                productDetails: {
                    required: "Please enter product details",
                    minlength: "Product details must be at least 10 characters long"
                },
                mainImage: {
                    required: "Please upload a main image",
                    extension: "Allowed image formats are jpg, jpeg, png, gif"
                },
                variantImages: {
                    extension: "Allowed image formats are jpg, jpeg, png, gif"
                },
                price: {
                    required: "Please enter the price",
                    number: "Price must be a valid number",
                    min: "Price cannot be negative"
                },
                totalQty: {
                    required: "Please enter total quantity",
                    digits: "Quantity must be a valid number",
                    min: "Quantity must be at least 1"
                }
            }
        });
    });
</script>