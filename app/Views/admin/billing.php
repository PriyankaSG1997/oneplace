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
            <!-- Product Search Dropdown -->
            <div class="form-group">
              <label for="productSearch">Search Product:</label>
              <select class="form-control select2" id="productSearch">
                <!-- Dynamically filled with product options from database -->
              </select>
            </div>

            <!-- Quantity Input -->
            <div class="form-group">
              <label for="productQty">Enter Quantity:</label>
              <input type="number" class="form-control" id="productQty" placeholder="Enter Quantity">
            </div>

            <button id="addProduct" class="btn btn-primary">Add to Bill</button>

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
              <div class="form-group">
                <label for="discountAmount">Discount:</label>
                <input type="number" class="form-control" id="discountAmount" placeholder="Enter Discount Amount">
              </div>
              <h5>Total Payable: $<span id="totalAmount">0.00</span></h5>
            </div>

            <button id="saveBill" class="btn btn-success">Save Bill</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const products = [
    // Example data, replace with server-side fetch
    { id: 1, name: "Laptop", price: 1000 },
    { id: 2, name: "Smartphone", price: 500 },
    { id: 3, name: "Headphones", price: 100 },
  ];

  let billItems = [];
  
  document.addEventListener("DOMContentLoaded", function () {
    // Populate product dropdown
    const productSearch = document.getElementById("productSearch");
    products.forEach(product => {
      const option = document.createElement("option");
      option.value = product.id;
      option.textContent = `${product.name} - $${product.price}`;
      productSearch.appendChild(option);
    });

    // Add product to bill
    document.getElementById("addProduct").addEventListener("click", function () {
      const productId = productSearch.value;
      const qty = document.getElementById("productQty").value;

      if (!productId || qty <= 0) {
        alert("Please select a product and enter a valid quantity.");
        return;
      }

      const product = products.find(p => p.id == productId);
      const lineTotal = product.price * qty;

      // Add to billItems
      billItems.push({ id: product.id, name: product.name, qty, price: product.price, lineTotal });

      // Update grid view
      updateBillTable();
    });

    // Calculate and update totals
    document.getElementById("discountAmount").addEventListener("input", updateBillTable);

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

    billItems.forEach((item, index) => {
      total += item.lineTotal;

      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${item.name}</td>
        <td>${item.qty}</td>
        <td>$${item.price}</td>
        <td>$${item.lineTotal}</td>
        <td><button class="btn btn-danger" onclick="removeItem(${index})">Remove</button></td>
      `;
      billTable.appendChild(row);
    });

    const discount = parseFloat(document.getElementById("discountAmount").value) || 0;
    const finalTotal = total - discount;

    document.getElementById("totalAmount").textContent = finalTotal.toFixed(2);
  }

  function removeItem(index) {
    billItems.splice(index, 1);
    updateBillTable();
  }
</script>

<?php include("footer.php"); ?>
