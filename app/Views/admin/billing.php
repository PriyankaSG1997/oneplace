<?php include("header.php"); ?> 

<div class="main-panel">
  <div class="content-wrapper">
  <div class="page-header">
            <h3 class="page-title">
            Create Bill
            </h3>
            <nav aria-label="breadcrumb">
           
                <a class="btn btn-primary btn-sm" href="<?=base_url(); ?>billinglist"> Bill List</a>

            </nav>
          </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="row card-body">
          <div class="col-lg-12">
            <h4 class="card-title">Create Bill</h4>
          </div>

            <!-- Product Search with Suggestions -->
             
            <div class="col-lg-3 form-group position-relative">
              <label for="productSearch">Search Product:</label>
              <input type="text" class="form-control" id="productSearch" placeholder="Search Product...">
              <div id="productSuggestions" class="dropdown-menu w-100" style="display: none; position: absolute; z-index: 1000;">
                <!-- Suggestions will be populated dynamically -->
              </div>
            </div>

            <!-- Price Input (New) -->
            <div class="col-lg-3 form-group">
              <label for="productPrice">Unit Price (Rs.):</label>
              <input type="text" class="form-control" id="productPrice" readonly>
            </div>
            <!-- Quantity Input -->
            <div class="form-group col-lg-3 ">
              <label for="productQty">Enter Quantity:</label>
              <input type="number" class="form-control" id="productQty" placeholder="Enter Quantity">
            </div>
            <div class="form-group col-lg-3 " style="    padding-top: 2%;
    padding-left: 2%;">

            <!-- Add Button -->
            <button id="addProduct" class="btn btn-primary ">Add to Bill</button>
            </div>

            <!-- Bill Table -->
            <div class="form-group col-lg-12">
              <label>Bill Details:</label>
              <div class="table-responsive mt-4">
                <table class="table table-bordered" id="billTable">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Quantity (Nos.)</th>
                      <th>Unit Price (Rs.)</th>
                      <th>Total (Rs.)</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Rows will be added dynamically -->
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Bill Summary Table -->
            <div class="form-group col-lg-12">
              <div class="table-responsive mt-4">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th style="width: 70%;">Total Amount (Rs.)</th>
                      <td style="width: 30%;"><span id="totalAmount">0.00</span></td>
                    </tr>
                    <tr>
                      <th>GST (9%)</th>
                      <td><span id="gstAmount">0.00</span></td>
                    </tr>
                    <tr>
                      <th>GST (9%)</th>
                      <td><span id="gstAmount">0.00</span></td>
                    </tr>
                    <tr>
                      <th>CGST (9%)</th>
                      <td><span id="cgstAmount">0.00</span></td>
                    </tr>
                    <tr>
                      <th>Final Total (Rs.)</th>
                      <td><strong><span id="finalTotal">0.00</span></strong></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="form-group col-lg-12">
              <button id="saveBill" class="btn btn-success mt-3">Save Bill</button>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php include("footer.php"); ?>

<!-- jQuery (Ensure it's included before this script) -->
<script>
  $(document).ready(function () {
    $("#productSearch").on("input", function () {
      let query = $(this).val().trim();

      if (query.length > 0) {
        $.ajax({
          url: "<?=base_url(); ?>search_product", // Backend URL
          type: "GET",
          data: { search: query },
          dataType: "json",
          success: function (response) {
            let suggestions = $("#productSuggestions");
            suggestions.empty().show();

            if (response.length > 0) {
              response.forEach(product => {
                let item = `<a href="#" class="dropdown-item product-item" data-id="${product.id}" data-price="${product.price}">
                              ${product.productname}
                            </a>`;
                suggestions.append(item);
              });
            } else {
              suggestions.hide();
            }
          }
        });
      } else {
        $("#productSuggestions").hide();
      }
    });

    // Select product from suggestions
// Select product from suggestions
$(document).on("click", ".product-item", function (e) {
  e.preventDefault();
  let productName = $(this).text().split(" - ")[0];
  let productId = $(this).data("id");
  let price = $(this).data("price");

  // Get the product search input element
  var $searchInput = $("#productSearch");
  
  // Set the product name and store related data
  $searchInput.val(productName);
  $searchInput.data("productId", productId);
  $searchInput.data("price", price);

  // Set the price in the unit price input field
  $("#productPrice").val(price);

  // Focus the input and move the caret to the beginning
  $searchInput.focus();
  if ($searchInput[0].setSelectionRange) {
    $searchInput[0].setSelectionRange(0, 0);
  }

  $("#productSuggestions").hide();
});



    // Hide suggestions when clicking outside
    $(document).click(function (event) {
      if (!$(event.target).closest("#productSearch, #productSuggestions").length) {
        $("#productSuggestions").hide();
      }
    });

    // Add product to bill
// Add product to bill
$("#addProduct").click(function () {
    let productName = $("#productSearch").val();
    let productId = $("#productSearch").data("productId");
    let price = $("#productSearch").data("price");
    let qty = $("#productQty").val();

    if (!productId || qty <= 0) {
        alert("Please select a valid product and quantity.");
        return;
    }

    let total = price * qty;

    let row = `<tr>
                <td>${productName}</td>
                <td>${qty}</td>
                <td>${price}</td>
                <td>${total.toFixed(2)}</td>
                <td><button class="btn btn-danger btn-sm removeItem">Remove</button></td>
              </tr>`;

    $("#billTable tbody").append(row);
    updateTotal();

    // Clear input fields after adding to the bill
    $("#productSearch").val("").removeData("productId").removeData("price");
    $("#productQty").val("");
    $("#productPrice").val("");
});


    // Remove item
    $(document).on("click", ".removeItem", function () {
      $(this).closest("tr").remove();
      updateTotal();
    });

    // Update total
    function updateTotal() {
      let totalAmount = 0;

      $("#billTable tbody tr").each(function () {
        let rowTotal = parseFloat($(this).find("td:nth-child(4)").text().replace("₹", ""));
        totalAmount += rowTotal;
      });

      let gst = totalAmount * 0.09;
      let cgst = totalAmount * 0.09;
      let finalTotal = totalAmount + gst + cgst;

      $("#totalAmount").text(totalAmount.toFixed(2));
      $("#gstAmount").text(gst.toFixed(2));
      $("#cgstAmount").text(cgst.toFixed(2));
      $("#finalTotal").text(finalTotal.toFixed(2));
    }
  });
  $(document).ready(function () {
  // ... your existing code ...

  // Read CSRF token and token name from meta tags
  var csrfName = $('meta[name="csrf-name"]').attr('content'); // e.g., "csrf_test_name"
  var csrfHash = $('meta[name="csrf-token"]').attr('content');  // e.g., "a1b2c3d4..."

  $("#saveBill").click(function () {
    // Gather bill items from the table
    var billItems = [];
    $("#billTable tbody tr").each(function () {
      var productName = $(this).find("td:eq(0)").text().trim();
      var quantity    = $(this).find("td:eq(1)").text().trim();
      var unitPrice   = $(this).find("td:eq(2)").text().trim();
      var total       = $(this).find("td:eq(3)").text().trim();
      
      billItems.push({
        productName: productName,
        quantity: quantity,
        unitPrice: unitPrice,
        total: total
      });
    });

    // Gather bill summary details
    var billSummary = {
      totalAmount: $("#totalAmount").text().trim(),
      gstAmount:   $("#gstAmount").text().trim(),
      cgstAmount:  $("#cgstAmount").text().trim(),
      finalTotal:  $("#finalTotal").text().trim()
    };

    // Debug: Log the values to the console
    console.log("Bill Items:", billItems);
    console.log("Bill Summary:", billSummary);

    // Check if data is actually present
    if (billItems.length === 0 || !billSummary.totalAmount) {
      alert("Bill items or summary data is empty.");
      return;
    }

    // Prepare data to send, including the CSRF token
    var dataToSend = {};
    dataToSend[csrfName] = csrfHash; // add CSRF token
    dataToSend.billItems = JSON.stringify(billItems);
    dataToSend.billSummary = JSON.stringify(billSummary);

    // Send the data to the backend via AJAX
    $.ajax({
      url: "<?= base_url(); ?>save_bill",
      method: "POST",
      data: dataToSend,
      success: function (response) {
        alert("Bill saved successfully!");
        location.reload();
      },
      error: function (xhr, status, error) {
        alert("Error saving bill: " + error);
      }
    });
  });
});




</script>


