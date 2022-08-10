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
                                    <?php $i = 1; ?>
                                    <?php foreach ($laporan as $lhs) : ?>
                                        <!-- first loop -->
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
                                                <input type="text" name="kode_pa" value="<?php echo $lhs['kode_pa'] ?>" hidden>
                                                <span class="text-secondary text-xs font-weight-normal">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#viewdocumentModal" data-id="<?= $laporan['0']['kode_pa'] ?> <?= $laporan['0']['periode'] ?>/<?= $laporan['0']['laper_pdf'] ?>">
                                                        <i class="fas fa-file-pdf"></i> |
                                                    </a>
                                                    <a href="<?php echo base_url() ?>index.php/Admin/download_xls/<?= $laporan['0']['id'] ?>">
                                                        <i class="fas fa-file-excel"></i>
                                                    </a>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-success text-xs font-weight-normal">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#catatanModal"><i class="fas fa-clipboard"></i></a>

                                                </span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-normal">
                                                    <i class="fas fa-eye"></i>
                                                </span>

                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-normal">
                                                    <?php echo $lhs['tgl_terakhir_rev']; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php if ($lhs['status'] == "Belum Validasi") : ?>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#validasiModal">
                                                        <span class="text-white bg-gradient-danger text-xs font-weight-normal rounded p-1">
                                                            <?php echo $lhs['status']; ?>
                                                        </span>
                                                    </a>
                                                <?php else : ?>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#validasiModal">
                                                        <span class="text-white bg-gradient-success text-xs font-weight-normal rounded p-1">
                                                            <?php echo $lhs['status']; ?>
                                                        </span>
                                                    </a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <!-- looping data end -->
                                    <?php endforeach; ?>
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
                            <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Catatan Laporan Perkara</h5>
                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="<?php echo base_url('Admin/add_catatan'); ?>" enctype="multipart/form-data">
                                <div class="form-floating">
                                    <?php foreach ($laporan as $lhs) : ?>
                                        <input type="text" id="id_laper" name="id_laper" value="<?php echo $lhs['id'] ?>" hidden>
                                    <?php endforeach; ?>
                                    <textarea class="form-control" name="catatan" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Klik untuk membuat catatan</label>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- catatan modal end -->

            <!-- validasi Modal start -->
            <div class="modal fade" id="validasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-body">
                            <form method="POST" action="<?php echo base_url('Admin/add_validasi'); ?>" enctype="multipart/form-data">
                                <?php foreach ($laporan as $lhs) : ?>
                                    <input type="text" id="id_laper" name="id_laper" value="<?php echo $lhs['id'] ?>" hidden>
                                <?php endforeach; ?>
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
                            <input type="submit" name="validasi" value="Validasi" class="btn bg-gradient-primary">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- validasi modal end -->

            <!-- viewdocument Modal start -->
            <div class="modal fade" id="viewdocumentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-normal" id="exampleModalLabel">View Document</h5>
                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body" id="tampil">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#catatanModal" class="text-white btn btn-primary active" role="button">Buat Catatan</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- viewdocument modal end -->


        </div>