(function($) {
  'use strict';

  $(function() {

    
$.validator.addMethod('lettersOnly', function(value, element) {
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

    // validate the comment form when it is submitted
    $("#commentForm").validate({
      errorPlacement: function(label, element) {
        label.addClass('mt-2 text-danger');
        label.insertAfter(element);
      },
      highlight: function(element, errorClass) {
        $(element).parent().addClass('has-danger')
        $(element).addClass('form-control-danger')
      }
    });
    // validate signup form on keyup and submit
    $("#userForm").validate({
      rules: {
        firstname: "required",
        lastname: "required",
        username: {
          required: true,
          minlength: 2
        },
        mobileno: {
          required: true,
          maxlength: 12
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
        email: {
          required: true,
          email: true
        },
       
      },
      messages: {
        firstname: "Please enter your firstname",
        lastname: "Please enter your lastname",
        username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        mobileno: {
          required: "Please enter a mobile no",
          minlength: "Your mobile no must consist of at max 10 or 12 number"
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
        email: "Please enter a valid email address",
      
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

    $("#pcform").validate({
      rules: {
        pcname: "required",
      },
      messages: {
        pcname: "Please enter your Product Category Name",
       
      
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

    $("#menuform").validate({
      rules: {
        menuname: "required",
        menuurl: "required",
      },
      messages: {
        menuname: "Please enter your menu name",
        menuurl: "Please enter your menu URL",

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

    $("#productform").validate({
      rules: {
        productname: "required",
        productcategory_id:{
          required:true,
          stateSelected: true
        },      },
      messages: {
        productname: "Please enter your product name",
        productcategory_id:{
          required: 'Please select product category.',
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
    // propose username by combining first- and lastname
    $("#username").focus(function() {
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      if (firstname && lastname && !this.value) {
        this.value = firstname + "." + lastname;
      }
    });
    //code to hide topic selection, disable for demo
    var newsletter = $("#newsletter");
    // newsletter topics are optional, hide at first
    var inital = newsletter.is(":checked");
    var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
    var topicInputs = topics.find("input").attr("disabled", !inital);
    // show when newsletter is checked
    newsletter.on("click", function() {
      topics[this.checked ? "removeClass" : "addClass"]("gray");
      topicInputs.attr("disabled", !this.checked);
    });
  });
})(jQuery);