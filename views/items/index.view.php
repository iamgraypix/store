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
                        <?php foreach ($items as $item) :  ?>
                            <tr>
                                <td><?= $item['name']  ?></td>
                                <td><?= $item['listing']  ?></td>
                                <td><?= $item['retail']  ?></td>
                                <td class="table-info"></td>
                                <td class="table-warning"></td>
                                <td class="table-danger"></td>
                            </tr>

                        <?php endforeach  ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="js/regis.js"></script>
    </div>
</main>

<?php require base_path('views/partials/footer.php')  ?>