<div style="background-color: #095024; " class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

    <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">
                        CORE
                    </div>
                </li>
                <li>
                    <a href="/" id="dashboard" class="nav-link px-3 <?= isUrl('/') ? 'active' : ''  ?>" onclick="show('dashboard');">
                        <span class="me-2 fs-5">
                            <i class="bi bi-speedometer2"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="my-1">
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">
                        Store
                    </div>
                </li>
                <li>
                    <a href="/supplies" class="nav-link px-3 <?= isUrl('/supplies') ? 'active' : ''  ?>">
                        <span class="me-2">
                            <i class="bi bi-file-text fs-5"></i>
                        </span>
                        <span>Supplies</span>
                    </a>
                </li>
                <li>
                    <a href="/orders" id="sales" class="nav-link px-3 <?= isUrl('/orders') ? 'active' : ''  ?>">
                        <span class="me-2">
                            <i class="bi bi-cart-plus fs-5"></i>
                        </span>
                        <span>Order</span>
                    </a>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">
                        Supply
                    </div>
                </li>
                <li>
                    <a href="/items" id="sales" class="nav-link px-3 <?= isUrl('/items') ? 'active' : ''  ?>">
                        <span class="me-2">
                            <i class="bi bi-list-columns fs-5"></i>
                        </span>
                        <span>Registry</span>
                    </a>
                </li>
                <li>
                    <a href="/stocks" id="sales" class="nav-link px-3 <?= isUrl('/stocks') ? 'active' : ''  ?>">
                        <span class="me-2">
                            <i class="bi bi-cast fs-5"></i>
                        </span>
                        <span>Stocks</span>
                    </a>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">
                        Reports
                    </div>
                </li>
                <li>
                    <a href="/sales" id="sales" class="nav-link px-3 <?= isUrl('/sales') ? 'active' : ''  ?>">
                        <span class="me-2">
                            <i class="bi bi-cart fs-5"></i>
                        </span>
                        <span>Sales</span>
                    </a>
                </li>
                <!-- <li>
          <a id="sales-report" class="nav-link px-3" onclick="show('sales-report');">
            <span class="me-2">
              <i class="bi bi-graph-up fs-5"></i>
            </span>
            <span>Sales Report</span>
          </a>
        </li> -->
                <li class="my-4">
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">
                        Time
                    </div>
                </li>
                <li>
                    <a href="#" class="nav-link px-3 fs-4 fw-bold" style="color: #421412;">
                        <span class="me-2">
                            <i class="bi bi-clock"></i>
                        </span>
                        <span id="time"></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>