<?php require base_path('views/partials/head.php')  ?>
<?php require base_path('views/partials/navbar.php')  ?>
<?php require base_path('views/partials/offcanvas.php')  ?>

<!-- content -->
<main class="mt-5 pt-3">
    <div class="m-4 p-4 shadow rounded-3" style="background-color: white;" id="content">

        <h1 class="display-5 text-center">Products</h1>
        <div class="row mt-4 justify-content-around">
            <div class="col-12 col-md-4">
                <div class="input-group mb-2">
                    <input id="search-product-bar" type="text" class="form-control " placeholder="Item Name" aria-describedby="button-addon2">
                    <button id="search-product-btn" class="btn btn-dark" type="button" id="button-addon2">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <a href="/supplies/create" type="button" class="w-100 btn btn-outline-dark">
                    <span>
                        <i class="bi bi-plus-square-fill fs-5 me-2"></i>
                        Add Product
                    </span>
                </a>
            </div>
        </div>

        <div class="table-responsive mt-4">
            <table class="table-striped table table-hover table-bordered">

                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Qty</th>
                        <th class="table-info" scope="col">Retail Price</th>
                        <th class="table-success" scope="col">Total Retail Price</th>
                        <th class="table-warning" scope="col">Listing Price</th>
                        <th class="table-danger" scope="col">Total Listing Price</th>
                        <!-- <th scope="col">Remarks</th> -->

                    </tr>
                </thead>
                <tbody>

                </tbody>

            </table>
        </div>

    </div>
</main>

<?php require base_path('views/partials/footer.php')  ?>