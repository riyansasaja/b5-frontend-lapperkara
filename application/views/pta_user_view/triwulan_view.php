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
                                                    <p class="text-xs text-secondary mb-0 ms-3"><?php echo $i++ ?></p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="text-xs text-secondary mb-0"><?php echo $lhs['nm_laporan']; ?></p>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-normal"><?php echo $lhs['tgl_upload']; ?></span>
                                            </td>
                                            <td class="align-middle text-center">

                                                <span class="text-secondary text-xs font-weight-normal">
                                                    <a href="#!" data-bs-toggle="modal" data-bs-target="#triwulanPdf" data-id="<?= $lhs['kode_pa'] ?> <?= $lhs['berkas_laporan'] ?> <?= $lhs['periode_tahun'] ?>/<?= $lhs['nm_laporan'] ?>/<?= $lhs['lap_pdf'] ?>" class="fas fa-file-pdf"></a> |
                                                    <a href="<?php echo base_url() ?>index.php/Pta_user/download_xls_triwulan/<?= $lhs['id_triwulan'] ?>" class="fas fa-file-excel"></a>
                                                </span>
                                            </td>

                                            <td class="align-middle text-center">

                                                <span class="text-success text-xs font-weight-normal">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#catatanModal<?= $lhs['id_triwulan'] ?>"><i class="fas fa-clipboard"></i></a>
                                                </span>

                                            </td>

                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-normal">
                                                    <a href="<?php echo base_url() ?>index.php/Pta_user/zip_file_triwulan/<?= $lhs['id_triwulan'] ?>" class="fas fa-download"></a>
                                                </span>

                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-normal">
                                                    <?php echo $lhs['tgl_revisi']; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php if ($lhs['status_validasi'] == "Belum Validasi") : ?>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#validasiModal<?= $lhs['id_triwulan']; ?>">
                                                        <span id="validate" class="text-white bg-gradient-danger text-xs font-weight-normal">
                                                            <?php echo $lhs['status_validasi']; ?>
                                                        </span>
                                                    </a>

                                                <?php elseif ($lhs['status_validasi'] == "Revisi") : ?>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#validasiModal<?= $lhs['id_triwulan']; ?>">
                                                        <span id="validate" class="text-white bg-gradient-dark text-xs font-weight-normal">
                                                            <?php echo $lhs['status_validasi']; ?>
                                                        </span>
                                                    </a>

                                                <?php else : ?>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#validasiModal<?= $lhs['id_triwulan']; ?>">
                                                        <span id="validate" class="text-white bg-gradient-success text-xs font-weight-normal">
                                                            <?php echo $lhs['status_validasi']; ?>
                                                        </span>
                                                    </a>

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
            <?php foreach ($laporan as $lhs) : ?>
                <div class="modal fade" id="catatanModal<?= $lhs['id_triwulan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Catatan Perbaikan</h5>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?php echo base_url('Pta_user/add_catatan_triwulan'); ?>" enctype="multipart/form-data">

                                    <div class="container">
                                        <?php foreach ($catatan as $ct) : ?>
                                            <?php if ($ct['id_triwulan'] == $lhs['id_triwulan']) : ?>
                                                <div class="card card-frame mb-2">
                                                    <div class="card-body">
                                                        <h6><?php echo $ct['tgl_catatan']; ?></h6>
                                                        <p><?php echo $ct['catatan']; ?></p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>

                                    <div class="container">
                                        <div class="form-floating">
                                            <input type="text" id="id_laper" name="id_triwulan" value="<?php echo $lhs['id_triwulan'] ?>" hidden>
                                            <textarea class="form-control" name="catatan" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Klik untuk membuat catatan</label>
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

            <!-- validasi Modal start -->
            <?php foreach ($laporan as $lhs) : ?>
                <div class="modal fade" id="validasiModal<?php echo $lhs['id_triwulan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <form method="POST" action="<?php echo base_url('Pta_user/add_validasi_triwulan'); ?>" enctype="multipart/form-data">

                                    <input type="text" id="id_laper" name="id_triwulan" value="<?php echo $lhs['id_triwulan'] ?>" hidden>

                                    <div class="row align-items-center">
                                        <div class="col text-end">
                                            <h3>Validasi Laporan ini</h3>
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid" src="<?= base_url('assets/ilus/') ?>tanya.png" alt="">
                                        </div>

                                    </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                                <input type="submit" name="validasi" value="Revisi" class="btn bg-gradient-warning">
                                <input type="submit" name="validasi" value="Validasi" class="btn bg-gradient-success">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- validasi modal end -->

        </div>
    </div>
    <!-- modal end -->


    </div>


    <!-- content end -->