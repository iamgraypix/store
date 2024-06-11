<?php require base_path('views/partials/head.php')  ?>
<?php require base_path('views/partials/navbar.php')  ?>
<?php require base_path('views/partials/offcanvas.php')  ?>

<!-- content -->
<main class="mt-5 pt-3">
    <div class="m-4 p-4 shadow rounded-3" style="background-color: white;" id="content">


        <div class="container">
            <div class="row">
                <a href="/orders" class="mb-3">Back</a>
            </div>

            <div class="row">
                <div class="col text-center">
                    <h2>Sales Receipt</h2>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <h5>Date:</h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-bordered border-dark">
                        <thead>
                            <tr>
                                <th scope="col">Qty</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($order as $item) : ?>
                                <tr>
                                    <td>
                                        <?= $item['qty'] ?>
                                    </td>
                                    <td>
                                        <?= $item['name'] ?>
                                    </td>
                                    <td>
                                        ₱ <?=number_format($item['unit_price'], 2) ?>
                                    </td>
                                    <td>
                                        ₱ <?= number_format($item['qty'] * $item['unit_price'], 2) ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr class="text-end">
                                <td colspan="3">
                                    <b>Total</b>
                                </td>
                                <td colspan="4" class="text-start">
                                    ₱ <?= number_format($amount, 2) ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <span class="text-success">Via Cash</class>
                </div>
            </div>
        </div>


    </div>
</main>

<?php require base_path('views/partials/footer.php')  ?>