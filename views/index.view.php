<?php require 'partials/head.php'  ?>
<?php require 'partials/navbar.php'  ?>
<?php require 'partials/offcanvas.php'  ?>

<!-- content -->
<main class="mt-5 pt-3">
    <div class="m-4 p-4 shadow rounded-3" style="background-color: white;" id="content">
        <div id="dashboard-content">
            <h1 class="display-4 mb-3">Dashboard</h1>

            <div class="row mb-3">
                <div class="col-sm-4 col-md">
                    <div class="card text-center bg-warning">
                        <div class="card-body">
                            <h1 class="card-title">
                               <?= $count_products ?>
                            </h1>
                        </div>
                        <div class="card-footer">
                            Total Products
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md">
                    <div class="card text-center bg-success">
                        <div class="card-body">
                            <h1 class="card-title">
                                <?php
                                echo "₱ " . number_format($sales, 2);
                                ?>
                            </h1>
                        </div>
                        <div class="card-footer">
                            Total Sales
                        </div>
                    </div>
                </div>

            </div>

           
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <span>
                                <i class="bi bi-table"></i>
                            </span>
                            <span>Stocks Table</span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Sold</th>
                                            <th scope="col">Available</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($stocks as $stock): ?>
                                            <tr>
                                                <td>
                                                    <?= $stock['name'] ?>
                                                </td>
                                                <td>
                                                ₱ <?= number_format($stock['retail'], 2) ?>
                                                </td>
                                                <td>
                                                    <?= $stock['sold'] ?>
                                                </td>
                                                <td>
                                                    <?= $stock['available'] ?>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'partials/footer.php'  ?>