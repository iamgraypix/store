<?php require base_path('views/partials/head.php')  ?>
<?php require base_path('views/partials/navbar.php')  ?>
<?php require base_path('views/partials/offcanvas.php')  ?>

<!-- content -->
<main class="mt-5 pt-3">
    <div class="m-4 shadow rounded-3" style="background-color: white;" id="content">

        <div class="p-3">
            <h3 class="mb-4 text-center">Create Supply</h3>

            <form class="needs-validation" method="POST" action="/supplies/store">

                <!-- <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Date</span>
                    <input type="date" class="form-control" id="date">
                </div> -->

                <div class="row">
                    <div class="col-9 mb-3">
                        <label for="inputState" class="form-label">Select Product</label>
                        <select id="inputState" class="form-select" name="item">
                            <option selected>Choose...</option>
                            <?php foreach ($items as $item) :  ?>
                                <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                            <?php endforeach   ?>
                        </select>
                        <p class="text-danger"><?= errors('item')  ?></p>
                    </div>
                    <div class="col-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="qty">
                        <p class="text-danger"><?= errors('qty')  ?></p>
                    </div>
                    <div class="col-6">
                        <label for="listing-price" class="form-label">Listing Price</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">₱</span>
                            <input type="number" class="form-control" name="listing-price" id="listing-price" disabled>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="retail-price" class="form-label">Retail Price</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">₱</span>
                            <input type="number" class="form-control" name="retail-price" id="retail-price" disabled>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-6">
                        <label for="tot-list-price" class="form-label">Total Listing Price</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">₱</span>
                            <input type="number" class="form-control" name="tot-list-price" id="tot-list-price" disabled>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="tot-retail-price" class="form-label">Total Retail Price</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">₱</span>
                            <input type="number" class="form-control" name="tot-retail-price" id="tot-retail-price" disabled>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <a href="/supplies" class="btn btn-secondary">Cancel</a>
                    <button id="btn-add-item" type="submit" class="btn btn-primary">Add supply</button>
                </div>



            </form>
        </div>


    </div>
</main>

<script src="../../js/add_product.js"></script>
<?php require base_path('views/partials/footer.php')  ?>