<?php include("header.php"); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Billing</h3>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create Bill</h4>

            <!-- Product Search with Input -->
            <div class="form-group d-flex align-items-center gap-3">
              <!-- Product Search Input -->
              <div style="flex: 1; position: relative;">
                <label for="productSearch" class="mb-1">Search Product:</label>
                <input type="text" class="form-control" id="productSearch" placeholder="Search Product...">
                <div class="yamm-content" id="productSuggestions" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-menu">
                                                            <ul class="links">
                                                                <li><a href="http://localhost/oneplace/home">BloodBank</a></li>
                                                                <li><a href="http://localhost/oneplace/category.html">Policestation</a></li>
                                                                <li><a href="http://localhost/oneplace/detail.html">Hospital</a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
              </div>

              <!-- Quantity Input -->
              <div style="flex: 1;">
                <label for="productQty" class="mb-1">Enter Quantity:</label>
                <input type="number" class="form-control" id="productQty" placeholder="Enter Quantity" style="margin-left: 1px;">
              </div>

              <!-- Add Button -->
              <div>
                <button id="addProduct" class="btn btn-primary mt-4" style="margin-left: 3px;">Add to Bill</button>
              </div>
            </div>

            <!-- Bill Grid -->
            <div class="table-responsive mt-4">
              <table class="table table-bordered" id="billTable">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Line Total</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Rows added dynamically -->
                </tbody>
              </table>
            </div>

            <!-- Discount and Total -->
            <div class="mt-4">
              <div class="form-group d-flex align-items-center gap-3">
                <!-- Discount Type -->
                <div style="flex: 1;">
                  <label for="discountType" class="mb-1">Discount Type:</label>
                  <select class="form-control" id="discountType">
                    <option value="amount">Amount</option>
                    <option value="percentage">Percentage</option>
                  </select>
                </div>
                <!-- Discount Value -->
                <div style="flex: 1;">
                  <label for="discountValue" class="mb-1">Discount Value:</label>
                  <input type="number" class="form-control" id="discountValue" placeholder="Enter Discount">
                </div>
              </div>

              <!-- Totals Section -->
              <div class="mt-4 d-flex align-items-center justify-content-between gap-4">
              <h5>Total: ₹<span id="totalProductPrice">0.00</span></h5>
              <h5>GST (9%): ₹<span id="gstAmount">0.00</span></h5>
              <h5>CGST (9%): ₹<span id="cgstAmount">0.00</span></h5>
              <h5>Final Total: ₹<span id="finalTotalAmount">0.00</span></h5>
              <h5>Net Payable: ₹<span id="netPayableAmount">0.00</span></h5>
              </div>


            </div>

            <button id="saveBill" class="btn btn-success">Save Bill</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script>
  const products = [
    { id: 1, name: "Laptop", price: 1000 },
    { id: 2, name: "Smartphone", price: 500 },
    { id: 3, name: "Headphones", price: 100 },
    { id: 4, name: "Keyboard", price: 50 },
    { id: 5, name: "Mouse", price: 30 }
  ];

  let billItems = [];

  document.addEventListener("DOMContentLoaded", function () {
    const productSearch = document.getElementById("productSearch");
    const productSuggestions = document.getElementById("productSuggestions");

    // Handle product search
    productSearch.addEventListener("input", function () {
      const query = productSearch.value.toLowerCase().trim();
      productSuggestions.innerHTML = ""; // Clear suggestions

      if (query) {
        const filteredProducts = products.filter((product) =>
          product.name.toLowerCase().includes(query)
        );

        if (filteredProducts.length > 0) {
          productSuggestions.style.display = "block";
          filteredProducts.forEach((product) => {
            const suggestion = document.createElement("a");
            suggestion.classList.add("dropdown-item");
            suggestion.textContent = `${product.name} - ₹${product.price}`;
            suggestion.addEventListener("click", function () {
              productSearch.value = product.name; // Set input value
              productSearch.dataset.productId = product.id; // Save product ID
              productSuggestions.style.display = "none"; // Hide suggestions
            });
            productSuggestions.appendChild(suggestion);
          });
        } else {
          productSuggestions.style.display = "none";
        }
      } else {
        productSuggestions.style.display = "none";
      }
    });

    // Add product to bill
    document.getElementById("addProduct").addEventListener("click", function () {
      const productId = productSearch.dataset.productId;
      const productName = productSearch.value;
      const qty = document.getElementById("productQty").value;

      if (!productId || qty <= 0) {
        alert("Please select a product and enter a valid quantity.");
        return;
      }

      const product = products.find((p) => p.id == productId);
      const lineTotal = product.price * qty;

      // Add to billItems
      billItems.push({ id: product.id, name: product.name, qty, price: product.price, lineTotal });

      // Update grid view
      updateBillTable();
    });

    // Calculate and update totals
    document.getElementById("discountValue").addEventListener("input", updateBillTable);
    document.getElementById("discountType").addEventListener("change", updateBillTable);

    // Save bill logic
    document.getElementById("saveBill").addEventListener("click", function () {
      console.log("Bill Saved", billItems);
      alert("Bill saved successfully!");
      location.reload(); // Reload page to reset bill
    });
  });

  function updateBillTable() {
  const billTable = document.getElementById("billTable").querySelector("tbody");
  billTable.innerHTML = "";

  let total = 0;

  // Calculate total product price
  billItems.forEach((item, index) => {
    total += item.lineTotal;

    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${item.name}</td>
      <td>${item.qty}</td>
      <td>₹${item.price}</td>
      <td>₹${item.lineTotal}</td>
      <td><button class="btn btn-danger" onclick="removeItem(${index})">Remove</button></td>
    `;
    billTable.appendChild(row);
  });

  // Calculate GST and CGST
  const gst = (total * 9) / 100; // 9% GST
  const cgst = gst; // 9% CGST
  const finalTotal = total + gst + cgst; // Final total before discount

  // Get discount type and value
  const discountType = document.getElementById("discountType").value;
  const discountValue = parseFloat(document.getElementById("discountValue").value) || 0;
  let discount = 0;

  if (discountType === "percentage") {
    discount = (discountValue / 100) * finalTotal; // Calculate discount as percentage of final total
  } else {
    discount = discountValue; // Fixed amount discount
  }

  const netPayable = finalTotal - discount; // Calculate net payable after discount

  // Update values in the UI
  document.getElementById("totalProductPrice").textContent = total.toFixed(2);
  document.getElementById("gstAmount").textContent = gst.toFixed(2);
  document.getElementById("cgstAmount").textContent = cgst.toFixed(2);
  document.getElementById("finalTotalAmount").textContent = finalTotal.toFixed(2);
  document.getElementById("netPayableAmount").textContent = netPayable.toFixed(2);
}


  function removeItem(index) {
    billItems.splice(index, 1);
    updateBillTable();
  }
</script>

<?php include("footer.php"); ?>
 