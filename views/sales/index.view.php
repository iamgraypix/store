<?php require base_path('views/partials/head.php')  ?>
<?php require base_path('views/partials/navbar.php')  ?>
<?php require base_path('views/partials/offcanvas.php')  ?>

<!-- content -->
<main class="mt-5 pt-3">
    <div class="m-4 p-4 shadow rounded-3" style="background-color: white;" id="content">
        <div>
            <h1 class="display-5 text-center mb-4">Revenue</h1>

            <div class="table-responsive">
                <table class="table-striped table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="table-danger" scope="col">Total of Capital Money</th>
                            <th class="table-warning" scope="col">Total of Sold Items</th>
                            <th class="table-success" scope="col">Revenue</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-danger">
                                <h3>₱ <?php echo number_format($capital, 2); ?></h3>
                            </td>
                            <td class="table-warning">
                                <h3>₱ <?php echo number_format($sales, 2); ?></h3>
                            </td>
                            <td class="table-success">
                                <h3 style="color: green;">₱ <?php echo number_format($revenue, 2); ?></h3>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php')  ?>