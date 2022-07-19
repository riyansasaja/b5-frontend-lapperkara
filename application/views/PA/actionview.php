<!--
=========================================================
* Material Dashboard 2 - v3.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
        Laporan Perkara
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url('assets/css/nucleo-icons.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/f8c43fa68d.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets/css/material-dashboard.css?v=3.0.3') ?>" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

    <!-- sweetalert -->
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>

    <!-- sidebar -->
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <img src="<?= base_url('assets/img/logo-ct.png') ?>" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Laporan Perkara</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <span class="nav-link-text ms-1">Beranda </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/tables.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-file-contract fa-1x"></i>
                        </div>
                        <span class="nav-link-text ms-2">Pengajuan Banding</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary " href="./pages/billing.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-calendar"></i>
                        </div>
                        <span class="nav-link-text ms-2">Laporan Perkara Bulanan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/billing.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <span class="nav-link-text ms-2">Laporan Perkara Triwulan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/virtual-reality.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-diagnoses"></i>
                        </div>
                        <span class="nav-link-text ms-1">Eksaminasi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="./pages/rtl.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-sign-out"></i>
                        </div>
                        <span class="nav-link-text ms-2">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- End sidebar -->


    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="container-fluid py-4">

            <!-- contonet start -->

            <div class="container">
                <?php foreach ($laporan as $lp) : ?>
                    <div class="row bg-gray-400 justify-content-start">

                        <div class="row mt-3">
                            <div class="col-md-2">
                                <p class="fw-bold">Satker</p>
                            </div>
                            <div class="col-md-auto">
                                <p>:</p>
                            </div>
                            <div class="col-md-auto">
                                <p><?php echo $lp['nama']; ?></p>
                            </div>
                        </div>
                        <div class="row mt-n3">
                            <div class="col-md-2">
                                <p class="fw-bold">Periode Laporan</p>
                            </div>
                            <div class="col-md-auto">
                                <p>:</p>
                            </div>
                            <div class="col-md-auto">
                                <p><?php echo $lp['periode']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="row mt-5">
                    <div class="col">
                        <!-- table start -->
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Laporan</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Tgl Kirim
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                File
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Catatan
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                revisi
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Tgl Revisi
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Validasi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- looping data start -->

                                        <!-- first loop -->
                                        <?php $i = 1; ?>
                                        <?php foreach ($laporan as $lhs) : ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="text-xs text-secondary mb-0 ms-3"><?php echo $i++; ?></p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-xs"><?php echo $lhs['periode']; ?></h6>
                                                        <p class="text-xs text-secondary mb-0"><?php echo $lhs['berkas_laporan']; ?></p>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-normal"><?php echo $lhs['tgl_upload']; ?></span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-normal">
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#modalPdf" data-id="<?= $laporan['0']['kode_pa'] ?> <?= $laporan['0']['periode'] ?>/<?= $laporan['0']['laper_pdf'] ?>" class="fas fa-file-pdf"></a> |
                                                        <a href="<?php echo base_url() ?>index.php/PA_laper/download_xls/<?= $laporan['0']['id'] ?>" class="fas fa-file-excel"></a>
                                                    </span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-success text-xs font-weight-normal">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#catatanModal"><i class="fas fa-clipboard"></i></a>

                                                    </span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-normal">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" class="fas fa-upload"></a> | <a href="<?php echo base_url() ?>index.php/PA_laper/zip_file/" class="fas fa-download"></a>
                                                    </span>

                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-normal">
                                                        <?php echo $lhs['tgl_terakhir_rev']; ?>
                                                    </span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <?php if ($lhs['status'] == "Belum Validasi") : ?>
                                                        <span id="validate" class="text-white bg-gradient-danger text-xs font-weight-normal">
                                                            <?php echo $lhs['status']; ?>
                                                        </span>
                                                    <?php else : ?>
                                                        <span id="validate" class="text-white bg-gradient-success text-xs font-weight-normal">
                                                            <?php echo $lhs['status']; ?>
                                                        </span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <!-- looping data end -->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- table end -->
                    </div>
                </div>

                <!-- catatanModal start -->
                <div class="modal fade" id="catatanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Catatan Perbaikan</h5>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <?php foreach ($catatan as $ct) : ?>
                                    <div class="card card-frame mb-2">
                                        <div class="card-body">
                                            <h6><?php echo $ct['tgl_catatan']; ?></h6>
                                            <p><?php echo $ct['catatan']; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- catatan modal end -->

                <!-- //modal tampil pdf -->

                <div class="modal fade" id="modalPdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Berkas Perkara</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="tampil">


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary mx-auto" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end modal tampil pdf -->

                <!-- modal -->
                <div class="modal fade" id="revisiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Revisi Laporan Perkara</h5>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- form start -->
                                <?php foreach ($laporan as $lp) : ?>
                                    <form method="POST" action="<?php echo base_url('PA_laper/revisi_laporan_perkara'); ?>" enctype="multipart/form-data">

                                        <input type="hidden" class="form-controll" value="<?php echo $lp['id'] ?>" name="id">
                                        <input type="hidden" class="form-controll" value="<?php echo $lp['periode'] ?>" name="periode">

                                        <div class="input-group input-group-static my-3">
                                            <label for="upload-pdf">Upload file PDF</label>
                                            <input id="upload-pdf" type="file" name="file1" class="form-control">
                                        </div>
                                        <div class="input-group input-group-static my-3">
                                            <label for="upload-zip">Upload file XLS</label>
                                            <input id="upload-zip" type="file" name="file2" class="form-control">
                                        </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                            </div>
                            </form>
                        <?php endforeach; ?>
                        <!-- form end -->
                        </div>
                    </div>
                </div>
                <!-- modal -->

            </div>
        </div>
        <!-- modal end -->


        </div>





        <!-- content end -->


        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            Tim IT PTA Manado
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        </div>
    </main>

    <!--   Core JS Files   -->
    <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/chartjs.min.js') ?>"></script>
    <!-- sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('assets/js/status.js') ?>"></script>
    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/') . $js ?>"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

</body>

</html>