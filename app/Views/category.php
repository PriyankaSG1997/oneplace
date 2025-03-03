<?php include("header.php");?>


<!-- ============================================== HEADER : END ============================================== --> 

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb ">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="#">Home</a></li>
        <?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Products';
?>
<li class='active'><?= $name; ?></li>      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>

      <!-- /.sidebar -->
      <div class="col-xs-12 col-sm-12 col-md-12 "> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        

        
     
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-bars"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">
              <div class="col col-sm-6 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">position</a></li>
                        <li role="presentation"><a href="#">Price:Lowest first</a></li>
                        <li role="presentation"><a href="#">Price:HIghest first</a></li>
                        <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-6 col-md-6 no-padding hidden-sm hidden-md">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">1</a></li>
                        <li role="presentation"><a href="#">2</a></li>
                        <li role="presentation"><a href="#">3</a></li>
                        <li role="presentation"><a href="#">4</a></li>
                        <li role="presentation"><a href="#">5</a></li>
                        <li role="presentation"><a href="#">6</a></li>
                        <li role="presentation"><a href="#">7</a></li>
                        <li role="presentation"><a href="#">8</a></li>
                        <li role="presentation"><a href="#">9</a></li>
                        <li role="presentation"><a href="#">10</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 col-xs-6 col-lg-4 text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                <?php
// Shuffle the product array
shuffle($product_data);
?>

<?php foreach ($product_data as $product): ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="item">
            <div class="products">
                <div class="product">
                    <div class="product-image">
                        <div class="image"> 
                            <a href="detail.html">
                                <img src="<?= base_url(); ?>public/assets/uploads/<?= $product->mainImage; ?>" alt="<?= $product->productname; ?>"> 
                                <img src="<?= base_url(); ?>public/assets/uploads/<?= $product->hoverimg; ?>" alt="<?= $product->productname; ?>" class="hover-image">
                            </a> 
                        </div>
                        <?php if ($product->product_type == "NEW") { ?>
                                    <div class="tag new"><span>NEW</span></div>
                                <?php } ?>
                                <?php if ($product->product_type == "SALE") { ?>
                                    <div class="tag sale"><span>SALE</span></div>
                                <?php } ?>
                                <?php if ($product->product_type == "HOT") { ?>
                                    <div class="tag hot"><span>HOT</span></div>
                                <?php } ?>                    </div>
                    <div class="product-info text-left">
                        <h3 class="name"><a href="detail.html"><?= $product->productname; ?></a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="product-price"> 
                            <span class="price"> ₹<?= $product->price; ?> </span> 
                            <span class="price-before-discount">₹<?= $product->dprice; ?></span> 
                        </div>
                    </div>
                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
<?php endforeach; ?>


         
                  
         
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane "  id="list-container">
              <div class="category-product">
              <?php foreach ($product_data as $product): ?>
    <div class="category-product-inner">
        <div class="products">
            <div class="product-list product">
                <div class="row product-list-row">
                    <div class="col col-sm-3 col-lg-3">
                        <div class="product-image">
                            <div class="image">
                                <img src="<?= base_url(); ?>/public/assets/uploads/<?= $product->mainImage; ?>" alt="<?= $product->productname; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-9 col-lg-9">
                        <div class="product-info">
                            <h3 class="name">
                                <a href="detail.php?id=<?= $product->id; ?>">
                                    <?= htmlspecialchars($product->productname); ?>
                                </a>
                            </h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price">
                                <span class="price">₹<?= number_format($product->price, 2); ?></span>
                                <span class="price-before-discount">₹<?= number_format($product->dprice, 2); ?></span>
                            </div>
                            <div class="description m-t-10">
                                <?= htmlspecialchars(substr($product->productDetails, 0, 150)); ?>...
                            </div>
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" type="button"> 
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                        </li>
                                        <li class="lnk wishlist">
                                            <a class="add-to-cart" href="wishlist.php?id=<?= $product->id; ?>" title="Wishlist"> 
                                                <i class="icon fa fa-heart"></i> 
                                            </a>
                                        </li>
                                        <li class="lnk">
                                            <a class="add-to-cart" href="compare.php?id=<?= $product->id; ?>" title="Compare"> 
                                                <i class="fa fa-signal"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          <?php if ($product->product_type == "NEW") { ?>
                                    <div class="tag new"><span>NEW</span></div>
                                <?php } ?>
                                <?php if ($product->product_type == "SALE") { ?>
                                    <div class="tag sale"><span>SALE</span></div>
                                <?php } ?>
                                <?php if ($product->product_type == "HOT") { ?>
                                    <div class="tag hot"><span>HOT</span></div>
                                <?php } ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>

          
                
              </div>
              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container bottom-row">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 

    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>

<?php include("footer.php");?>

