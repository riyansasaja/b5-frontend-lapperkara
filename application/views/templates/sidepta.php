    <!-- sidebar -->
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <img src="<?= base_url() ?>/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Laporan Perkara</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white <?= $this->uri->segment(2, 0) === 0 ? 'active bg-gradient-secondary' : ''; ?>" href="<?= base_url('pta_user/') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        </div>
                        <span class="nav-link-text ms-1">Laporan Perkara Tk I </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?= base_url('pta_user/rekap_laporan/') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        </div>
                        <span class="nav-link-text ms-1">Rekap Pelaporan Perkara </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('pta_user/triwulan/') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        </div>
                        <span class="nav-link-text ms-1">Laporan Triwulan </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('pta_user/rekap_triwulan/') ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        </div>
                        <span class="nav-link-text ms-2">Rekap Pelaporan Triwulan</span>
                    </a>
                </li>
                <!-- garis -->

                <hr class="horizontal light mt-0 mb-2">

                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/tables.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        </div>
                        <span class="nav-link-text ms-2">Pengajuan Banding</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/virtual-reality.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        </div>
                        <span class="nav-link-text ms-1">Eksaminasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?= base_url('auth/logout'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        </div>
                        <span class="nav-link-text ms-2">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- End sidebar -->