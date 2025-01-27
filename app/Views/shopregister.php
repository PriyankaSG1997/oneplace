<?php include("header.php");?>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Shop Register</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container ">
		<div class="sign-in-page ">
			<div class="row">
          <div class="col-md-12 col-sm-12 create-new-account ">
            <h4 class="checkout-subtitle">Shop Register</h4>
            <p class="text title-tag-line">Shop Register.</p>
            <form class="cmxform" id="vendorForm" method="post" action="<?=base_url(); ?>add_shop" enctype="multipart/form-data">
              <fieldset class="row">
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label class="info-title" for="vendor_name">Shop Name :</label>
                        <input id="id"  class="form-control unicase-form-control text-input" name="id" type="hidden" value="<?php if(!empty($single)){ echo $single->id; } ?>">

                        <input id="vendor_name"  class="form-control unicase-form-control text-input" name="vendor_name" type="text" value="<?php if(!empty($single)){ echo $single->vendor_name; } ?>">
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label class="info-title" for="contact_person_name">Owner Name :</label>
                        <input id="contact_person_name"  class="form-control unicase-form-control text-input" name="contact_person_name" type="text" value="<?php if(!empty($single)){ echo $single->contact_person_name; } ?>">
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label class="info-title" for="email">Email Id :</label>
                        <input id="email"  class="form-control unicase-form-control text-input" name="email" type="email" value="<?php if(!empty($single)){ echo $single->email; } ?>">
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label class="info-title" for="mobileno">Mobile No. :</label>
                        <input id="mobileno"  class="form-control unicase-form-control text-input" name="mobileno" type="text" value="<?php if(!empty($single)){ echo $single->mobileno; } ?>">
                      </div>
                     
                      <div class="form-group col-lg-4 col-md-4 col-6 ">
                        <label class="info-title" for="password">Password</label>
                        <input id="password"  class="form-control unicase-form-control text-input" name="password" type="password" value="<?php if(!empty($single)){ echo $single->password; } ?>">
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6 ">
                        <label class="info-title" for="confirm_password">Confirm password</label>
                        <input id="confirm_password"  class="form-control unicase-form-control text-input" name="confirm_password" type="password" value="<?php if(!empty($single)){ echo $single->password; } ?>">
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-12 ">
                      
                        <hr><p class="text title-tag-line">Other Details</p>

                      </div>
              </fieldset>
              <fieldset class="row other-fields">
             
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label class="info-title" for="country_id">Country</label>
                        <select class="form-control choosen" id="country_id" name="Country">
                          <option value="">Please select country</option>
                          <?php 
                          if (!empty($country)) {
                              foreach ($country as $country_result) {
                                  // Check if single data is available or set default to 101
                                  $selected = ((!empty($single) && isset($single->country_id) && $country_result->id == $single->country_id) || (empty($single) && $country_result->id == 101)) ? 'selected="selected"' : '';
                                  echo '<option value="' . $country_result->id . '" ' . $selected . '>' . $country_result->name . '</option>';
                              }
                          } 
                          ?>
                        </select>                 
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label class="info-title" for="state_id">State</label>
                        <select class="form-control choosen wizard-required" id="state_id" name="State">
                            <option value="">Please select state</option>
                            <?php 
                            if (!empty($states)) {
                                foreach ($states as $state_result) {
                                    // Ensure $single->State exists and is not empty
                                    $selected = (!empty($single) && isset($single->state_id) && $state_result->id == $single->state_id) ? 'selected="selected"' : '';
                                    echo '<option value="' . $state_result->id . '" ' . $selected . '>' . $state_result->name . '</option>';
                                }
                            } 
                            ?>
                        </select>
             
                      </div>

                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label class="info-title" for="city_id">City</label>
                        <select class="form-control choosen" id="city_id" name="city_id">
                            <option value="">Please select city</option>
                            <?php 
                            if (!empty($citys)) {
                                foreach ($citys as $city_result) {
                                    // Ensure $single->city_id exists and is not empty
                                    $selected = (!empty($single) && isset($single->city_id) && $city_result->id == $single->city_id) ? 'selected="selected"' : '';
                                    echo '<option value="' . $city_result->id . '" ' . $selected . '>' . $city_result->name . '</option>';
                                }
                            } 
                            ?>
                        </select>

                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label class="info-title" for="vendor_type_id">Vendor Type</label>
                        <select name="vendor_type_id" id="vendor_type_id"  class="form-control unicase-form-control text-input">
                            <option value="">Please Select Vendor Type</option>
                            <?php if(!empty($vendor_type)){ ?>
                                <?php foreach ($vendor_type as $data): ?>
                                    <option value="<?= $data->id; ?>" <?php 
                                        // Check if $single is an object and if vendor_type_id is set before comparing
                                        if (isset($single) && is_object($single) && isset($single->vendor_type_id)) {
                                            echo ($single->vendor_type_id == $data->id) ? 'selected="selected"' : '';
                                        }
                                    ?>>
                                        <?= $data->vendortype_name; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php } ?>
                        </select>   
                      </div>

                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label class="info-title">GST No</label>
                        <input type="text"  class="form-control unicase-form-control text-input" id="gst_no" name="gst_no"  value="<?php if (!empty($single)) {echo $single->gst_no; } ?>" placeholder="Enter GST no" >
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label class="info-title">PAN No</label>
                        <input type="text"  class="form-control unicase-form-control text-input" id="pan_no" name="pan_no"  value="<?php if (!empty($single)) {echo $single->pan_no; } ?>" placeholder="Enter PAN no" >
                      </div>

                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label class="info-title" for="shopImage">Shop Image :</label>
                        <input type="file"  class="form-control unicase-form-control text-input" id="shopImage" name="shopImage" accept="image/*" value="<?php if (!empty($single)) {echo $single->shopImage; } ?>">
                      </div>        
                      <div class="form-group col-lg-12 col-md-12 col-12">
                        <input class="btn btn-primary" type="submit" value="submit" name="submit">
                      </div>
              </fieldset>
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
              // Set preselected country, state, and city IDs
              var selectedCountryId = '101';
              var selectedStateId = '22';
              var selectedCityId = <?= isset($single->city_id) ? $single->city_id : 'null' ?>; // Ensure this is correct

              // If a country is preselected, fetch and populate states
              if (selectedCountryId) {
                  fetchStates(selectedCountryId, selectedStateId);
              }

              // On country change, fetch states
              $("#country_id").change(function () {
                  var countryId = $(this).val();
                  selectedCountryId = countryId; // Update selected country
                  if (countryId) {
                      fetchStates(countryId, null); // Reset state selection on country change
                  }
              });

              // Fetch and populate states based on country
              function fetchStates(countryId, selectedStateId) {
                  $.ajax({
                      type: "post",
                      url: "<?= base_url(); ?>get_state_name_location",
                      data: { 'country_id': countryId },
                      success: function (data) {
                          $('#state_id').empty();
                          $('#state_id').append('<option value="">Choose ...</option>');

                          var opts = $.parseJSON(data);
                          $.each(opts, function (i, d) {
                              var selected = (d.id == selectedStateId) ? 'selected' : '';
                              $('#state_id').append('<option value="' + d.id + '" ' + selected + '>' + d.name + '</option>');
                          });

                          $('#state_id').trigger("chosen:updated");

                          // If a state is preselected, fetch cities
                          if (selectedStateId) {
                              fetchCities(selectedStateId, selectedCityId);
                          }
                      },
                      error: function (jqXHR, textStatus, errorThrown) {
                          console.log(textStatus, errorThrown);
                      }
                  });
              }

              // On state change, fetch cities
              $("#state_id").change(function () {
                  var stateId = $(this).val();
                  selectedStateId = stateId; // Update selected state
                  if (stateId) {
                      fetchCities(stateId, null); // Reset city selection on state change
                  }
              });

              // Fetch and populate cities based on state
              function fetchCities(stateId, selectedCityId) {
                  $.ajax({
                      type: "post",
                      url: "<?= base_url(); ?>get_city_name_location",
                      data: { 'state_id': stateId },
                      success: function (data) {
                          $('#city_id').empty(); // Only empty when fetching new data
                          $('#city_id').append('<option value="">Choose ...</option>'); // Default option

                          var opts = $.parseJSON(data);
                          $.each(opts, function (i, d) {
                              var selected = (d.id == selectedCityId) ? 'selected' : ''; // Preselect if matched
                              $('#city_id').append('<option value="' + d.id + '" ' + selected + '>' + d.name + '</option>');
                          });

                          // If city was preselected and exists in the options
                          if (selectedCityId && opts.length > 0) {
                              $('#city_id').val(selectedCityId); // Manually set the selected city
                          }

                          $('#city_id').trigger("chosen:updated"); // Refresh Chosen if you are using the Chosen plugin
                      },
                      error: function (jqXHR, textStatus, errorThrown) {
                          console.log(textStatus, errorThrown);
                      }
                  });
              }
          });

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


              $.validator.addMethod('countrySelected', function(value, element) {
                return value !== 'SelectCountry';
              }, 'Please select a country.');


              $.validator.addMethod('stateSelected', function(value, element) {
                return value !== 'SelectState';
              },'Please select a state.');



              $.validator.addMethod('gstNumber', function(value, element) {
                // GST number format: 2 numeric digits followed by 10 alphanumeric characters
                return /^[0-9]{2}[A-Z0-9]{10}$/.test(value);
              }, 'Please enter a valid GST number (e.g., 12ABCDE3456F)');

              $.validator.addMethod('panNumber', function(value, element) {
                // PAN number format: 5 uppercase letters, 4 numbers, and 1 uppercase letter
                return /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value);
              }, 'Please enter a valid PAN number (e.g., ABCDE1234F)');

              $.validator.addMethod('validBankName', function(value, element) {
                // This regex allows letters, spaces, and some special characters commonly found in bank names.
                return /^[A-Za-z\s&.'-]+$/.test(value);
              }, 'Please enter a valid bank name.');

              $.validator.addMethod('validBankNo', function(value, element) {
                // This regex allows numbers and may include spaces or hyphens.
                return /^[0-9\s-]+$/.test(value) && value.length >= 9 && value.length <= 18;
              }, 'Please enter a valid bank number (9-18 characters).');


              $.validator.addMethod('validBankHolderName', function(value, element) {
                // This regex allows letters, spaces, and some special characters commonly found in names.
                return /^[A-Za-z\s&.'-]+$/.test(value);
              }, 'Please enter a valid bank holder name.');

              $.validator.addMethod('validIFSCCode', function(value, element) {
                // This regex checks if the IFSC code matches the pattern for Indian banks.
                return /^[A-Z]{4}\d{7}$/.test(value);
              }, 'Please enter a valid IFSC code (e.g., ABCD0123456).');

              $.validator.addMethod('validBranchName', function(value, element) {
                // This regex allows letters, spaces, and some special characters commonly found in branch names.
                return /^[A-Za-z\s&.'-]+$/.test(value);
              }, 'Please enter a valid branch name.');
              $("#vendorForm").validate({
              rules: {
                vendor_name: {
                  required: true,
                  lettersOnly: true, // Use the custom method here
                },
                contact_person_name:{
                    lettersOnly: true,
                },
                mobileno: {
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
                country_id:{
                  required:true,
                    countrySelected: true
                },
                state_id:{
                    required:true,
                    stateSelected: true
                },
                city_id:{
                  required:true,
                  stateSelected: true
                },
                vendor_type_id:{
                  required:true,
                  stateSelected: true
                },
                gst_no: {
                    gstNumber:true,
                },
                pan_no: {
                    panNumber: true,
                },
              
              
              },
              messages: {
                vendor_name: {
                  required: 'Please enter vendor name.',
                  lettersOnly: 'Please enter letters only.' // Custom error message
                  },
                  contact_person_name:{
                      lettersOnly: 'Please enter letters only.'
                  },
                  mobileno: {
                    required: "Please enter mobile no.",
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
                  country_id:{
                    required: 'Please select a country.'
                  },
                  state_id:{
                      required: 'Please select state.',
                  },
                  city_id:{
                    required: 'Please select state.',
                  },
                  vendor_type_id:{
                    required: 'Please select vendor type.',
                  },

                  gst_no: { 
                      gstNumber: 'Please enter a valid GST number (e.g., 12ABCDE3456F)'
                  },
                  pan_no: {
                      panNumber: 'Please enter a valid PAN number (e.g., ABCDE1234F)'
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
