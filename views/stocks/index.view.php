<?php require base_path('views/partials/head.php')  ?>
<?php require base_path('views/partials/navbar.php')  ?>
<?php require base_path('views/partials/offcanvas.php')  ?>

<!-- content -->
<main class="mt-5 pt-3">
    <div class="m-4 p-4 shadow rounded-3" style="background-color: white;" id="content">
        <h1 class="display-5 text-center mb-5">Stock Monitor</h1>

        <div class="table-responsive">
            <table class="table-striped table table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="table-info" scope="col">Item Names</th>
                        <th class="table-warning" scope="col">Receive</th>
                        <th class="table-success" scope="col">Sold</th>
                        <th class="table-danger" scope="col">Availabe</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stocks as $stock) : ?>
                        <tr>
                            <td><?= $stock['name'] ?></td>
                            <td><?= $stock['receive'] ?></td>
                            <td><?= $stock['sold'] ?></td>
                            <td><?= $stock['available'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php')  ?>