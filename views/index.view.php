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
                    <div class="card text-center bg-primary">
                        <div class="card-body">
                            <h1 class="card-title">
                                <?php
                                echo $numCustomer;
                                ?>
                            </h1>
                        </div>
                        <div class="card-footer">
                            Total Customer
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md">
                    <div class="card text-center bg-warning">
                        <div class="card-body">
                            <h1 class="card-title">
                                <?php
                                echo $numProducts;

                                ?>
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
                                echo "₱ " . number_format($sold_items, 2);
                                ?>
                            </h1>
                        </div>
                        <div class="card-footer">
                            Total Sales
                        </div>
                    </div>
                </div>

            </div>

            <!-- <?php print_r($allCustomer); ?> -->
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <span>
                                <i class="bi bi-table"></i>
                            </span>
                            <span>Customer Table</span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Cash Tendered</th>
                                            <th scope="col">Change</th>
                                            <th scope="col">Amount Paid</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                        foreach ($allCustomer as $customer) :
                                        ?>

                                            <tr>

                                                <td><?php echo $customer['id']; ?></td>
                                                <td><?php echo $customer['name']; ?></td>
                                                <td><?php echo $customer['cash']; ?></td>
                                                <td><?php echo $customer['change']; ?></td>
                                                <td><?php echo $customer['totalpay']; ?></td>

                                            </tr>

                                        <?php endforeach; ?>
                                        <!-- <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr> -->
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