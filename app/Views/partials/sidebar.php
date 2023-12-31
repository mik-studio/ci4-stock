        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-warehouse"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= _SITENAME ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?=  ($page_code == 'HOME') ? 'active': ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Master
            </div>

            <li class="nav-item <?=  ($page_code == 'MASTER.BARANG') ? 'active': ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>databarang">
                    <i class="fas fa-fw fa-cube"></i>
                    <span>Barang</span></a>
            </li>

            <li class="nav-item <?=  ($page_code == 'MASTER.KATEGORI') ? 'active': ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>datakategori">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Kategori</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Transaksi
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?=  ($page_code == 'BARANG.MASUK') ? 'active': ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>barangmasuk">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Barang Masuk</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?=  ($page_code == 'BARANG.KELUAR') ? 'active': ''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>barangkeluar">
                    <i class="fas fa-fw fa-paper-plane"></i>
                    <span>Barang Keluar</span></a>
            </li>

            <?php
            $user = auth()->user();
            if ($user->inGroup('superadmin') || $user->inGroup('admin')) { ?>
            <!-- Heading -->
            <div class="sidebar-heading">
                Laporan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?=  ($page_code == 'LAPORAN.STOCKBARANG') ? 'active': ''; ?>">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-print"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsePages" class="collapse <?=  ($page_code == 'LAPORAN.STOCKBARANG' || $page_code == 'LAPORAN.BARANGMASUK' || $page_code == 'LAPORAN.BARANGKELUAR') ? 'show': 'hide'; ?>" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?=  ($page_code == 'LAPORAN.STOCKBARANG') ? 'active': ''; ?>" href="<?= base_url(); ?>laporan/stockbarang">Stock Barang</a>
                        <a class="collapse-item <?=  ($page_code == 'LAPORAN.BARANGMASUK') ? 'active': ''; ?>" href="<?= base_url(); ?>laporan/barangmasuk">Barang Masuk</a>
                        <a class="collapse-item <?=  ($page_code == 'LAPORAN.BARANGKELUAR') ? 'active': ''; ?>" href="<?= base_url(); ?>laporan/barangkeluar">Barang Keluar</a>
                    </div>
                </div>
            </li>
            <?php } ?>

            <?php 
            $user = auth()->user();
            if ($user->inGroup('superadmin')) { ?>
            <!-- Heading -->
            <div class="sidebar-heading">
                Administrasi
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?=  ($page_code == 'ADMIN.ADMINISTRASI') ? 'active': ''; ?>">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Administrasi</span></a>
            </li>
            <?php } ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->