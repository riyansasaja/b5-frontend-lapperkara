<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>




<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h3 class="font-weight-bolder mb-0">Dashboard Rekap Laporan Perkara</h3>
            </nav>
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
        <div class="row">
            <div class="col text-center">
                <h6 class="d-block">Rekap Laporan Perkara <br> Tahun 2022</h6>
                <!-- dropdown start -->
                <div class="d-flex justify-content-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Tahun
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">2022</a></li>
                            <li><a class="dropdown-item" href="#">2023</a></li>
                            <li><a class="dropdown-item" href="#">2024</a></li>
                        </ul>
                    </div>
                </div>
                <!-- dropdown end -->
            </div>
        </div>

        <!-- modal start -->
        <div class="row">
            <div class="col">
                <!-- button -->
                <button type="button" class="btn bg-gradient-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Rekap Laporan Perkara
                </button>

                <!-- modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Laporan Perkara</h5>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- form start -->
                                <form method="POST" action="<?php echo base_url('Admin/add_rekap_laporan'); ?>" enctype="multipart/form-data">
                                    <div class="input-group input-group-static my-3">
                                        <label for="bulan">Periode</label>
                                        <input id="bulan" type="month" name="periode" class="form-control">
                                    </div>
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
                            <!-- form end -->
                        </div>
                    </div>
                </div>
                <!-- modal -->

            </div>
        </div>
        <!-- modal end -->


        <!-- table start -->
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-3">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jan</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Feb</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mar</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apr</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mei</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jun</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jul</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Agu</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sep</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Okt</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nov</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Des</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <?php foreach ($all as $one) : ?>
                                    <?php if ($one['periode'] == '2022-01') : ?>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <a href="#!" data-bs-toggle="modal" data-bs-target="#viewdocumentModal" data-id="<?= $laporan['0']['kode_pa'] ?> <?= $laporan['0']['periode'] ?>/<?= $laporan['0']['rekap_pdf'] ?>">
                                                <p class="text-xs text-center bg-success rounded text-white mb-0">√</p>
                                        </div>
                                    <?php else : ?>
                                        <div class="d-flex flex-column justify-content-center px-3">
                                            <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>


                            </td>
                            <td>

                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-success rounded text-white mb-0">√</p>
                                </div>

                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-success rounded text-white mb-0">√</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-success rounded text-white mb-0">√</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-success rounded text-white mb-0">√</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column justify-content-center px-3">
                                    <p class="text-xs text-center bg-primary rounded text-white mb-0">&nbsp;</p>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- table end -->

        <div class="row mt-4">
            <div class="col">
                <div class="card card-frame">
                    <div class="card-body">
                        <h6 class="text-center">
                            GRAFIK REKAP KECAPATAN & KETEPATAN <br>PENGIRIMAN PELAPORAN PERKARA
                        </h6>
                        <div>
                            <canvas id="chart_satu"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- viewdocument Modal start -->
        <div class="modal fade" id="viewdocumentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">View Document</h5>
                        <!-- <button type="button" class="btn bg-gradient-success">
                            Download Excel
                        </button> -->
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body" id="lap_pdf">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#catatanModal" class="text-white btn btn-primary active" role="button">Buat Catatan</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- viewdocument modal end -->