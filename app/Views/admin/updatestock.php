<?php include("header.php"); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Update Stock</h3>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Shop Inventory</h4>

            <!-- Search Box -->
            <div class="form-group">
              <input type="text" class="form-control" id="searchBox" placeholder="Search products">
            </div>

            <!-- Inventory Table -->
            <div class="table-responsive">
              <table class="table table-bordered" id="inventoryTable">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Current Stock</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Dynamically filled with inventory products -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- Update Stock Modal -->
<div class="modal fade" id="updateStockModal" tabindex="-1" aria-labelledby="updateStockModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateStockModalLabel">Update Stock</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateStockForm">
          <div class="form-group">
            <label for="newStockQty">New Stock Quantity:</label>
            <input type="number" class="form-control" id="newStockQty" placeholder="Enter new stock quantity">
          </div>
          <input type="hidden" id="productId">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="updateStockBtn" class="btn btn-primary">Update Stock</button>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>


<script>
  const inventory = [
    // Example data, replace with server-side fetch
    { id: 1, name: "Laptop", category: "Electronics", price: 1000, stock: 10, image: "laptop.jpg" },
    { id: 2, name: "Smartphone", category: "Electronics", price: 500, stock: 25, image: "smartphone.jpg" },
    { id: 3, name: "Headphones", category: "Accessories", price: 100, stock: 50, image: "headphones.jpg" },
  ];

  document.addEventListener("DOMContentLoaded", function () {
    const inventoryTableBody = document.getElementById("inventoryTable").querySelector("tbody");
    const searchBox = document.getElementById("searchBox");

    // Populate inventory table
    function renderInventory(filter = "") {
      inventoryTableBody.innerHTML = "";

      inventory
        .filter(product => product.name.toLowerCase().includes(filter.toLowerCase()))
        .forEach(product => {
          const row = document.createElement("tr");
          row.innerHTML = `
            <td><img src="${product.image}" alt="${product.name}" style="width: 50px; height: 50px;"></td>
            <td>${product.name}</td>
            <td>${product.category}</td>
            <td>$${product.price}</td>
            <td>${product.stock}</td>
            <td><button class="btn btn-primary" onclick="openUpdateModal(${product.id})">Update Stock</button></td>
          `;
          inventoryTableBody.appendChild(row);
        });
    }

    renderInventory();

    // Filter inventory on search
    searchBox.addEventListener("input", function () {
      renderInventory(this.value);
    });

    // Open update stock modal
    window.openUpdateModal = function (productId) {
      const product = inventory.find(p => p.id === productId);
      if (product) {
        document.getElementById("productId").value = productId;
        document.getElementById("newStockQty").value = product.stock;
        const modal = new bootstrap.Modal(document.getElementById("updateStockModal"));
        modal.show();
      }
    };

    // Update stock logic
    document.getElementById("updateStockBtn").addEventListener("click", function () {
      const productId = document.getElementById("productId").value;
      const newStockQty = document.getElementById("newStockQty").value;

      if (!newStockQty || newStockQty < 0) {
        alert("Please enter a valid stock quantity.");
        return;
      }

      const product = inventory.find(p => p.id == productId);
      if (product) {
        product.stock = parseInt(newStockQty, 10);
        renderInventory();
        alert("Stock updated successfully!");
        bootstrap.Modal.getInstance(document.getElementById("updateStockModal")).hide();
      }
    });
  });
</script>
