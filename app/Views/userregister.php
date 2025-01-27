<?php include("header.php");?>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container ">
		<div class="sign-in-page ">
			<div class="row">
          <div class="col-md-12 col-sm-12 create-new-account ">
            <h4 class="checkout-subtitle">User Register</h4>
            <p class="text title-tag-line">User Register.</p>
            <form class="register-form outer-top-xs row" role="form" id="userregister" method="post" action="<?=base_url(); ?>add_customer" >
              <div class="form-group col-lg-6 col-md-6 col-12">
                  <label class="info-title" for="name">Name <span>*</span></label>
                  <input type="hidden"  name="id" id="id" >

                  <input type="text" class="form-control unicase-form-control text-input" name="name" id="name" >
                </div>
                  <div class="form-group col-lg-6 col-md-6 col-12">
                  <label class="info-title" for="whatsappnumber">Whatsapp Number <span>*</span></label>
                  <input type="tel" class="form-control unicase-form-control text-input" name="whatsappnumber" id="whatsappnumber" >
              </div>
                
              <div class="form-group col-lg-6 col-md-6 col-12">
                  <label class="info-title" for="password">Password <span>*</span></label>
                  <input type="password" class="form-control unicase-form-control text-input" name="password" id="password" >
              </div>
              <div class="form-group col-lg-6 col-md-6 col-12">
                <label class="info-title" for="confirm_password">Confirm Password <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" name="confirm_password" id="confirm_password" >
            </div>
            
            
            <div class="form-group col-lg-12 col-md-12 col-12">
                        <input class="btn btn-primary" type="submit" value="submit" name="submit">
                      </div>
            </form>
            
            
          </div>	
	    </div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->




        <?php include("footer.php");?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

        <!-- Include the RateIt plugin JS (if using RateIt plugin) -->
        <script src="<?=base_url(); ?>public/frontend/assets/js/jquery.rateit.min.js"></script>

        <!-- Include the Owl Carousel plugin JS -->
        <script src="<?=base_url(); ?>public/frontend/assets/js/owl.carousel.min.js"></script>

        <!-- Your custom JS file -->
        <script src="<?=base_url(); ?>public/frontend/assets/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

<script>
         $(document).ready(function () {
           
    
           $.validator.addMethod('lettersOnly', function (value, element) {
                 return /^[a-zA-Z\s]*$/.test(value); // This regex allows only letters and spaces
             }, 'Please enter letters only');

           $.validator.addMethod('customPassword', function(value, element) {
             // Password must contain at least one uppercase letter, one lowercase letter, one number, and one symbol. It should be at least 8 characters long.
             return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[a-zA-Z\d!@#$%^&*]{8,}$/.test(value);
           }, 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one symbol (!@#$%^&*) and be at least 8 characters long');

           $.validator.addMethod('phoneLength', function(value, element) {
             return /^\d{10,12}$/.test(value);
           }, 'Please enter a valid phone number with 10 to 12 digits.');
           $("#userregister").validate({
           rules: {
            name: {
               required: true,
               lettersOnly: true, // Use the custom method here
             },
        
             whatsappnumber: {
               required: true,
               phoneLength: true,     
             },
             email: {
               required: true,
                 email: true,
             },
             password: {
               required: true,
               minlength: 5
             },
             confirm_password: {
               required: true,
               minlength: 5,
               equalTo: "#password"
             },
       
           
           
           },
           messages: {
            name: {
               required: 'Please enter name.',
               lettersOnly: 'Please enter letters only.' // Custom error message
               },
              
               whatsappnumber: {
                 required: "Please enter whatsapp number.",
                 phoneLength: 'Please enter your valid phone no.'     
               },
         
               email: {
                 required: "Please enter email.",
                   email: 'Please enter a valid email address.'
               },
               password: {
                 required: "Please provide a password",
                 minlength: "Your password must be at least 5 characters long"
               },
               confirm_password: {
                 required: "Please provide a password",
                 minlength: "Your password must be at least 5 characters long",
                 equalTo: "Please enter the same password as above"
               },
              
           
           },

           
           errorPlacement: function(label, element) {
             label.addClass('mt-2 text-danger');
             label.insertAfter(element);
           },
           highlight: function(element, errorClass) {
             $(element).parent().addClass('has-danger')
             $(element).addClass('form-control-danger')
           }
         });
       });
</script>