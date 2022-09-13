<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

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
            <?php foreach ($triwulan as $lp) : ?>
                <div class="row bg-gray-400 justify-content-start">

                    <div class="row mt-3">

                        <div class="col-md-auto">
                            <p></p>
                        </div>
                    </div>
                    <div class="row mt-n3">
                        <div class="col-md-2">
                            <p class="fw-bold">Laporan Triwulan</p>
                        </div>
                        <div class="col-md-auto">
                            <p>:</p>
                        </div>
                        <div class="col-md-auto">
                            <p><?php echo $lp['berkas_laporan']; ?></p>
                        </div>
                    </div>
                    <div class="row mt-n3">
                        <div class="col-md-2">
                            <p class="fw-bold">Tahun</p>
                        </div>
                        <div class="col-md-auto">
                            <p>:</p>
                        </div>
                        <div class="col-md-auto">
                            <p><?php echo $lp['periode_tahun']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="row mt-5">
                <div class="col">

                    <?php foreach ($triwulan as $lhs) : ?>
                        <!-- button -->
                        <a class="btn bg-gradient-primary btn-sm" href="<?php echo base_url() ?>index.php/Pta_user/zip_rekap_triwulan/<?= $lhs['id'] ?>">
                            Download ZIP <span class="fas fa-download"></span>
                        </a>
                    <?php endforeach; ?>

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
                                            File
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
                                                    <p class="text-xs text-secondary mb-0 ms-3"><?php echo $i++ ?></p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="text-xs text-secondary mb-0"><?php echo $lhs['nm_laporan']; ?></p>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">

                                                <span class="text-secondary text-xs font-weight-normal">
                                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#triwulanPdf" data-id="<?= $lhs['kode_pa'] ?> <?= $lhs['berkas_laporan'] ?> <?= $lhs['periode_tahun'] ?>/<?= $lhs['nm_laporan'] ?>/<?= $lhs['lap_pdf'] ?>" class="fas fa-file-pdf"></a> |
                                                    <a href="<?php echo base_url() ?>index.php/Pta_user/download_xls_rekap_tri/<?= $lhs['id_triwulan'] ?>" class="fas fa-file-excel"></a>
                                                </span>
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
            <?php foreach ($laporan as $lhs) : ?>
                <div class="modal fade" id="triwulan<?= $lhs['id_triwulan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Laporan <?php echo $lhs['nm_laporan'] ?></h5>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?php echo base_url('Pta_user/lap_RekapTriwulan'); ?>" enctype="multipart/form-data">

                                    <input type="text" id="id_laper" name="id_triwulan" value="<?php echo $lhs['id_triwulan'] ?>" hidden>
                                    <input type="text" id="id_laper" name="tahun" value="<?php echo $lhs['periode_tahun'] ?>" hidden>
                                    <input type="text" id="id_laper" name="berkas_laporan" value="<?php echo $lhs['berkas_laporan'] ?>" hidden>
                                    <input type="text" id="id_laper" name="nm_laporan" value="<?php echo $lhs['nm_laporan'] ?>" hidden>

                                    <div class="input-group input-group-sm input-group-outline my-3">
                                        <div class="col-3">
                                            <label class="form-label">File PDF</label>
                                        </div>
                                        <div class="col">
                                            <input type="file" name="file_pdf" class="form-control form-control-sm" placeholder="tes">
                                        </div>
                                    </div>
                                    <div class="input-group input-group-sm input-group-outline my-3">
                                        <div class="col-3">
                                            <label class="form-label">File Excel</label>
                                        </div>
                                        <div class="col">
                                            <input type="file" name="file_excel" class="form-control form-control-sm" placeholder="tes">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- catatan modal end -->

            <!-- //modal tampil pdf -->

            <div class="modal fade" id="triwulanPdf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Laporan Triwulan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="triwulan_pdf">


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary mx-auto" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end modal tampil pdf -->

        </div>


        <!-- content end -->