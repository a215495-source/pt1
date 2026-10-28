<?php ob_start(); ?>
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Products</h2>
        <p class="text-muted mb-0">Manage and track all your products</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <!-- Form Header -->
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Product Form
                </h5>
                <small class="text-muted">Fill in the details of a product</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>
        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pid" class="form-label">Product ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Product ID" required>
                </div>
                <div class="col-md-3">
                    <label for="name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Product Name" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price (RM) <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_price" id="price" type="number" min="0" step="0.01" class="form-control" placeholder="Enter Price" required>
                </div>
                <div class="col-md-3">
                    <label for="brand" class="form-label">Brand <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_brand" id="brand" class="form-select" required>
                        <option value="">Select Brand</option>
                        <option value="UVShield">UVShield</option>
                        <option value="CoolSkin">CoolSkin</option>
                        <option value="SunBlock">SunBlock</option>
                        <option value="AirShade">AirShade</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="upf" class="form-label">UPF Rating <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_upf" id="upf" class="form-select" required>
                        <option value="">Select UPF</option>
                        <option value="30+">UPF 30+</option>
                        <option value="40+">UPF 40+</option>
                        <option value="50+">UPF 50+</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="fabric" class="form-label">Fabric <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_fabric" id="fabric" class="form-select" required>
                        <option value="">Select Fabric</option>
                        <option value="Ice Silk">Ice Silk</option>
                        <option value="Nylon">Nylon</option>
                        <option value="Polyester">Polyester</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_quantity" id="quantity" type="number" min="0" class="form-control" placeholder="Enter Quantity" required>
                </div>
                <div class="col-md-3">
                    <label for="product_image" class="form-label">Image</label>
                    <input name="product_image" id="product_image" type="text" class="form-control" placeholder="Enter image filename">
                </div>
            </div>

            <hr class="mt-4 mb-3">
            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Product List
                </h5>
                <small class="text-muted">View and manage all products in the inventory</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 items</span>
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price(RM)</th>
                        <th>Brand</th>
                        <th>UPF</th>
                        <th>Fabric</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P001</td>
                        <td>Breathable UV Protection Shirt</td>
                        <td>89.00</td>
                        <td>UVShield</td>
                        <td>50+</td>
                        <td>Ice Silk</td>
                        <td>120</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-info text-white">
                                <i class="bi bi-image"></i>
                            </button>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <!-- Empty record row -->
                    <tr>
                        <td colspan="8" class="text-center">No products found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); require_once 'layout.php'; ?>
