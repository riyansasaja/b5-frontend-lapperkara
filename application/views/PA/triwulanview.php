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
                                                    <a href="<?php echo base_url() ?>index.php/PA_laper/download_xls_triwulan/<?= $lhs['id_triwulan'] ?>" class="fas fa-file-excel"></a>
                                                </span>
                                            </td>

                                            <td class="align-middle text-center">
                                                <span class="text-success text-xs font-weight-normal">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#catatanModal<?= $lhs['id_triwulan'] ?>"><i class="fas fa-clipboard"></i></a>

                                                </span>
                                            </td>

                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-normal">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#revisiModal<?= $lhs['id_triwulan'] ?>" class="fas fa-upload"></a> | <a href="<?php echo base_url() ?>index.php/PA_laper/zip_file_triwulan/<?= $lhs['id_triwulan'] ?>" class="fas fa-download"></a>
                                                </span>

                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-normal">
                                                    <?php echo $lhs['tgl_revisi']; ?>
                                                </span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <?php if ($lhs['status_validasi'] == "Belum Validasi") : ?>
                                                    <span id="validate" class="text-white bg-gradient-danger text-xs font-weight-normal">
                                                        <?php echo $lhs['status_validasi']; ?>
                                                    </span>
                                                <?php elseif ($lhs['status_validasi'] == "Revisi") : ?>
                                                    <span id="validate" class="text-white bg-gradient-dark text-xs font-weight-normal">
                                                        <?php echo $lhs['status_validasi']; ?>
                                                    </span>
                                                <?php else : ?>
                                                    <span id="validate" class="text-white bg-gradient-success text-xs font-weight-normal">
                                                        <?php echo $lhs['status_validasi']; ?>
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
            <?php foreach ($catatan as $lhs) : ?>
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


                                <div class="card card-frame mb-2">
                                    <div class="card-body">
                                        <h6><?php echo $lhs['tgl_catatan']; ?></h6>
                                        <p><?php echo $lhs['catatan']; ?></p>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
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

            <!-- modal -->
            <?php foreach ($laporan as $lhs) : ?>
                <div class="modal fade" id="revisiModal<?= $lhs['id_triwulan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                <form method="POST" action="<?php echo base_url('PA_laper/revisi_laporan_triwulan'); ?>" enctype="multipart/form-data">

                                    <input type="hidden" class="form-controll" value="<?php echo $lhs['id_triwulan'] ?>" name="id">
                                    <input type="hidden" class="form-controll" value="<?php echo $lhs['berkas_laporan'] ?>" name="berkas_laporan">
                                    <input type="hidden" class="form-controll" value="<?php echo $lhs['periode_tahun'] ?>" name="periode_tahun">
                                    <input type="hidden" class="form-controll" value="<?php echo $lhs['nm_laporan'] ?>" name="nm_laporan">

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
            <?php endforeach; ?>
            <!-- modal -->

        </div>
    </div>
    <!-- modal end -->


    </div>


    <!-- content end -->