<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Home</h2>
        <p class="text-muted mb-0">Welcome to UVShield Apparel management system</p>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body text-center">
                <i class="bi bi-bag-fill text-primary fs-1"></i>
                <h5 class="mt-3">Products</h5>
                <p class="text-muted small">Manage UVShield Apparel products, stock, pricing and fabric details.</p>
                <a href="products.php" class="btn btn-primary mt-2">Go to Products</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body text-center">
                <i class="bi bi-people-fill text-success fs-1"></i>
                <h5 class="mt-3">Customers</h5>
                <p class="text-muted small">Manage customer information, phone numbers and registration dates.</p>
                <a href="customers.php" class="btn btn-success mt-2">Go to Customers</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body text-center">
                <i class="bi bi-person-badge-fill text-warning fs-1"></i>
                <h5 class="mt-3">Staffs</h5>
                <p class="text-muted small">Manage staff members, phone numbers and email addresses.</p>
                <a href="staffs.php" class="btn btn-warning mt-2 text-white">Go to Staffs</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body text-center">
                <i class="bi bi-cart-check-fill text-info fs-1"></i>
                <h5 class="mt-3">Orders</h5>
                <p class="text-muted small">Create orders, add products and print customer invoices.</p>
                <a href="orders.php" class="btn btn-info mt-2 text-white">Go to Orders</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
