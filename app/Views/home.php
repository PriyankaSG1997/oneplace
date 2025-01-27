<?php include("header.php");?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-vs" id="top-banner-and-menu">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
             
      <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm owl-home">
              <?php foreach ($banner_data as $banner) : ?>
                  <div class="item" style="background-image: url('public/assets/uploads/<?= $banner->bannerimg; ?>');">
                      <div class="container-fluid">
                          <div class="caption bg-color vertical-center text-left">
                              <div class="slider-header fadeInDown-1"><?= $banner->title1; ?></div>
                              <div class="big-text fadeInDown-1"><?= $banner->title2; ?></div>
                              <div class="excerpt fadeInDown-2 hidden-xs">
                                  <span><?= $banner->description; ?></span>
                              </div>
                              <div class="button-holder fadeInDown-3">
                                  <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                              </div>
                          </div>
                          </div>
                      </div>
                  <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->

        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== --> 
        
        <!-- ============================================== HOT DEALS ============================================== -->
        <?php
// Randomly select two different vendors
$random_vendor_keys = array_rand($vendor_data, 2); // Get two random keys
?>

<div class="sidebar-widget hot-deals outer-bottom-xs ">
    <h3 class="section-title"><?= $vendor_data[$random_vendor_keys[0]]->city_name; ?></h3>
    <div class="products">
        <div class="hot-deal-wrapper">
            <div class="image">
                <a href="<?= base_url(); ?>shopdetail">
                    <img src="<?= base_url(); ?>public/assets/uploads/<?= $vendor_data[$random_vendor_keys[0]]->shopImage; ?>" 
                         alt="<?= $vendor_data[$random_vendor_keys[0]]->vendor_name; ?>" />
                </a>
                <div class="transparent-text"><?= $vendor_data[$random_vendor_keys[0]]->vendor_name; ?></div>
            </div>
            <div class="sale-offer-tag">
                <span>49%<br>off</span>
            </div>
        </div>
    </div>
</div>

<div class="sidebar-widget hot-deals outer-bottom-xs">
    <h3 class="section-title"><?= $vendor_data[$random_vendor_keys[1]]->city_name; ?></h3>
    <div class="products">
        <div class="hot-deal-wrapper">
            <div class="image">
                <a href="<?= base_url(); ?>shopdetail">
                    <img src="<?= base_url(); ?>public/assets/uploads/<?= $vendor_data[$random_vendor_keys[1]]->shopImage; ?>" 
                         alt="<?= $vendor_data[$random_vendor_keys[1]]->vendor_name; ?>" />
                </a>
                <div class="transparent-text"><?= $vendor_data[$random_vendor_keys[1]]->vendor_name; ?></div>
            </div>
            <div class="sale-offer-tag">
                <span>49%<br>off</span>
            </div>
        </div>
    </div>
</div>
 
      </div>

    
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder  homebanner-first "> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
     
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        

        <!-- ============================================== SCROLL TABS ============================================== -->
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">

           <div class="row">
    <?php 
    if (!empty($product_data)) {
        // Shuffle the product data array to display products randomly
        shuffle($product_data); 
    ?>
        <?php foreach ($product_data as $data) { ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="item">
                    <div class="products">
                        <div class="product">
                            <div class="product-image">
                                <div class="image"> 
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt=""> 
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt="" class="hover-image">
                                    </a> 
                                </div>
                                <div class="tag new"><span><?= $data->product_type; ?></span></div>
                                
                                <?php if ($data->product_type == "NEW") { ?>
                                    <div class="tag new"><span>NEW</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "SALE") { ?>
                                    <div class="tag sale"><span>SALE</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "HOT") { ?>
                                    <div class="tag hot"><span>HOT</span></div>
                                <?php } ?>
                            </div>
                            
                            <div class="product-info text-left">
                                <h3 class="name">
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <?= $data->productname; ?>
                                    </a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>
                                <div class="product-price"> 
                                    <span class="price"> ₹ <?= $data->price; ?> </span> 
                                    <span class="price-before-discount">₹ <?= $data->dprice; ?></span>
                                </div>
                            </div>
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> 
                                                <i class="fa fa-shopping-cart"></i> 
                                            </button>
                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                        </li>
                                        <li class="lnk wishlist"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Wishlist"> 
                                                <i class="icon fa fa-heart"></i> 
                                            </a> 
                                        </li>
                                        <li class="lnk"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Compare"> 
                                                <i class="fa fa-signal"></i> 
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div class="col-12 text-center">
            <p>No products available</p>
        </div>
    <?php } ?>
</div>

              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
   
            <!-- /.tab-pane #list-container --> 
          </div>

        </div>
        <!-- /.scroll-tabs --> 
         
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
  
        <div class="search-result-container srpt">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
           <div class="row">
    <?php 
    if (!empty($product_data)) {
        // Shuffle the product data array to display products randomly
        shuffle($product_data); 
    ?>
        <?php foreach ($product_data as $data) { ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="item">
                    <div class="products">
                        <div class="product">
                            <div class="product-image">
                                <div class="image"> 
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt=""> 
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt="" class="hover-image">
                                    </a> 
                                </div>
                                <div class="tag new"><span><?= $data->product_type; ?></span></div>
                                
                                <?php if ($data->product_type == "NEW") { ?>
                                    <div class="tag new"><span>NEW</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "SALE") { ?>
                                    <div class="tag sale"><span>SALE</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "HOT") { ?>
                                    <div class="tag hot"><span>HOT</span></div>
                                <?php } ?>
                            </div>
                            
                            <div class="product-info text-left">
                                <h3 class="name">
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <?= $data->productname; ?>
                                    </a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>
                                <div class="product-price"> 
                                    <span class="price"> ₹ <?= $data->price; ?> </span> 
                                    <span class="price-before-discount">₹ <?= $data->dprice; ?></span>
                                </div>
                            </div>
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> 
                                                <i class="fa fa-shopping-cart"></i> 
                                            </button>
                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                        </li>
                                        <li class="lnk wishlist"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Wishlist"> 
                                                <i class="icon fa fa-heart"></i> 
                                            </a> 
                                        </li>
                                        <li class="lnk"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Compare"> 
                                                <i class="fa fa-signal"></i> 
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div class="col-12 text-center">
            <p>No products available</p>
        </div>
    <?php } ?>
</div>

                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
   
            <!-- /.tab-pane #list-container --> 
          </div>

        </div>
       
     
        
      </div>

      <div class="col-lg-12 col-md-12 col-12 blpt">
        <div class="slider-wrapper">
          <div class="slider-container">
            <!-- Slide 1 -->
            <div class="image-slider active">
              <div class="row">
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner1.jpg" alt="Banner 9">
                      <div class="banner-text">
                        <h3>Summer Sale</h3>
                        <p>Hot discounts this summer.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 10">
                      <div class="banner-text">
                        <h3>Weekend Deals</h3>
                        <p>Exclusive offers just for you.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner2.jpg" alt="Banner 11">
                      <div class="banner-text">
                        <h3>Pre-order Now</h3>
                        <p>Get the latest products before anyone else.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 12">
                      <div class="banner-text">
                        <h3>Clearance Sale</h3>
                        <p>Up to 70% off on select items.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
            <!-- Slide 2 -->
            <div class="image-slider ">
              <div class="row">
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner1.jpg" alt="Banner 13">
                      <div class="banner-text">
                        <h3>Flash Deals</h3>
                        <p>Limited-time only!</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 14">
                      <div class="banner-text">
                        <h3>Shop Now</h3>
                        <p>Great deals on top products.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner2.jpg" alt="Banner 15">
                      <div class="banner-text">
                        <h3>Holiday Deals</h3>
                        <p>Seasonal offers to enjoy.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 16">
                      <div class="banner-text">
                        <h3>Free Returns</h3>
                        <p>Shop worry-free with free returns.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </div>
      </div>


      
    
    </div>


    <div class="row hotsp" > 
      <!-- ============================================== SIDEBAR ============================================== -->
 <?php
// Randomly select two different vendors
$random_vendor_keys = array_rand($vendor_data, 2); // Get two random keys
?>

<div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 

    <!-- ============================================== HOT DEALS ============================================== -->
    <div class="sidebar-widget hot-deals outer-bottom-xs">
        <h3 class="section-title"><?= $vendor_data[$random_vendor_keys[0]]->city_name; ?></h3>
        <div class="products">
            <div class="hot-deal-wrapper">
                <div class="image">
                    <a href="<?= base_url(); ?>shopdetail">
                        <img src="<?= base_url(); ?>public/assets/uploads/<?= $vendor_data[$random_vendor_keys[0]]->shopImage; ?>" 
                             alt="<?= $vendor_data[$random_vendor_keys[0]]->vendor_name; ?>" />
                    </a>
                    <div class="transparent-text"><?= $vendor_data[$random_vendor_keys[0]]->vendor_name; ?></div>
                </div>
                <div class="sale-offer-tag">
                    <span>49%<br>off</span>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar-widget hot-deals outer-bottom-xs">
        <h3 class="section-title"><?= $vendor_data[$random_vendor_keys[1]]->city_name; ?></h3>
        <div class="products">
            <div class="hot-deal-wrapper">
                <div class="image">
                    <a href="<?= base_url(); ?>shopdetail">
                        <img src="<?= base_url(); ?>public/assets/uploads/<?= $vendor_data[$random_vendor_keys[1]]->shopImage; ?>" 
                             alt="<?= $vendor_data[$random_vendor_keys[1]]->vendor_name; ?>" />
                    </a>
                    <div class="transparent-text"><?= $vendor_data[$random_vendor_keys[1]]->vendor_name; ?></div>
                </div>
                <div class="sale-offer-tag">
                    <span>49%<br>off</span>
                </div>
            </div>
        </div>
    </div>
</div>

    
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder "> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url(public/frontend/assets/images/sliders/01.jpg);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Top Brands</div>
                  <div class="big-text fadeInDown-1"> New Collections </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            
            <div class="item" style="background-image: url(public/frontend/assets/images/sliders/02.jpg);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Spring 2018</div>
                  <div class="big-text fadeInDown-1"> Women Fashion </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        

        <!-- ============================================== SCROLL TABS ============================================== -->
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
           <div class="row">
    <?php 
    if (!empty($product_data)) {
        // Shuffle the product data array to display products randomly
        shuffle($product_data); 
    ?>
        <?php foreach ($product_data as $data) { ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="item">
                    <div class="products">
                        <div class="product">
                            <div class="product-image">
                                <div class="image"> 
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt=""> 
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt="" class="hover-image">
                                    </a> 
                                </div>
                                <div class="tag new"><span><?= $data->product_type; ?></span></div>
                                
                                <?php if ($data->product_type == "NEW") { ?>
                                    <div class="tag new"><span>NEW</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "SALE") { ?>
                                    <div class="tag sale"><span>SALE</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "HOT") { ?>
                                    <div class="tag hot"><span>HOT</span></div>
                                <?php } ?>
                            </div>
                            
                            <div class="product-info text-left">
                                <h3 class="name">
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <?= $data->productname; ?>
                                    </a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>
                                <div class="product-price"> 
                                    <span class="price"> ₹ <?= $data->price; ?> </span> 
                                    <span class="price-before-discount">₹ <?= $data->dprice; ?></span>
                                </div>
                            </div>
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> 
                                                <i class="fa fa-shopping-cart"></i> 
                                            </button>
                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                        </li>
                                        <li class="lnk wishlist"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Wishlist"> 
                                                <i class="icon fa fa-heart"></i> 
                                            </a> 
                                        </li>
                                        <li class="lnk"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Compare"> 
                                                <i class="fa fa-signal"></i> 
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div class="col-12 text-center">
            <p>No products available</p>
        </div>
    <?php } ?>
</div>

                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
   
            <!-- /.tab-pane #list-container --> 
          </div>

        </div>
        <!-- /.scroll-tabs --> 
         
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
  
        <div class="search-result-container srpt">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
           <div class="row">
    <?php 
    if (!empty($product_data)) {
        // Shuffle the product data array to display products randomly
        shuffle($product_data); 
    ?>
        <?php foreach ($product_data as $data) { ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="item">
                    <div class="products">
                        <div class="product">
                            <div class="product-image">
                                <div class="image"> 
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt=""> 
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt="" class="hover-image">
                                    </a> 
                                </div>
                                <div class="tag new"><span><?= $data->product_type; ?></span></div>
                                
                                <?php if ($data->product_type == "NEW") { ?>
                                    <div class="tag new"><span>NEW</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "SALE") { ?>
                                    <div class="tag sale"><span>SALE</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "HOT") { ?>
                                    <div class="tag hot"><span>HOT</span></div>
                                <?php } ?>
                            </div>
                            
                            <div class="product-info text-left">
                                <h3 class="name">
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <?= $data->productname; ?>
                                    </a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>
                                <div class="product-price"> 
                                    <span class="price"> ₹ <?= $data->price; ?> </span> 
                                    <span class="price-before-discount">₹ <?= $data->dprice; ?></span>
                                </div>
                            </div>
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> 
                                                <i class="fa fa-shopping-cart"></i> 
                                            </button>
                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                        </li>
                                        <li class="lnk wishlist"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Wishlist"> 
                                                <i class="icon fa fa-heart"></i> 
                                            </a> 
                                        </li>
                                        <li class="lnk"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Compare"> 
                                                <i class="fa fa-signal"></i> 
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div class="col-12 text-center">
            <p>No products available</p>
        </div>
    <?php } ?>
</div>

                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
   
            <!-- /.tab-pane #list-container --> 
          </div>

        </div>
       
     
        
      </div>

      <div class="col-lg-12 col-md-12 col-12 blpt">
        <div class="slider-wrapper">
          <div class="slider-container">
            <!-- Slide 1 -->
            <div class="image-slider active">
              <div class="row">
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner1.jpg" alt="Banner 9">
                      <div class="banner-text">
                        <h3>Summer Sale</h3>
                        <p>Hot discounts this summer.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 10">
                      <div class="banner-text">
                        <h3>Weekend Deals</h3>
                        <p>Exclusive offers just for you.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner2.jpg" alt="Banner 11">
                      <div class="banner-text">
                        <h3>Pre-order Now</h3>
                        <p>Get the latest products before anyone else.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 12">
                      <div class="banner-text">
                        <h3>Clearance Sale</h3>
                        <p>Up to 70% off on select items.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
            <!-- Slide 2 -->
            <div class="image-slider">
              <div class="row">
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner1.jpg" alt="Banner 13">
                      <div class="banner-text">
                        <h3>Flash Deals</h3>
                        <p>Limited-time only!</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 14">
                      <div class="banner-text">
                        <h3>Shop Now</h3>
                        <p>Great deals on top products.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner2.jpg" alt="Banner 15">
                      <div class="banner-text">
                        <h3>Holiday Deals</h3>
                        <p>Seasonal offers to enjoy.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 16">
                      <div class="banner-text">
                        <h3>Free Returns</h3>
                        <p>Shop worry-free with free returns.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </div>
      </div>


      
    
    </div>
    

    <div class="row hotsp"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <?php
// Randomly select two different vendors
$random_vendor_keys = array_rand($vendor_data, 2); // Get two random keys
?>

<div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 

    <!-- ============================================== HOT DEALS ============================================== -->
    <div class="sidebar-widget hot-deals outer-bottom-xs">
        <h3 class="section-title"><?= $vendor_data[$random_vendor_keys[0]]->city_name; ?></h3>
        <div class="products">
            <div class="hot-deal-wrapper">
                <div class="image">
                    <a href="<?= base_url(); ?>shopdetail">
                        <img src="<?= base_url(); ?>public/assets/uploads/<?= $vendor_data[$random_vendor_keys[0]]->shopImage; ?>" 
                             alt="<?= $vendor_data[$random_vendor_keys[0]]->vendor_name; ?>" />
                    </a>
                    <div class="transparent-text"><?= $vendor_data[$random_vendor_keys[0]]->vendor_name; ?></div>
                </div>
                <div class="sale-offer-tag">
                    <span>49%<br>off</span>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar-widget hot-deals outer-bottom-xs">
        <h3 class="section-title"><?= $vendor_data[$random_vendor_keys[1]]->city_name; ?></h3>
        <div class="products">
            <div class="hot-deal-wrapper">
                <div class="image">
                    <a href="<?= base_url(); ?>shopdetail">
                        <img src="<?= base_url(); ?>public/assets/uploads/<?= $vendor_data[$random_vendor_keys[1]]->shopImage; ?>" 
                             alt="<?= $vendor_data[$random_vendor_keys[1]]->vendor_name; ?>" />
                    </a>
                    <div class="transparent-text"><?= $vendor_data[$random_vendor_keys[1]]->vendor_name; ?></div>
                </div>
                <div class="sale-offer-tag">
                    <span>49%<br>off</span>
                </div>
            </div>
        </div>
    </div>
</div>

    
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url(public/frontend/assets/images/sliders/01.jpg);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Top Brands</div>
                  <div class="big-text fadeInDown-1"> New Collections </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            
            <div class="item" style="background-image: url(public/frontend/assets/images/sliders/02.jpg);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Spring 2018</div>
                  <div class="big-text fadeInDown-1"> Women Fashion </div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        

        <!-- ============================================== SCROLL TABS ============================================== -->
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
           <div class="row">
    <?php 
    if (!empty($product_data)) {
        // Shuffle the product data array to display products randomly
        shuffle($product_data); 
    ?>
        <?php foreach ($product_data as $data) { ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="item">
                    <div class="products">
                        <div class="product">
                            <div class="product-image">
                                <div class="image"> 
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt=""> 
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt="" class="hover-image">
                                    </a> 
                                </div>
                                <div class="tag new"><span><?= $data->product_type; ?></span></div>
                                
                                <?php if ($data->product_type == "NEW") { ?>
                                    <div class="tag new"><span>NEW</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "SALE") { ?>
                                    <div class="tag sale"><span>SALE</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "HOT") { ?>
                                    <div class="tag hot"><span>HOT</span></div>
                                <?php } ?>
                            </div>
                            
                            <div class="product-info text-left">
                                <h3 class="name">
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <?= $data->productname; ?>
                                    </a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>
                                <div class="product-price"> 
                                    <span class="price"> ₹ <?= $data->price; ?> </span> 
                                    <span class="price-before-discount">₹ <?= $data->dprice; ?></span>
                                </div>
                            </div>
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> 
                                                <i class="fa fa-shopping-cart"></i> 
                                            </button>
                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                        </li>
                                        <li class="lnk wishlist"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Wishlist"> 
                                                <i class="icon fa fa-heart"></i> 
                                            </a> 
                                        </li>
                                        <li class="lnk"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Compare"> 
                                                <i class="fa fa-signal"></i> 
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div class="col-12 text-center">
            <p>No products available</p>
        </div>
    <?php } ?>
</div>

                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
   
            <!-- /.tab-pane #list-container --> 
          </div>

        </div>
        <!-- /.scroll-tabs --> 
         
        <!-- ============================================== SCROLL TABS : END ============================================== --> 
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
  
        <div class="search-result-container srpt">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
           <div class="row">
    <?php 
    if (!empty($product_data)) {
        // Shuffle the product data array to display products randomly
        shuffle($product_data); 
    ?>
        <?php foreach ($product_data as $data) { ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="item">
                    <div class="products">
                        <div class="product">
                            <div class="product-image">
                                <div class="image"> 
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt=""> 
                                        <img src="<?= base_url('public/assets/uploads/' . $data->mainImage); ?>" alt="" class="hover-image">
                                    </a> 
                                </div>
                                <div class="tag new"><span><?= $data->product_type; ?></span></div>
                                
                                <?php if ($data->product_type == "NEW") { ?>
                                    <div class="tag new"><span>NEW</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "SALE") { ?>
                                    <div class="tag sale"><span>SALE</span></div>
                                <?php } ?>
                                <?php if ($data->product_type == "HOT") { ?>
                                    <div class="tag hot"><span>HOT</span></div>
                                <?php } ?>
                            </div>
                            
                            <div class="product-info text-left">
                                <h3 class="name">
                                    <a href="<?= base_url(); ?>productdetail/<?= $data->id; ?>">
                                        <?= $data->productname; ?>
                                    </a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>
                                <div class="product-price"> 
                                    <span class="price"> ₹ <?= $data->price; ?> </span> 
                                    <span class="price-before-discount">₹ <?= $data->dprice; ?></span>
                                </div>
                            </div>
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> 
                                                <i class="fa fa-shopping-cart"></i> 
                                            </button>
                                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                        </li>
                                        <li class="lnk wishlist"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Wishlist"> 
                                                <i class="icon fa fa-heart"></i> 
                                            </a> 
                                        </li>
                                        <li class="lnk"> 
                                            <a class="add-to-cart" href="<?= base_url(); ?>productdetail/<?= $data->id; ?>" title="Compare"> 
                                                <i class="fa fa-signal"></i> 
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div class="col-12 text-center">
            <p>No products available</p>
        </div>
    <?php } ?>
</div>

                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->
            
   
            <!-- /.tab-pane #list-container --> 
          </div>

        </div>
       
     
        
      </div>

      <div class="col-lg-12 col-md-12 col-12 blpt">
        <div class="slider-wrapper">
          <div class="slider-container">
            <!-- Slide 1 -->
            <div class="image-slider active">
              <div class="row">
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner1.jpg" alt="Banner 9">
                      <div class="banner-text">
                        <h3>Summer Sale</h3>
                        <p>Hot discounts this summer.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 10">
                      <div class="banner-text">
                        <h3>Weekend Deals</h3>
                        <p>Exclusive offers just for you.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner2.jpg" alt="Banner 11">
                      <div class="banner-text">
                        <h3>Pre-order Now</h3>
                        <p>Get the latest products before anyone else.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 12">
                      <div class="banner-text">
                        <h3>Clearance Sale</h3>
                        <p>Up to 70% off on select items.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
            <!-- Slide 2 -->
            <div class="image-slider">
              <div class="row">
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner1.jpg" alt="Banner 13">
                      <div class="banner-text">
                        <h3>Flash Deals</h3>
                        <p>Limited-time only!</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 14">
                      <div class="banner-text">
                        <h3>Shop Now</h3>
                        <p>Great deals on top products.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner2.jpg" alt="Banner 15">
                      <div class="banner-text">
                        <h3>Holiday Deals</h3>
                        <p>Seasonal offers to enjoy.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img class="img-responsive" src="<?=base_url(); ?>public/frontend/assets/images/banners/home-banner3.jpg" alt="Banner 16">
                      <div class="banner-text">
                        <h3>Free Returns</h3>
                        <p>Shop worry-free with free returns.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
          </div>
        </div>
      </div>


      
    
    </div>
    
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
   
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 


        <!-- ============================================== INFO BOXES : END ============================================== --> 

        <?php include("footer.php");?>
