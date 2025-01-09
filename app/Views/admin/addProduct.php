<?php include("header.php"); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Add Product</h3>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create New Product</h4>

            <form id="addProductForm">
              <div class="row">
                <!-- Category Dropdown -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="category">Select Category:</label>
                    <select class="form-control" id="category">
                      <!-- Dynamically filled with categories from database -->
                    </select>
                  </div>
                </div>

                <!-- Product Number -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="productNumber">Product Number:</label>
                    <input type="text" class="form-control" id="productNumber" placeholder="Enter Product Number">
                  </div>
                </div>

                <!-- Product Details -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="productDetails">Product Details:</label>
                    <textarea class="form-control" id="productDetails" rows="3" placeholder="Enter Product Details"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Main Image Picker -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="mainImage">Main Image:</label>
                    <input type="file" class="form-control" id="mainImage" accept="image/*">
                  </div>
                </div>

                <!-- Variants Image Picker -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="variantImages">Variant Images:</label>
                    <input type="file" class="form-control" id="variantImages" accept="image/*" multiple>
                  </div>
                </div>

                <!-- Price -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" id="price" placeholder="Enter Price">
                  </div>
                </div>

                <!-- Total Quantity -->
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="totalQty">Total Quantity:</label>
                    <input type="number" class="form-control" id="totalQty" placeholder="Enter Total Quantity">
                  </div>
                </div>
              </div>

              <div class="row mt-4">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                <div class="col-md-6 text-right">
                  <button type="button" id="addCategory" class="btn btn-primary">Add Category</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const categories = [
      // Example data, replace with server-side fetch
      { id: 1, name: "Electronics" },
      { id: 2, name: "Fashion" },
      { id: 3, name: "Home & Kitchen" },
    ];

    // Populate category dropdown
    const categoryDropdown = document.getElementById("category");
    categories.forEach(category => {
      const option = document.createElement("option");
      option.value = category.id;
      option.textContent = category.name;
      categoryDropdown.appendChild(option);
    });

    // Add category button logic
    document.getElementById("addCategory").addEventListener("click", function () {
      const newCategory = prompt("Enter new category name:");
      if (newCategory) {
        const newOption = document.createElement("option");
        newOption.value = categories.length + 1; // Temporary ID, replace with backend logic
        newOption.textContent = newCategory;
        categoryDropdown.appendChild(newOption);
        categories.push({ id: categories.length + 1, name: newCategory });
        alert("Category added successfully!");
      }
    });

    // Form submission logic
    document.getElementById("addProductForm").addEventListener("submit", function (e) {
      e.preventDefault();
      const formData = new FormData(this);

      console.log("Form submitted:", {
        category: formData.get("category"),
        productNumber: formData.get("productNumber"),
        productDetails: formData.get("productDetails"),
        mainImage: formData.get("mainImage"),
        variantImages: formData.getAll("variantImages"),
        price: formData.get("price"),
        totalQty: formData.get("totalQty"),
      });

      alert("Product added successfully!");
      this.reset();
    });
  });
</script>

<?php include("footer.php"); ?>
