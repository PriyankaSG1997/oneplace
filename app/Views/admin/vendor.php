<?php include("header.php");?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
               Add Vendor
            </h3>
            <nav aria-label="breadcrumb">
           
           <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>vendorlist ">Vendor List </a>

       </nav>
            </nav>
          </div>

 
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Vendor</h4>
                  <form class="cmxform" id="vendorForm" method="post" action="<?=base_url(); ?>add_vendor">
                    <fieldset class="row">
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="vendor_name">Vendor Name :</label>
                        <input id="vendor_name" class="form-control" name="vendor_name" type="text">
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="contact_person_name">Contact Person Name :</label>
                        <input id="contact_person_name" class="form-control" name="contact_person_name" type="text">
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="email">Email Id :</label>
                        <input id="email" class="form-control" name="email" type="email">
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="mobileno">Mobile No. :</label>
                        <input id="mobileno" class="form-control" name="mobileno" type="text">
                      </div>
                     
                      <div class="form-group col-lg-4 col-md-4 col-6 ">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password" value="<?php if(!empty($single)){ echo $single->password; } ?>">
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6 ">
                        <label for="confirm_password">Confirm password</label>
                        <input id="confirm_password" class="form-control" name="confirm_password" type="password" value="<?php if(!empty($single)){ echo $single->password; } ?>">
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="country_id">Country</label>
                        <select class="form-control choosen wizard-required" id="country_id" name="country_id">
                            <option value="">Please select country</option>
                            <?php if (!empty($country)) {
                                foreach ($country as $country_result) {
                                    $selected = '';
                                    if ($country_result->id == '101') {
                                        $selected = 'selected="selected"';
                                    }
                                    ?>
                                    <option value="<?= $country_result->id ?>" <?= $selected ?>><?= $country_result->name ?></option>
                                <?php } 
                            } ?>
                        </select>                      
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="state_id">State</label>
                        <select class="form-control choosen wizard-required" id="state_id" name="state_id">
                          <option value="">Please select state</option>
                          <?php if (!empty($single)) { ?>
                              <?php 
                              if (!empty($states)) {
                                  foreach ($states as $state_result) { 
                              ?>
                                  <option value="<?=$state_result->id?>"
                                      <?php 
                                      if ((!empty($single) && $single->state_id == $state_result->id) || $state_result->id == 22) { 
                                          echo 'selected="selected"'; 
                                      }
                                      ?>>
                                      <?=$state_result->name?>
                                  </option>
                              <?php 
                                  } 
                              } 
                              ?>
                          <?php } ?>
                        </select>
             
                      </div>

                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="city_id">City</label>
                        <select class="form-control choosen wizard-required" id="city_id" name="city_id">
                          <option value="">Please select city</option>

                          <?php if((!empty($single)) != "") {?>

                          <?php if(!empty($citys)){foreach($citys as $city_result){?>

                          <option value="<?=$city_result->id?>"

                              <?php if(!empty($single) && $single->city_id == $city_result->id){?>selected="selected"

                              <?php }?>><?=$city_result->name?></option>

                          <?php } } ?>

                          <?php }?>

                          </select>
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label for="vendor_type_id">Vendor Type</label>
                        <select name="vendor_type_id" id="vendor_type_id" class="form-control">
                          <option value="">Please Select Vendor Type</option>
                          <?php if(!empty($vendor_type)){ ?>
                          <?php foreach ($vendor_type as $data): ?>
                              <option value="<?= $data->id; ?>" <?php if (isset($single)) { echo ($single->vendor_type_id == $data->id) ? 'selected="selected"' : ''; } ?>>
                                  <?= $data->vendortype_name; ?>
                              </option>
                          <?php endforeach; ?>
                          <?php } ?>
                        </select>   
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label>GST No</label>
                        <input type="text" class="form-control" id="gst_no" name="gst_no"  value="<?php if (!empty($single)) {echo $single->gst_no; } ?>" placeholder="Enter GST no" >
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-6">
                        <label>PAN No</label>
                        <input type="text" class="form-control" id="pan_no" name="pan_no"  value="<?php if (!empty($single)) {echo $single->pan_no; } ?>" placeholder="Enter PAN no" >
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

        <script>
          $(document).ready(function () {
    // Set preselected country and state IDs
    var selectedCountryId = '101';
    var selectedStateId = '22';
    var selectedCityId = <?= isset($selectedCityId) ? $selectedCityId : 'null' ?>;

    // If a country is preselected, fetch and populate states
    if (selectedCountryId) {
        fetchStates(selectedCountryId, selectedStateId);
    }

    // On country change, fetch states
    $("#country_id").change(function () {
        var countryId = $(this).val();
        if (countryId) {
            fetchStates(countryId, null); // Reset state selection on country change
        }
    });

    // Fetch and populate states based on country
    function fetchStates(countryId, selectedStateId) {
        $.ajax({
            type: "post",
            url: "<?=base_url();?>get_state_name_location",
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
        if (stateId) {
            fetchCities(stateId, null); // Reset city selection on state change
        }
    });

    // Fetch and populate cities based on state
    function fetchCities(stateId, selectedCityId) {
        $.ajax({
            type: "post",
            url: "<?=base_url();?>get_city_name_location",
            data: { 'state_id': stateId },
            success: function (data) {
                $('#city_id').empty();
                $('#city_id').append('<option value="">Choose ...</option>');

                var opts = $.parseJSON(data);
                $.each(opts, function (i, d) {
                    var selected = (d.id == selectedCityId) ? 'selected' : '';
                    $('#city_id').append('<option value="' + d.id + '" ' + selected + '>' + d.name + '</option>');
                });

                $('#city_id').trigger("chosen:updated");
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }
});
          
        </script>