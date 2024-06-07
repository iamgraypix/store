<?php require base_path('views/partials/head.php')  ?>
<?php require base_path('views/partials/navbar.php')  ?>
<?php require base_path('views/partials/offcanvas.php')  ?>

<!-- content -->
<main class="mt-5 pt-3">
    <div class="m-4 p-4 shadow rounded-3" style="background-color: white;" id="content">
        <div>
            <h2 class="text-center mb-5">Registered Items</h2>

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
                    <a href="items/create" class="w-100 btn btn-outline-dark">
                        <span>
                            <i class="bi bi-plus-square-fill fs-5 me-2"></i>
                            Add Item
                        </span>
                    </a>
                </div>

            </div>


            <!-- Add Item Modal -->
            <div class="modal fade" id="add-item-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="needs-validation" novalidate method="POST">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <label for="item-name" class="form-label">Item Name</label>
                                        <input type="text" class="form-control" name="item-name" id="item-name" autocomplete="off" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="listing-price" class="form-label">Listing Price</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">₱</span>
                                            <input autocomplete="off" type="number" class="form-control" name="listing-price" id="listing-price" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="retail-price" class="form-label">Retail Price</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">₱</span>
                                            <input autocomplete="off" type="number" class="form-control" name="retail-price" id="retail-price" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5>
                                            Revenue: Php
                                            <input type="text" class="form-control" id="revenue" disabled>
                                        </h5>

                                    </div>
                                    <div class="col">
                                        <h5>
                                            Revenue Per:
                                            <input type="text" class="form-control" id="revenue-percent" name="revenue-percent" value="0" disabled>
                                        </h5>

                                    </div>
                                </div>

                                <div id="test">
                                </div>

                            </div>


                            <div class="modal-footer">
                                <button id="btn-close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button id="btn-add-item" type="button" class="btn btn-primary">Add product</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


            <div class="table-responsive mt-3" id="regis-table">
                <table class="table-striped table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Item Name</th>
                            <th scope="col">Listing Price</th>
                            <th scope="col">Retail Price</th>
                            <th class="table-info" scope="col">Revenue</th>
                            <th class="table-warning" scope="col">Revenue Percentage</th>
                            <th class="table-danger" scope="col">Remarks</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Itlog</td>
                            <td>Php 10.00</td>
                            <td>Php 12.00</td>
                            <td class="table-info">Php 2.00</td>
                            <td class="table-warning">20 %</td>
                            <td class="table-danger">Noice</td>
                        </tr>


                        <!-- </tr> -->
                        <!-- lagyan ng kulay ang Revenue at Revenue Percentage -->
                    </tbody>
                </table>
            </div>
        </div>

        <script src="js/regis.js"></script>
    </div>
</main>

<?php require base_path('views/partials/footer.php')  ?>