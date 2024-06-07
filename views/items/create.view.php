<?php require base_path('views/partials/head.php')  ?>
<?php require base_path('views/partials/navbar.php')  ?>
<?php require base_path('views/partials/offcanvas.php')  ?>

<!-- content -->
<main class="mt-5 pt-3">
    <div class="m-4 p-4 shadow rounded-3" style="background-color: white;" id="content">
        <div>
            <a href="/items" class="btn btn-outline-dark">Back</a>
            <h2 class="text-center mb-5">Create Item</h2>

            <form class="needs-validation" novalidate method="POST" action="/items/store">
                <div class="row">
                    <div class="col-12 mb-2">
                        <label for="item-name" class="form-label">Item Name</label>
                        <input value="<?= old('name') ?>" type="text" class="form-control" name="name" id="item-name" autocomplete="off" required>
                        <p class="text-danger"><?= errors('name')  ?></p>
                    </div>
                    <div class="col-6">
                        <label for="listing-price" class="form-label">Listing Price</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">₱</span>
                            <input value="<?= old('listing-price')  ?>" autocomplete="off" type="number" class="form-control" name="listing-price" id="listing-price" required>
                        </div>
                        <p class="text-danger"><?= errors('listing-price');  ?></p>
                    </div>
                    <div class="col-6">
                        <label for="retail-price" class="form-label">Retail Price</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">₱</span>
                            <input value="<?= old('retail-price')  ?>"  autocomplete="off" type="number" class="form-control" name="retail-price" id="retail-price" required>
                        </div>
                        <p class="text-danger"><?= errors('retail-price');  ?></p>
                    </div>
                </div>


                <div class="mt-5">
                    <button id="btn-add-item" type="submit" class="btn btn-outline-dark">Add product</button>
                </div>

            </form>

        </div>

        <!-- <script src="js/regis.js"></script> -->
    </div>
</main>

<?php require base_path('views/partials/footer.php')  ?>