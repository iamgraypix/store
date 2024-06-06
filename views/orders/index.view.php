<?php require base_path('views/partials/head.php')  ?>
<?php require base_path('views/partials/navbar.php')  ?>
<?php require base_path('views/partials/offcanvas.php')  ?>

<!-- content -->
<main class="mt-5 pt-3">
    <div class="m-4 p-4 shadow rounded-3" style="background-color: white;" id="content">
        <?php
        //default page
        echo "Orders";
        // include('includes/inc_dashboard.php');
        ?>
    </div>
</main>

<?php require base_path('views/partials/footer.php')  ?>